<?php

namespace App\Http\Controllers\Auth;

use App\Customization;
use App\Http\Controllers\Controller;
use App\Setting;
use Artesaos\SEOTools\Facades\SEOMeta;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\URL;

class ForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */
    use SendsPasswordResetEmails;

    public function showLinkRequestForm()
    {

        $settings = app('site_global_settings');

        /**
         * Start SEO
         */
        SEOMeta::setTitle(__('seo.auth.forgot-password', ['site_name' => empty($settings->setting_site_name) ? config('app.name', 'Laravel') : $settings->setting_site_name]));
        SEOMeta::setDescription('');
        SEOMeta::setCanonical(URL::current());
        SEOMeta::addKeyword($settings->setting_site_seo_home_keywords);
        /**
         * End SEO
         */

        /**
         * Start inner page header customization
         */
        $site_innerpage_header_background_type = Customization::where('customization_key', Customization::SITE_INNERPAGE_HEADER_BACKGROUND_TYPE)
            ->get()->first()->customization_value;

        $site_innerpage_header_background_color = Customization::where('customization_key', Customization::SITE_INNERPAGE_HEADER_BACKGROUND_COLOR)
            ->get()->first()->customization_value;

        $site_innerpage_header_background_image = Customization::where('customization_key', Customization::SITE_INNERPAGE_HEADER_BACKGROUND_IMAGE)
            ->get()->first()->customization_value;

        $site_innerpage_header_background_youtube_video = Customization::where('customization_key', Customization::SITE_INNERPAGE_HEADER_BACKGROUND_YOUTUBE_VIDEO)
            ->get()->first()->customization_value;

        $site_innerpage_header_title_font_color = Customization::where('customization_key', Customization::SITE_INNERPAGE_HEADER_TITLE_FONT_COLOR)
            ->get()->first()->customization_value;

        $site_innerpage_header_paragraph_font_color = Customization::where('customization_key', Customization::SITE_INNERPAGE_HEADER_PARAGRAPH_FONT_COLOR)
            ->get()->first()->customization_value;
        /**
         * End inner page header customization
         */

        return view('auth.passwords.email',
            compact('site_innerpage_header_background_type', 'site_innerpage_header_background_color',
                    'site_innerpage_header_background_image', 'site_innerpage_header_background_youtube_video',
                    'site_innerpage_header_title_font_color', 'site_innerpage_header_paragraph_font_color'));
    }

    /**
     * Send a reset link to the given user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\JsonResponse
     */
    public function sendResetLinkEmail(Request $request)
    {
        $settings = app('site_global_settings');

        /**
         * Start initial SMTP settings
         */
        if($settings->settings_site_smtp_enabled == Setting::SITE_SMTP_ENABLED)
        {
            // config SMTP
            config_smtp(
                $settings->settings_site_smtp_sender_name,
                $settings->settings_site_smtp_sender_email,
                $settings->settings_site_smtp_host,
                $settings->settings_site_smtp_port,
                $settings->settings_site_smtp_encryption,
                $settings->settings_site_smtp_username,
                $settings->settings_site_smtp_password
            );
        }
        /**
         * End initial SMTP settings
         */

        $this->validateEmail($request);

        // We will send the password reset link to this user. Once we have attempted
        // to send the link, we will examine the response then see the message we
        // need to show to the user. Finally, we'll send out a proper response.
        $response = $this->broker()->sendResetLink(
            $this->credentials($request)
        );

        return $response == Password::RESET_LINK_SENT
            ? $this->sendResetLinkResponse($request, $response)
            : $this->sendResetLinkFailedResponse($request, $response);
    }
}
