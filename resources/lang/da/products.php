<?php
return array (
  'seo' =>
  array (
    'index' => 'Dashboard - Produkt - :site_name',
    'create' => 'Dashboard - Opret produkt - :site_name',
    'edit' => 'Dashboard - Rediger produkt - :site_name',
    'edit-setting' => 'Dashboard - Produktindstilling - :site_name',
  ),
  'alert' =>
  array (
    'product-created' => 'Produkt oprettet med succes',
    'product-updated' => 'Produktet blev opdateret',
    'product-deleted' => 'Produktet blev slettet',
    'product-attribute-added' => 'Produktattribut tilføjet med succes',
    'product-feature-ranked-up' => 'Produktfunktion rangordnet med succes',
    'product-feature-ranked-down' => 'Produktfunktion rangeret med succes',
    'product-feature-deleted' => 'Produktfunktion blev slettet',
    'product-approved' => 'Produktet er nu i godkendt status',
    'product-disapproved' => 'Produktet er nu i afventende godkendelsesstatus',
    'product-suspended' => 'Produktet er nu i suspenderet status',
    'product-setting-updated' => 'Produktindstillingen blev opdateret',
    'this-is-your-product' => 'Dette er et af dine produkter.',
    'this-is-your-item' => 'Dette er en af dine lister.',
    'product-in-use' => 'Dette produkt er tildelt en eller flere fortegnelser. Fjern tildelingen af det fra listen før sletning.',
  ),
  'error' =>
  array (
    'user-not-exist' => 'Bruger eksisterer ikke',
    'product-attribute-not-exist' => 'Produktattribut findes ikke',
    'attribute-owner-not-match-product' => 'Ejeren af attribut med ejeren af produktet stemmer ikke overens',
    'feature-not-match-product' => 'Produkt og produktfunktion stemmer ikke overens',
  ),
  'index' => 'Administrer produkter',
  'index-desc' => 'Denne side viser alle produkter fra dig selv og resten af webstedsbrugerne. Du er i stand til at oprette nyt produkt samt redigere eller slette hvert produkt.',
  'index-user-desc' => 'Denne side viser alle produkter fra dig selv. Du er i stand til at oprette nyt produkt samt redigere eller slette hvert produkt.',
  'add-product' => 'Nyt produkt',
  'show-all-users' => 'Vis alle brugere',
  'myself' => 'Mig selv (administrator)',
  'show-all-status' => 'Vis alle status',
  'status-pending' => 'Afventer godkendelse',
  'status-approved' => 'godkendt',
  'status-suspend' => 'Suspenderet',
  'product-image' => 'Billede',
  'product-name' => 'Navn',
  'product-description' => 'Beskrivelse',
  'product-price' => 'Pris',
  'product-status' => 'Status',
  'product-owner' => 'Ejer',
  'product-status-pending' => 'Afventer godkendelse',
  'product-status-approved' => 'godkendt',
  'product-status-suspend' => 'Suspenderet',
  'create' => 'Opret nyt produkt',
  'create-desc' => 'Denne side giver dig mulighed for at oprette nyt produkt til dig eller nogen af dine webstedsbrugere',
  'form-product-image' => 'Feature-billede',
  'form-product-image-help' => 'forslag til minimumsforhold: 455px * 390px og maksimal filstørrelse: 5mb',
  'form-product-image-select-image' => 'Vælg billede',
  'form-product-name' => 'produktnavn',
  'form-product-description' => 'Produkt beskrivelse',
  'form-product-price' => 'Produktpris',
  'form-product-price-help' => 'i formatet xx, xx.x eller xx.xx vises prisen ikke, hvis den er tom',
  'form-product-status' => 'Produktstatus',
  'form-product-owner' => 'Produktejer',
  'form-product-owner-help' => 'Produktejeren kan ikke ændre sig efter oprettelsen',
  'form-product-gallery-images' => 'Galleribilleder',
  'form-product-gallery-images-help' => 'maksimal filstørrelse: 5 MB pr. billede, maksimale :gallery_photos_count billeder, hvis der er valgt mere end :gallery_photos_count billeder, gemmes de første :gallery_photos_count billeder.',
  'form-product-gallery-images-select-images' => 'Vælg billeder',
  'crop-feature-image' => 'Beskær funktion',
  'choose-image' => 'Vælg billede',
  'crop-image' => 'Beskær billede',
  'edit' => 'Rediger produkt',
  'edit-desc' => 'Denne side giver dig mulighed for at redigere produkt',
  'edit-item-owner-alert' => 'Du redigerer fortegnelse til webstedsbruger (: brugernavn - :user_email). Alle ændringer reflekteres på webstedsbrugerkontoen, rediger venligst med forsigtighed.',
  'edit-owner-alert' => 'Du redigerer produkt til webstedsbruger (: brugernavn - :user_email). Alle ændringer reflekteres på webstedsbrugerkontoen, rediger venligst med forsigtighed.',
  'edit-owner-alert-view-profile' => 'Se brugerprofil',
  'product' => 'Produkt',
  'delete-product' => 'Slet produkt',
  'add-attributes' => 'Egenskaber',
  'modal-add-attribute-title' => 'Tilføj produktattributter',
  'modal-add-attribute-button' => 'Tilføj attributter',
  'no-attributes' => 'Der findes ingen attributter for den nuværende ejer af dette produkt.',
  'no-attributes-user' => 'Du har ikke oprettet nogen attribut endnu. Gå til Produkt> Attribut> Ny attribut for at oprette en.',
  'rank-up' => 'Rang op',
  'rank-down' => 'Rang ned',
  'remove' => 'Fjerne',
  'setting' => 'Produktindstilling',
  'setting-desc' => 'Denne side giver dig mulighed for at redigere konfigurationerne af produktfunktionen',
  'max-gallery-photos' => 'Maksimum galleribilleder',
  'max-gallery-photos-help' => 'det samlede antal gallerifotoer, der er tilladt at uploade (min: 1 maks: 20)',
  'auto-approval' => 'Godkend automatisk',
  'auto-approval-help' => 'Godkend automatisk indsendelse af produkt til brugere',
  'currency-symbol' => 'Valutasymbol',
  'currency-symbol-help' => 'vises før prisværdien',
  'enabled' => 'Aktiveret',
  'disabled' => 'handicappet',
  'sidebar' =>
  array (
    'setting' => 'Indstilling',
  ),
  'product-feature' => 'Produktfunktion',
  'edit-product-link' => 'Rediger produkt',
  'edit-item-link' => 'Rediger oversigt',
);
