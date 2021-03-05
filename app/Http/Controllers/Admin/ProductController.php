<?php

namespace App\Http\Controllers\Admin;

use App\Attribute;
use App\Http\Controllers\Controller;
use App\Product;
use App\ProductFeature;
use App\Role;
use App\Setting;
use App\User;
use Artesaos\SEOTools\Facades\SEOMeta;
use Carbon\Carbon;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\URL;
use Illuminate\Validation\ValidationException;
use Intervention\Image\Facades\Image;

class ProductController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $settings = app('site_global_settings');

        /**
         * Start SEO
         */
        SEOMeta::setTitle(__('products.seo.index', ['site_name' => empty($settings->setting_site_name) ? config('app.name', 'Laravel') : $settings->setting_site_name]));
        SEOMeta::setDescription('');
        SEOMeta::setCanonical(URL::current());
        SEOMeta::addKeyword($settings->setting_site_seo_home_keywords);
        /**
         * End SEO
         */

        $show_products_for = $request->show_products_for;
        $show_products_status = $request->show_products_status;

        $all_products_query = Product::query();

        if(!empty($show_products_for))
        {
            // show products for specific user
            $all_products_query->where('user_id', $show_products_for);
        }

        if(!empty($show_products_status))
        {
            // show products for specific status
            $all_products_query->where('product_status', $show_products_status);
        }

        $all_products = $all_products_query->get();

        /**
         * Start initial data filter form
         */
        $all_users = User::where('email_verified_at', '!=', null)
            ->where('role_id', Role::USER_ROLE_ID)
            ->where('user_suspended', User::USER_NOT_SUSPENDED)
            ->orderBy('name')
            ->get();

        $admin_user = Auth::user();
        /**
         * End initial data filter form
         */

        $setting_product_currency_symbol = $settings->setting_product_currency_symbol;

        return response()->view('backend.admin.product.index',
            compact('all_users', 'admin_user', 'all_products',
                'show_products_for', 'show_products_status', 'setting_product_currency_symbol'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $settings = app('site_global_settings');

        /**
         * Start SEO
         */
        SEOMeta::setTitle(__('products.seo.create', ['site_name' => empty($settings->setting_site_name) ? config('app.name', 'Laravel') : $settings->setting_site_name]));
        SEOMeta::setDescription('');
        SEOMeta::setCanonical(URL::current());
        SEOMeta::addKeyword($settings->setting_site_seo_home_keywords);
        /**
         * End SEO
         */

        /**
         * Start initial form of Attribute owner selector
         */
        $all_users = User::where('email_verified_at', '!=', null)
            ->where('role_id', Role::USER_ROLE_ID)
            ->where('user_suspended', User::USER_NOT_SUSPENDED)
            ->orderBy('name')
            ->get();

        $admin_user = Auth::user();
        /**
         * End initial form of Attribute owner selector
         */

        $setting_product_max_gallery_photos = $settings->setting_product_max_gallery_photos;
        $setting_product_currency_symbol = $settings->setting_product_currency_symbol;

        return response()->view('backend.admin.product.create',
            compact('all_users', 'admin_user', 'setting_product_max_gallery_photos',
                    'setting_product_currency_symbol'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     * @throws ValidationException
     */
    public function store(Request $request)
    {
        $settings = app('site_global_settings');

        /**
         * Start form validation
         */
        $request->validate([
            'user_id' => 'required|numeric',
            'product_status' => 'required|numeric',
            'product_name' => 'required|max:255',
            'product_description' => 'required|max:65535',
            'product_price' => 'nullable|regex:/^\d+(\.\d{1,2})?$/',
        ]);

        $user_id = $request->user_id;
        $product_status = $request->product_status;
        $product_name = $request->product_name;
        $product_description = $request->product_description;
        $product_price = $request->product_price;
        $product_image_large = $request->feature_image;
        $product_slug = uniqid() . $user_id;

        $validate_error = array();
        $user_id_exist = User::where('id', $user_id)
            ->where('user_suspended', User::USER_NOT_SUSPENDED)
            ->get()->count();
        if($user_id_exist == 0)
        {
            $validate_error['user_id'] = __('products.error.user-not-exist');
        }
        if(count($validate_error) > 0)
        {
            throw ValidationException::withMessages($validate_error);
        }
        /**
         * End form validation
         */

        /**
         * Start saving product feature image
         */
        $product_image_large_name = null;
        $product_image_medium_name = null;
        $product_image_small_name = null;
        if(!empty($product_image_large))
        {
            $currentDate = Carbon::now()->toDateString();
            $product_image_large_name = $user_id . '-large-' . uniqid() . '-' . $currentDate .'.jpg';
            $product_image_medium_name = $user_id . '-medium-' . uniqid() . '-' . $currentDate . '.jpg';
            $product_image_small_name = $user_id . '-small-' . uniqid() . '-' . $currentDate . '.jpg';

            if(!Storage::disk('public')->exists('product')){
                Storage::disk('public')->makeDirectory('product');
            }

            // large size (original)
            $product_image_large_image_obj = Image::make(base64_decode(preg_replace('#^data:image/\w+;base64,#i', '',$product_image_large)))->stream('jpg', 70);
            Storage::disk('public')->put('product/'.$product_image_large_name, $product_image_large_image_obj);

            // medium size
            $product_image_medium_image_obj = Image::make(base64_decode(preg_replace('#^data:image/\w+;base64,#i', '',$product_image_large)))
                ->resize(224, null, function($constraint) {
                    $constraint->aspectRatio();
                });
            $product_image_medium_image_obj = $product_image_medium_image_obj->stream('jpg', 70);
            Storage::disk('public')->put('product/'.$product_image_medium_name, $product_image_medium_image_obj);

            // small size
            $product_image_small_image_obj = Image::make(base64_decode(preg_replace('#^data:image/\w+;base64,#i', '',$product_image_large)))
                ->resize(128, null, function($constraint) {
                    $constraint->aspectRatio();
                });
            $product_image_small_image_obj = $product_image_small_image_obj->stream('jpg', 70);
            Storage::disk('public')->put('product/'.$product_image_small_name, $product_image_small_image_obj);
        }
        /**
         * End saving product feature image
         */

        /**
         * Start saving new product
         */
        $new_product = new Product(array(
            'user_id' => $user_id,
            'product_status' => $product_status,
            'product_name' => $product_name,
            'product_description' => $product_description,
            'product_price' => $product_price,
            'product_slug' => $product_slug,
            'product_image_small' => $product_image_small_name,
            'product_image_medium' => $product_image_medium_name,
            'product_image_large' => $product_image_large_name,
        ));
        $new_product->save();
        /**
         * End saving new product
         */

        /**
         * Start saving product gallery images
         */
        $image_gallary = $request->image_gallery;
        if(is_array($image_gallary) && count($image_gallary) > 0)
        {
            foreach($image_gallary as $key => $image)
            {
                if($key < $settings->setting_product_max_gallery_photos)
                {
                    $currentDate = Carbon::now()->toDateString();
                    $product_image_gallery['product_image_gallery_name'] = $user_id . '-gallery-' . uniqid() . '-' . $currentDate . '.jpg';
                    $product_image_gallery['product_image_gallery_thumb_name'] = $user_id . '-gallery-thumb-' . uniqid() . '-' . $currentDate . '.jpg';

                    if(!Storage::disk('public')->exists('product/gallery')){
                        Storage::disk('public')->makeDirectory('product/gallery');
                    }

                    // original
                    $one_gallery_image_obj = Image::make(base64_decode(preg_replace('#^data:image/\w+;base64,#i', '',$image)))->stream('jpg', 80);
                    Storage::disk('public')->put('product/gallery/'.$product_image_gallery['product_image_gallery_name'], $one_gallery_image_obj);

                    // thumb size
                    $one_gallery_image_thumb_obj = Image::make(base64_decode(preg_replace('#^data:image/\w+;base64,#i', '',$image)))
                        ->resize(null, 80, function($constraint) {
                            $constraint->aspectRatio();
                        });
                    $one_gallery_image_thumb_obj = $one_gallery_image_thumb_obj->stream('jpg', 70);
                    Storage::disk('public')->put('product/gallery/'.$product_image_gallery['product_image_gallery_thumb_name'], $one_gallery_image_thumb_obj);

                    $new_product_image_gallery = $new_product->productGalleries()->create($product_image_gallery);
                }
            }
        }
        /**
         * End saving product gallery images
         */

        // success, flash message
        \Session::flash('flash_message', __('products.alert.product-created'));
        \Session::flash('flash_type', 'success');

        return redirect()->route('admin.products.edit', ['product' => $new_product->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param Product $product
     * @return RedirectResponse
     */
    public function show(Product $product)
    {
        return redirect()->route('admin.products.edit', ['product' => $product]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Product $product
     * @return Response
     */
    public function edit(Product $product)
    {
        $settings = app('site_global_settings');

        /**
         * Start SEO
         */
        SEOMeta::setTitle(__('products.seo.edit', ['site_name' => empty($settings->setting_site_name) ? config('app.name', 'Laravel') : $settings->setting_site_name]));
        SEOMeta::setDescription('');
        SEOMeta::setCanonical(URL::current());
        SEOMeta::addKeyword($settings->setting_site_seo_home_keywords);
        /**
         * End SEO
         */

        $product_owner = $product->user()->first();
        $product_features = $product->productFeatures()
            ->with('attribute')
            ->orderBy('product_feature_order')
            ->get();

        /**
         * Start initial available product attributes
         */
        $attributes = Attribute::where('user_id', $product->user_id)
            ->orderBy('attribute_name')
            ->get();
        /**
         * End initial available product attributes
         */

        $setting_product_max_gallery_photos = $settings->setting_product_max_gallery_photos;
        $setting_product_currency_symbol = $settings->setting_product_currency_symbol;

        return response()->view('backend.admin.product.edit',
            compact('product', 'product_owner', 'product_features', 'attributes',
                'setting_product_max_gallery_photos', 'setting_product_currency_symbol'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Product $product
     * @return RedirectResponse
     */
    public function update(Request $request, Product $product)
    {
        $settings = app('site_global_settings');

        /**
         * Start form validation
         */
        $validate_rule = [
            'product_status' => 'required|numeric',
            'product_name' => 'required|max:255',
            'product_description' => 'required|max:65535',
            'product_price' => 'nullable|regex:/^\d+(\.\d{1,2})?$/',
        ];

        $product_features_links = $product->productFeatures()
            ->with('attribute')
            ->get();


        $product_features_links_validation = array();
        foreach($product_features_links as $key => $product_feature_link)
        {
            if($product_feature_link->attribute->attribute_type == Attribute::TYPE_LINK)
            {
                $product_features_links_validation[str_slug('product_feature_' . $product_feature_link->id)] = 'nullable|url';
            }
        }
        $validate_rule = array_merge($validate_rule, $product_features_links_validation);

        $request->validate($validate_rule);
        /**
         * End form validation
         */

        $user_id = $product->user_id;
        $product_status = $request->product_status;
        $product_name = $request->product_name;
        $product_description = $request->product_description;
        $product_price = $request->product_price;
        $product_image_large = $request->feature_image;

        /**
         * Start saving feature image
         */
        $product_image_large_name = $product->product_image_large;
        $product_image_medium_name = $product->product_image_medium;
        $product_image_small_name = $product->product_image_small;
        if(!empty($product_image_large))
        {
            $currentDate = Carbon::now()->toDateString();
            $product_image_large_name = $user_id . '-large-' . uniqid() . '-' . $currentDate .'.jpg';
            $product_image_medium_name = $user_id . '-medium-' . uniqid() . '-' . $currentDate . '.jpg';
            $product_image_small_name = $user_id . '-small-' . uniqid() . '-' . $currentDate . '.jpg';

            if(!Storage::disk('public')->exists('product')){
                Storage::disk('public')->makeDirectory('product');
            }

            if(Storage::disk('public')->exists('product/' . $product->product_image_large)){

                Storage::disk('public')->delete('product/' . $product->product_image_large);
                Storage::disk('public')->delete('product/' . $product->product_image_medium);
                Storage::disk('public')->delete('product/' . $product->product_image_small);

            }

            // large size (original)
            $product_image_large_image_obj = Image::make(base64_decode(preg_replace('#^data:image/\w+;base64,#i', '',$product_image_large)))->stream('jpg', 70);
            Storage::disk('public')->put('product/'.$product_image_large_name, $product_image_large_image_obj);

            // medium size
            $product_image_medium_image_obj = Image::make(base64_decode(preg_replace('#^data:image/\w+;base64,#i', '',$product_image_large)))
                ->resize(224, null, function($constraint) {
                    $constraint->aspectRatio();
                });
            $product_image_medium_image_obj = $product_image_medium_image_obj->stream('jpg', 70);
            Storage::disk('public')->put('product/'.$product_image_medium_name, $product_image_medium_image_obj);

            // small size
            $product_image_small_image_obj = Image::make(base64_decode(preg_replace('#^data:image/\w+;base64,#i', '',$product_image_large)))
                ->resize(128, null, function($constraint) {
                    $constraint->aspectRatio();
                });
            $product_image_small_image_obj = $product_image_small_image_obj->stream('jpg', 70);
            Storage::disk('public')->put('product/'.$product_image_small_name, $product_image_small_image_obj);
        }
        /**
         * End saving feature image
         */

        /**
         * Start saving product
         */
        $product->product_status = $product_status;
        $product->product_name = $product_name;
        $product->product_description = $product_description;
        $product->product_price = $product_price;
        $product->product_image_small = $product_image_small_name;
        $product->product_image_medium = $product_image_medium_name;
        $product->product_image_large = $product_image_large_name;
        $product->save();
        /**
         * End saving product
         */

        /**
         * Start saving product gallery images
         */
        $image_gallary = $request->image_gallery;
        if(is_array($image_gallary) && count($image_gallary) > 0)
        {
            $total_product_image_gallery = $product->productGalleries()->get()->count();
            foreach($image_gallary as $key => $image)
            {
                if($total_product_image_gallery + $key < $settings->setting_product_max_gallery_photos)
                {
                    $currentDate = Carbon::now()->toDateString();
                    $product_image_gallery['product_image_gallery_name'] = $user_id . '-gallery-' . uniqid() . '-' . $currentDate . '.jpg';
                    $product_image_gallery['product_image_gallery_thumb_name'] = $user_id . '-gallery-thumb-' . uniqid() . '-' . $currentDate . '.jpg';

                    if(!Storage::disk('public')->exists('product/gallery')){
                        Storage::disk('public')->makeDirectory('product/gallery');
                    }

                    // original
                    $one_gallery_image_obj = Image::make(base64_decode(preg_replace('#^data:image/\w+;base64,#i', '',$image)))->stream('jpg', 80);
                    Storage::disk('public')->put('product/gallery/'.$product_image_gallery['product_image_gallery_name'], $one_gallery_image_obj);

                    // thumb size
                    $one_gallery_image_thumb_obj = Image::make(base64_decode(preg_replace('#^data:image/\w+;base64,#i', '',$image)))
                        ->resize(null, 80, function($constraint) {
                            $constraint->aspectRatio();
                        });
                    $one_gallery_image_thumb_obj = $one_gallery_image_thumb_obj->stream('jpg', 70);
                    Storage::disk('public')->put('product/gallery/'.$product_image_gallery['product_image_gallery_thumb_name'], $one_gallery_image_thumb_obj);

                    $new_product_image_gallery = $product->productGalleries()->create($product_image_gallery);
                }
            }
        }
        /**
         * End saving product gallery images
         */

        /**
         * Start saving product features
         */
        $product_features = $product->productFeatures()
            ->with('attribute')
            ->get();

        foreach($product_features as $key => $product_feature)
        {
            if($product_feature->attribute->attribute_type == Attribute::TYPE_MULTI_SELECT)
            {
                $multi_select_values = $request->get(str_slug('product_feature_' . $product_feature->id), '');
                $multi_select_str = '';
                if(is_array($multi_select_values))
                {
                    foreach($multi_select_values as $key => $value)
                    {
                        $multi_select_str .= $value . ', ';
                    }
                }

                $product_feature->product_feature_value = empty($multi_select_str) ? '' : substr(trim($multi_select_str), 0, -1);
                $product_feature->save();
            }
            else
            {
                $product_feature->product_feature_value = $request->get(str_slug('product_feature_' . $product_feature->id), '');
                $product_feature->save();
            }
        }
        /**
         * End saving product features
         */

        // success, flash message
        \Session::flash('flash_message', __('products.alert.product-updated'));
        \Session::flash('flash_type', 'success');

        return redirect()->route('admin.products.edit', ['product' => $product]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Product $product
     * @return RedirectResponse
     */
    public function destroy(Product $product)
    {
        if($product->hasAssignedToListing())
        {
            \Session::flash('flash_message', __('products.alert.product-in-use'));
            \Session::flash('flash_type', 'danger');

            return redirect()->route('admin.products.edit', ['product' => $product]);
        }
        else
        {
            $product->deleteProduct();

            \Session::flash('flash_message', __('products.alert.product-deleted'));
            \Session::flash('flash_type', 'success');

            return redirect()->route('admin.products.index');
        }

    }

    /**
     * @param Request $request
     * @param Product $product
     * @return RedirectResponse
     * @throws ValidationException
     */
    public function updateProductAttribute(Request $request, Product $product)
    {
        /**
         * Start form validation
         */
        $request->validate([
            'attribute' => 'required|array',
            'attribute.*' => 'numeric',
        ]);

        $product_attributes = $request->attribute;

        $validate_error = array();
        foreach($product_attributes as $key => $attribute)
        {
            $attribute_exist = Attribute::find($attribute);

            if(!$attribute_exist)
            {
                $validate_error['attributes'] = __('products.product-attribute-not-exist');
            }
            else
            {
                if($attribute_exist->user_id != $product->user_id)
                {
                    $validate_error['attributes'] = __('products.attribute-owner-not-match-product');
                }
            }
        }
        if(count($validate_error) > 0)
        {
            throw ValidationException::withMessages($validate_error);
        }
        /**
         * End form validation
         */

        $product_features_count = $product->productFeatures()->get()->count();

        foreach($product_attributes as $key => $attribute)
        {
            $new_product_feature = new ProductFeature(array(
                'attribute_id' => $attribute,
                'product_feature_order' => $product_features_count + ($key + 1),
            ));

            $product->productFeatures()->save($new_product_feature);
        }

        // success, flash message
        \Session::flash('flash_message', __('products.alert.product-attribute-added'));
        \Session::flash('flash_type', 'success');

        return redirect()->route('admin.products.edit', ['product' => $product]);
    }

    public function rankUpProductFeature(Request $request, Product $product, ProductFeature $product_feature)
    {
        $old_rank = intval($product_feature->product_feature_order);

        $move_down_product_feature = $product->productFeatures()
            ->where('product_feature_order', $old_rank-1)
            ->get();

        if($move_down_product_feature->count() > 0)
        {
            $move_down_product_feature = $move_down_product_feature->first();
            $move_down_product_feature->product_feature_order = $old_rank;
            $move_down_product_feature->save();

            $product_feature->product_feature_order = $old_rank-1;
            $product_feature->save();
        }

        // success, flash message
        \Session::flash('flash_message', __('products.alert.product-feature-ranked-up'));
        \Session::flash('flash_type', 'success');

        return redirect()->route('admin.products.edit', ['product' => $product]);
    }

    public function rankDownProductFeature(Request $request, Product $product, ProductFeature $product_feature)
    {
        $old_rank = intval($product_feature->product_feature_order);

        $move_up_product_feature = $product->productFeatures()
            ->where('product_feature_order', $old_rank+1)
            ->get();

        if($move_up_product_feature->count() > 0)
        {
            $move_up_product_feature = $move_up_product_feature->first();
            $move_up_product_feature->product_feature_order = $old_rank;
            $move_up_product_feature->save();

            $product_feature->product_feature_order = $old_rank+1;
            $product_feature->save();
        }

        // success, flash message
        \Session::flash('flash_message', __('products.alert.product-feature-ranked-down'));
        \Session::flash('flash_type', 'success');

        return redirect()->route('admin.products.edit', ['product' => $product]);
    }

    public function destroyProductFeature(Request $request, Product $product, ProductFeature $product_feature)
    {
        // first to re-order the lower product features record
        $product_features = $product->productFeatures()
            ->where('product_feature_order', '>', $product_feature->product_feature_order)
            ->orderBy('product_feature_order')
            ->get();

        foreach($product_features as $key => $feature)
        {
            $feature->product_feature_order = intval($feature->product_feature_order) - 1;
            $feature->save();
        }

        $product_feature->delete();

        // success, flash message
        \Session::flash('flash_message', __('products.alert.product-feature-deleted'));
        \Session::flash('flash_type', 'success');

        return redirect()->route('admin.products.edit', ['product' => $product]);
    }

    public function approveProduct(Request $request, Product $product)
    {
        $product->product_status = Product::STATUS_APPROVED;
        $product->save();

        \Session::flash('flash_message', __('products.alert.product-approved'));
        \Session::flash('flash_type', 'success');

        return redirect()->route('admin.products.edit', ['product' => $product]);
    }

    public function disapproveProduct(Request $request, Product $product)
    {
        $product->product_status = Product::STATUS_PENDING;
        $product->save();

        \Session::flash('flash_message', __('products.alert.product-disapproved'));
        \Session::flash('flash_type', 'success');

        return redirect()->route('admin.products.edit', ['product' => $product]);
    }

    public function suspendProduct(Request $request, Product $product)
    {
        $product->product_status = Product::STATUS_SUSPEND;
        $product->save();

        \Session::flash('flash_message', __('products.alert.product-suspended'));
        \Session::flash('flash_type', 'success');

        return redirect()->route('admin.products.edit', ['product' => $product]);
    }

    public function editProductSetting(Request $request)
    {
        $settings = app('site_global_settings');

        /**
         * Start SEO
         */
        SEOMeta::setTitle(__('products.seo.edit', ['site_name' => empty($settings->setting_site_name) ? config('app.name', 'Laravel') : $settings->setting_site_name]));
        SEOMeta::setDescription('');
        SEOMeta::setCanonical(URL::current());
        SEOMeta::addKeyword($settings->setting_site_seo_home_keywords);
        /**
         * End SEO
         */

        return response()->view('backend.admin.product.setting',
            compact('settings'));
    }

    public function updateProductSetting(Request $request)
    {
        /**
         * Start form validation
         */
        $request->validate([
            'setting_product_max_gallery_photos' => 'required|numeric|between:1,20',
            'setting_product_auto_approval_enable' => 'required|numeric|in:0,1',
            'setting_product_currency_symbol' => 'required|max:3',
        ]);

        $setting_product_max_gallery_photos = $request->setting_product_max_gallery_photos;
        $setting_product_auto_approval_enable = empty($request->setting_product_auto_approval_enable) ? Setting::SITE_PRODUCT_AUTO_APPROVAL_DISABLED : Setting::SITE_PRODUCT_AUTO_APPROVAL_ENABLED;
        $setting_product_currency_symbol = $request->setting_product_currency_symbol;
        /**
         * End form validation
         */

        $setting = Setting::findOrFail(1);
        $setting->setting_product_max_gallery_photos = $setting_product_max_gallery_photos;
        $setting->setting_product_auto_approval_enable = $setting_product_auto_approval_enable;
        $setting->setting_product_currency_symbol = $setting_product_currency_symbol;

        $setting->save();

        \Session::flash('flash_message', __('products.alert.product-setting-updated'));
        \Session::flash('flash_type', 'success');

        return redirect()->route('admin.product.setting.edit');
    }
}
