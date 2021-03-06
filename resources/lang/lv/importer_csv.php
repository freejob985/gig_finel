<?php
return array (
  'seo' =>
  array (
    'upload' => 'Informācijas panelis - augšupielādēt CSV failu - :site_name',
    'csv-data-index' => 'Informācijas panelis - CSV augšupielādes vēsture - :site_name',
    'csv-data-edit' => 'Informācijas panelis - CSS datu parsēšana - :site_name',
    'item-index' => 'Informācijas panelis - saraksta importēšana - :site_name',
    'item-edit' => 'Informācijas panelis - Rediģēt ierakstu importēšanu - :site_name',
  ),
  'alert' =>
  array (
    'upload-success' => 'Fails ir veiksmīgi augšupielādēts',
    'upload-empty-file' => 'Augšupielādētajā failā ir tukšs saturs',
    'fully-parsed' => 'CSV fails bija pilnībā parsēts, to vairs nevar parsēt',
    'parsed-success' => 'CSV faila dati ir veiksmīgi parsēti pagaidu datu bāzes datu bāzē. Lūdzu, dodieties uz sānjoslas izvēlni> Rīki> Importētājs> Saraksts, lai sāktu galīgo importēšanu.',
    'csv-file-deleted' => 'CSV fails ir izdzēsts no servera failu krātuves',
    'import-item-updated' => 'Importa ieraksta informācija ir veiksmīgi atjaunināta',
    'import-item-deleted' => 'Importēšanas ieraksta informācija veiksmīgi izdzēsta',
    'import-process-success' => 'Vietņu sarakstā veiksmīgi importēta saraksta informācija',
    'import-process-error' => 'Apstrādājot importēšanu, radās kļūda. Lūdzu, pārbaudiet kļūdu žurnālu, lai iegūtu sīkāku informāciju',
    'import-all-process-completed' => 'Visu ierakstu importēšanas process ir pabeigts',
    'import-item-cannot-edit-success-processed' => 'Nevar rediģēt importēšanas ieraksta informāciju, kas ir veiksmīgi importēta',
    'import-process-completed' => 'Importēšanas process ir pabeigts',
    'import-process-no-listing-selected' => 'Pirms sākat importēšanas procesu, lūdzu, atlasiet ierakstus',
    'import-process-no-categories-selected' => 'Pirms sākat importēšanu, lūdzu, atlasiet vienu vai vairākas kategorijas',
    'import-listing-process-in-progress' => 'Notiek process, lūdzu, gaidiet pabeigšanu',
    'delete-import-listing-process-no-listing-selected' => 'Pirms sākat dzēst procesu, lūdzu, atlasiet ierakstus',
  ),
  'sidebar' =>
  array (
    'importer' => 'Importētājs',
    'upload-csv' => 'Augšupielādējiet CSV',
    'upload-history' => 'Augšupielādes vēsture',
    'listings' => 'Saraksti',
  ),
  'show-upload' => 'Augšupielādēt CSV failu',
  'show-upload-desc' => 'Šī lapa ļauj augšupielādēt CSV failu un parsēt to neapstrādātiem saraksta datiem importēšanai vēlāk.',
  'csv-for-model' => 'CSV fails domēnam',
  'csv-for-model-listing' => 'Sarakstā',
  'choose-csv-file' => 'Izvēlēties failu',
  'choose-csv-file-help' => 'atbalsta faila tips: csv, txt, maksimālais izmērs: 10 MB',
  'upload' => 'Augšupielādēt',
  'csv-skip-first-row' => 'Izlaist pirmo rindu',
  'filename' => 'Faila nosaukums',
  'progress' => 'Parsēts progress',
  'uploaded-at' => 'Augšupielādēts plkst',
  'model-for' => 'Modelis',
  'import-csv-data-index' => 'CSV failu augšupielādes vēsture',
  'import-csv-data-index-desc' => 'Šajā lapā tiek parādīti visi augšupielādētie CSV faili un to parsētais progress.',
  'parse' => 'Parsēt',
  'import-csv-data-edit' => 'Parsēt CSV faila datus',
  'import-csv-data-edit-desc' => 'Šī lapa ļauj parsēt augšupielādētā CSV faila datus.',
  'start-parse' => 'Sākt parsēšanu',
  'import-csv-data-parse-error' => 'Radās kļūda. Lūdzu, atkārtoti ielādējiet lapu, lai turpinātu parsēt atlikušās rindas.',
  'parsed-percentage' => 'Parsēts :parsed_count no :total_count ierakstiem',
  'column' => 'Kolonna',
  'column-item-title' => 'saraksta nosaukums',
  'column-item-slug' => 'saraksta lode',
  'column-item-address' => 'saraksta adrese',
  'column-item-city' => 'saraksta pilsēta',
  'column-item-state' => 'saraksta statuss',
  'column-item-country' => 'saraksta valsts',
  'column-item-lat' => 'saraksta lat',
  'column-item-lng' => 'saraksta lng',
  'column-item-postal-code' => 'norādot pasta indeksu',
  'column-item-description' => 'saraksta apraksts',
  'column-item-phone' => 'saraksta tālrunis',
  'column-item-website' => 'saraksta vietne',
  'column-item-facebook' => 'uzskaitot facebook',
  'column-item-twitter' => 'saraksts twitter',
  'column-item-linkedin' => 'saraksta pievienošana',
  'column-item-youtube-id' => 'uzskaitot youtube id',
  'delete-file' => 'Izdzēst failu',
  'csv-file' => 'CSV fails',
  'import-errors' =>
  array (
    'user-not-exist' => 'Lietotājs nepastāv',
    'item-status-not-exist' => 'Sarakstam jābūt iesniegtam, publicētam vai apturētam statusam',
    'item-featured-not-exist' => 'Piedāvātajam sarakstam jābūt jā vai nē',
    'country-not-exist' => 'Valsts nepastāv. Lūdzu, pievienojiet valsti sadaļā Atrašanās vieta> Valsts> Pievienot valsti',
    'state-not-exist' => 'Valsts nepastāv. Lūdzu, pievienojiet štatu sadaļā Atrašanās vieta> Valsts> Pievienot valsti',
    'city-not-exist' => 'Pilsētas nav, lūdzu, pievienojiet pilsētu sadaļā Atrašanās vieta> Pilsēta> Pievienot pilsētu',
    'item-title-required' => 'Obligāts saraksta nosaukums',
    'item-description-required' => 'Obligāts saraksta apraksts',
    'item-postal-code-required' => 'Nepieciešams norādīt pasta indeksu',
    'categories-required' => 'Sarakstam jāpiešķir viena vai vairākas kategorijas',
    'import-item-cannot-process-success-processed' => 'Jūs nevarat apstrādāt importa saraksta informāciju, kas ir veiksmīgi importēta',
  ),
  'import-listing-index' => 'Importa saraksti',
  'import-listing-index-desc' => 'Šajā lapā tiek parādīti visi parsētie dati no CSV faila. Tie ir neapstrādāti saraksta dati, kurus var importēt vietņu sarakstos.',
  'import-listing-status-not-processed' => 'Nav apstrādāts',
  'import-listing-status-success' => 'Apstrādāti ar panākumiem',
  'import-listing-status-error' => 'Apstrādāta ar kļūdu',
  'import-listing-order-newest-processed' => 'Jaunākie apstrādāti',
  'import-listing-order-oldest-processed' => 'Vecākais apstrādāts',
  'import-listing-order-newest-parsed' => 'Jaunākais parsēts',
  'import-listing-order-oldest-parsed' => 'Vecākais parsēts',
  'import-listing-order-title-a-z' => 'Nosaukums (AZ)',
  'import-listing-order-title-z-a' => 'Nosaukums (ZA)',
  'import-listing-order-city-a-z' => 'Pilsēta (AZ)',
  'import-listing-order-city-z-a' => 'Pilsēta (ZA)',
  'import-listing-order-state-a-z' => 'Štats (AZ)',
  'import-listing-order-state-z-a' => 'Štats (ZA)',
  'import-listing-order-country-a-z' => 'Valsts (AZ)',
  'import-listing-order-country-z-a' => 'Valsts (ZA)',
  'select' => 'Atlasiet',
  'import-listing-title' => 'Nosaukums',
  'import-listing-city' => 'Pilsēta',
  'import-listing-state' => 'Valsts',
  'import-listing-country' => 'Valsts',
  'import-listing-status' => 'Statuss',
  'import-listing-detail' => 'Sīkāka informācija',
  'import-listing-slug' => 'Plēksne',
  'import-listing-address' => 'Adrese',
  'import-listing-lat' => 'Platums',
  'import-listing-lng' => 'Garums',
  'import-listing-postal-code' => 'Pasta indekss',
  'import-listing-description' => 'Apraksts',
  'import-listing-phone' => 'Tālrunis',
  'import-listing-website' => 'Vietne',
  'import-listing-facebook' => 'Facebook',
  'import-listing-twitter' => 'Twitter',
  'import-listing-linkedin' => 'LinkedIn',
  'import-listing-youtube-id' => 'Youtube ID',
  'import-listing-do-not-parse' => 'NEDRĪKST PARSĒT',
  'import-listing-source' => 'Avots',
  'import-listing-source-csv' => 'CSV failu augšupielāde',
  'import-listing-error-log' => 'Kļūdu žurnāls',
  'import-listing-edit' => 'Rediģēt ierakstu importēšanu',
  'import-listing-edit-desc' => 'Šī lapa ļauj rediģēt importa ieraksta informāciju, kā arī apstrādāt atsevišķu informāciju par importa ierakstu vietnes sarakstā.',
  'import-listing-information' => 'Importēt informāciju par sarakstu',
  'choose-import-listing-preference' => 'Importēt uz sarakstu',
  'choose-import-listing-categories' => 'Izvēlieties vienu vai vairākas kategorijas',
  'choose-import-listing-owner' => 'Saraksta īpašnieks',
  'choose-import-listing-status' => 'Saraksta statuss',
  'choose-import-listing-featured' => 'Piedāvātais saraksts',
  'import-listing-button' => 'Importēt tūlīt',
  'choose-import-listing-preference-selected' => 'Importēšana atlasīta sarakstā',
  'import-listing-selected-button' => 'Importēšana atlasīta',
  'import-listing-selected-modal-title' => 'Importēt atlasītos sarakstus',
  'import-listing-selected-total' => 'Kopā importēt',
  'import-listing-selected-success' => 'Panākumi',
  'import-listing-selected-error' => 'Kļūda',
  'import-listing-per-page-10' => '10 rindas',
  'import-listing-per-page-25' => '25 rindas',
  'import-listing-per-page-50' => '50 rindas',
  'import-listing-per-page-100' => '100 rindas',
  'import-listing-per-page-250' => '250 rindas',
  'import-listing-per-page-500' => '500 rindas',
  'import-listing-per-page-1000' => '1000 rindas',
  'import-listing-select-all' => 'Izvēlēties visus',
  'import-listing-un-select-all' => 'Noņemt visu atlasi',
  'csv-parse-in-progress' => 'Notiek CSV faila parsēšana. Lūdzu, uzgaidiet, līdz tas tiks pabeigts',
  'error-notify-modal-close-title' => 'Kļūda',
  'error-notify-modal-close' => 'Aizvērt',
  'csv-file-upload-listing-instruction' => 'Instrukcija',
  'csv-file-upload-listing-instruction-columns' => 'Kolonnas ierakstīšanai: nosaukums, plēve (opcija), adrese (opcija), pilsēta, štats, valsts, platums (opcija), garums (opcija), pasta indekss, apraksts, tālrunis (opcija), vietne (opcija), facebook (opcija) ), twitter (opcija), linkedin (opcija), youtube id (opcija).',
  'csv-file-upload-listing-instruction-tip-1' => 'Lai gan CSV failu parsēšanas procesā tiks mēģināts uzminēt visu iespējamo, lūdzu, pārliecinieties, ka pilsētas, štata un valsts nosaukums atbilst jūsu vietnes atrašanās vietas datiem (sānjosla> Atrašanās vieta> Valsts, pavalsts, pilsēta).',
  'csv-file-upload-listing-instruction-tip-2' => 'Ja jūsu vietne mitinās koplietošanā, mēģiniet katru reizi augšupielādēt CSV failu ar mazāk nekā 15 000 rindām, lai izvairītos no kļūdas, ka izpildes laiks ir pārsniegts.',
  'csv-file-upload-listing-instruction-tip-3' => 'Lūdzu, grupējiet CSV failus pēc kategorijām ērtības labad. Piemēram, restorāni vienā CSV failā ar nosaukumu restaurant.csv un viesnīcas citā CSV failā ar nosaukumu hotel.csv.',
  'import-listing-delete-selected' => 'Dzēst atlasīto',
  'import-listing-delete-progress' => 'Notiek dzēšana ... lūdzu, uzgaidiet',
  'import-listing-delete-progress-deleted' => 'dzēsts',
  'import-listing-delete-complete' => 'Gatavs',
  'import-listing-delete-error' => 'Radās kļūda. Lūdzu, atkārtoti ielādējiet lapu, lai turpinātu dzēst atlikušos ierakstus.',
  'import-listing-import-button-progress' => 'Importē ... lūdzu, uzgaidiet',
  'import-listing-import-button-complete' => 'Gatavs',
  'import-listing-import-button-error' => 'Radās kļūda. Lūdzu, atkārtoti ielādējiet lapu, lai turpinātu importēt atlikušos ierakstus.',
  'import-listing-markup' => 'Atzīmes',
  'import-listing-markup-help' => 'Piešķiriet dažus vārdus atšķirībai no citām failu partijām',
  'import-listing-markup-all' => 'Visi uzcenojumi',
);
