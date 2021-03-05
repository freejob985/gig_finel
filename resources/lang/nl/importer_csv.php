<?php
return array (
  'seo' =>
  array (
    'upload' => 'Dashboard - CSV-bestand uploaden - :site_name',
    'csv-data-index' => 'Dashboard - CSV-uploadgeschiedenis - :site_name',
    'csv-data-edit' => 'Dashboard - CSV-gegevens ontleden - :site_name',
    'item-index' => 'Dashboard - Listing importeren - :site_name',
    'item-edit' => 'Dashboard - Lijst bewerken importeren - :site_name',
  ),
  'alert' =>
  array (
    'upload-success' => 'bestand succesvol geüpload',
    'upload-empty-file' => 'Het geüploade bestand heeft lege inhoud',
    'fully-parsed' => 'Het CSV-bestand is volledig geparseerd, het kan niet opnieuw worden geparseerd',
    'parsed-success' => 'CSV-bestandsgegevens succesvol geparseerd naar tijdelijke lijstdatabase, ga naar Zijbalkmenu> Extra> Importeur> Lijst om de definitieve import te starten',
    'csv-file-deleted' => 'CSV-bestand is verwijderd uit de bestandsopslag van de server',
    'import-item-updated' => 'Importeer informatie met succes bijgewerkt',
    'import-item-deleted' => 'Importvermeldinggegevens succesvol verwijderd',
    'import-process-success' => 'Listing-informatie geïmporteerd naar website-vermelding',
    'import-process-error' => 'Er is een fout opgetreden tijdens het verwerken van de import. Controleer het foutenlogboek voor details',
    'import-all-process-completed' => 'Importeer alle vermeldingen voltooid',
    'import-item-cannot-edit-success-processed' => 'U kunt de geïmporteerde informatie over de importlijst niet bewerken',
    'import-process-completed' => 'Het importproces is voltooid',
    'import-process-no-listing-selected' => 'Selecteer vermeldingen voordat u met het importeren begint',
    'import-process-no-categories-selected' => 'Selecteer een of meer categorieën voordat u het importproces start',
    'import-listing-process-in-progress' => 'Bezig, wacht op voltooiing',
    'delete-import-listing-process-no-listing-selected' => 'Selecteer vermeldingen voordat u het verwijderingsproces start',
  ),
  'sidebar' =>
  array (
    'importer' => 'Importeur',
    'upload-csv' => 'Upload CSV',
    'upload-history' => 'Upload geschiedenis',
    'listings' => 'Vermeldingen',
  ),
  'show-upload' => 'Upload CSV-bestand',
  'show-upload-desc' => 'Op deze pagina kunt u een CSV-bestand uploaden en het naar onbewerkte lijstgegevens parseren om in latere stappen te importeren.',
  'csv-for-model' => 'CSV-bestand voor',
  'csv-for-model-listing' => 'Aanbieding',
  'choose-csv-file' => 'Kies bestand',
  'choose-csv-file-help' => 'ondersteuning bestandstype: csv, txt, maximale grootte: 10mb',
  'upload' => 'Uploaden',
  'csv-skip-first-row' => 'Sla de eerste rij over',
  'filename' => 'Bestandsnaam',
  'progress' => 'Voortgang geparseerd',
  'uploaded-at' => 'Geüpload om',
  'model-for' => 'Model',
  'import-csv-data-index' => 'CSV-bestandsuploadgeschiedenis',
  'import-csv-data-index-desc' => 'Deze pagina toont alle geüploade CSV-bestanden en hun geparseerde voortgang.',
  'parse' => 'Ontleden',
  'import-csv-data-edit' => 'CSV-bestandsgegevens ontleden',
  'import-csv-data-edit-desc' => 'Op deze pagina kun je de gegevens ontleden van een CSV-bestand dat je hebt geüpload.',
  'start-parse' => 'Start Parse',
  'import-csv-data-parse-error' => 'Er is een fout opgetreden. Laad de pagina opnieuw om door te gaan met het parseren van de resterende rijen.',
  'parsed-percentage' => ':parsed_count van :total_count records geparseerd',
  'column' => 'Kolom',
  'column-item-title' => 'vermelding titel',
  'column-item-slug' => 'aanbieding slak',
  'column-item-address' => 'lijst adres',
  'column-item-city' => 'vermelding stad',
  'column-item-state' => 'lijst staat',
  'column-item-country' => 'lijst met land',
  'column-item-lat' => 'vermelding lat',
  'column-item-lng' => 'vermelding lng',
  'column-item-postal-code' => 'vermelding postcode',
  'column-item-description' => 'aanbieding beschrijving',
  'column-item-phone' => 'lijst met telefoon',
  'column-item-website' => 'vermelding website',
  'column-item-facebook' => 'vermelding van facebook',
  'column-item-twitter' => 'vermelding twitter',
  'column-item-linkedin' => 'vermelding van linkedin',
  'column-item-youtube-id' => 'vermelding van youtube-id',
  'delete-file' => 'Verwijder bestand',
  'csv-file' => 'CSV-bestand',
  'import-errors' =>
  array (
    'user-not-exist' => 'De gebruiker bestaat niet',
    'item-status-not-exist' => 'Vermelding moet de status \'ingediend, gepubliceerd of onderbroken\' hebben',
    'item-featured-not-exist' => 'Uitgelichte vermelding moet ja of nee zijn',
    'country-not-exist' => 'Het land bestaat niet. Voeg een land toe in Locatie> Land> Land toevoegen',
    'state-not-exist' => 'De staat bestaat niet. Voeg een staat toe in Locatie> Staat> Staat toevoegen',
    'city-not-exist' => 'De stad bestaat niet, voeg een stad toe in Locatie> Stad> Stad toevoegen',
    'item-title-required' => 'Vermeldingstitel is vereist',
    'item-description-required' => 'Advertentiebeschrijving is vereist',
    'item-postal-code-required' => 'Postcode voor vermelding is vereist',
    'categories-required' => 'Vermelding moet zijn toegewezen aan een of meer categorieën',
    'import-item-cannot-process-success-processed' => 'U kunt geen importvermeldingsinformatie verwerken die met succes is geïmporteerd',
  ),
  'import-listing-index' => 'Advertenties importeren',
  'import-listing-index-desc' => 'Deze pagina toont alle geparseerde lijstgegevens uit het CSV-bestand. Dit zijn onbewerkte listinggegevens, die klaar zijn om te importeren in websitevermeldingen.',
  'import-listing-status-not-processed' => 'Niet verwerkt',
  'import-listing-status-success' => 'Met succes verwerkt',
  'import-listing-status-error' => 'Verwerkt met fout',
  'import-listing-order-newest-processed' => 'Nieuwste verwerkt',
  'import-listing-order-oldest-processed' => 'Oudste verwerkt',
  'import-listing-order-newest-parsed' => 'Nieuwste geparseerd',
  'import-listing-order-oldest-parsed' => 'Oudste geparseerd',
  'import-listing-order-title-a-z' => 'Titel (AZ)',
  'import-listing-order-title-z-a' => 'Titel (ZA)',
  'import-listing-order-city-a-z' => 'Stad (AZ)',
  'import-listing-order-city-z-a' => 'Stad (ZA)',
  'import-listing-order-state-a-z' => 'Staat (AZ)',
  'import-listing-order-state-z-a' => 'Staat (ZA)',
  'import-listing-order-country-a-z' => 'Land (AZ)',
  'import-listing-order-country-z-a' => 'Land (ZA)',
  'select' => 'Selecteer',
  'import-listing-title' => 'Titel',
  'import-listing-city' => 'stad',
  'import-listing-state' => 'Staat',
  'import-listing-country' => 'Land',
  'import-listing-status' => 'Toestand',
  'import-listing-detail' => 'Detail',
  'import-listing-slug' => 'Naaktslak',
  'import-listing-address' => 'Adres',
  'import-listing-lat' => 'Breedtegraad',
  'import-listing-lng' => 'Lengtegraad',
  'import-listing-postal-code' => 'Postcode',
  'import-listing-description' => 'Omschrijving',
  'import-listing-phone' => 'Telefoon',
  'import-listing-website' => 'Website',
  'import-listing-facebook' => 'Facebook',
  'import-listing-twitter' => 'Twitter',
  'import-listing-linkedin' => 'LinkedIn',
  'import-listing-youtube-id' => 'YouTube-id',
  'import-listing-do-not-parse' => 'NIET PARSE',
  'import-listing-source' => 'Bron',
  'import-listing-source-csv' => 'CSV-bestand uploaden',
  'import-listing-error-log' => 'Foutenlogboek',
  'import-listing-edit' => 'Bewerk Listing Import',
  'import-listing-edit-desc' => 'Op deze pagina kunt u de informatie over de importvermelding bewerken en de individuele informatie over de importvermelding naar de website-vermelding verwerken.',
  'import-listing-information' => 'Vermeldingsinformatie importeren',
  'choose-import-listing-preference' => 'Importeer naar aanbieding',
  'choose-import-listing-categories' => 'Kies een of meer categorieën',
  'choose-import-listing-owner' => 'Eigenaar van vermelding',
  'choose-import-listing-status' => 'Lijststatus',
  'choose-import-listing-featured' => 'Aanbieding uitgelicht',
  'import-listing-button' => 'Nu importeren',
  'choose-import-listing-preference-selected' => 'Geselecteerde importeren in aanbieding',
  'import-listing-selected-button' => 'Geselecteerde importeren',
  'import-listing-selected-modal-title' => 'Geselecteerde vermeldingen importeren',
  'import-listing-selected-total' => 'Totaal te importeren',
  'import-listing-selected-success' => 'Succes',
  'import-listing-selected-error' => 'Fout',
  'import-listing-per-page-10' => '10 rijen',
  'import-listing-per-page-25' => '25 rijen',
  'import-listing-per-page-50' => '50 rijen',
  'import-listing-per-page-100' => '100 rijen',
  'import-listing-per-page-250' => '250 rijen',
  'import-listing-per-page-500' => '500 rijen',
  'import-listing-per-page-1000' => '1000 rijen',
  'import-listing-select-all' => 'Selecteer alles',
  'import-listing-un-select-all' => 'Deselecteer alles',
  'csv-parse-in-progress' => 'CSV-bestand wordt geparseerd. Wacht tot voltooiing',
  'error-notify-modal-close-title' => 'Fout',
  'error-notify-modal-close' => 'Dichtbij',
  'csv-file-upload-listing-instruction' => 'Instructie',
  'csv-file-upload-listing-instruction-columns' => 'Kolommen voor vermelding: titel, slak (optie), adres (optie), stad, staat, land, breedtegraad (optie), lengtegraad (optie), postcode, beschrijving, telefoon (optie), website (optie), facebook (optie) ), twitter (optie), linkedin (optie), youtube id (optie).',
  'csv-file-upload-listing-instruction-tip-1' => 'Hoewel het CSV-bestandsparseringsproces zijn best zal proberen te raden, moet u ervoor zorgen dat de naam van de stad, staat en land overeenkomt met de locatiegegevens (Zijbalk> Locatie> Land, staat, stad) van uw website.',
  'csv-file-upload-listing-instruction-tip-2' => 'Als uw website host in shared hosting, probeer dan een CSV-bestand met minder dan 15.000 rijen per keer te uploaden om te voorkomen dat de maximale uitvoeringstijd overschreden wordt.',
  'csv-file-upload-listing-instruction-tip-3' => 'Groepeer CSV-bestanden voor het gemak in categorieën. Bijvoorbeeld restaurants in een CSV-bestand met de naam restaurant.csv en hotels in een ander CSV-bestand met de naam hotel.csv.',
  'import-listing-delete-selected' => 'Verwijder geselecteerde',
  'import-listing-delete-progress' => 'Bezig met verwijderen ... even geduld',
  'import-listing-delete-progress-deleted' => 'verwijderd',
  'import-listing-delete-complete' => 'Gedaan',
  'import-listing-delete-error' => 'Er is een fout opgetreden. Laad de pagina opnieuw om door te gaan met het verwijderen van de resterende records.',
  'import-listing-import-button-progress' => 'Bezig met importeren ... even geduld',
  'import-listing-import-button-complete' => 'Gedaan',
  'import-listing-import-button-error' => 'Er is een fout opgetreden. Laad de pagina opnieuw om door te gaan met het importeren van de resterende records.',
  'import-listing-markup' => 'Markup',
  'import-listing-markup-help' => 'Geef enkele woorden om onderscheid te maken met andere bestandsbatches',
  'import-listing-markup-all' => 'Alle markeringen',
);
