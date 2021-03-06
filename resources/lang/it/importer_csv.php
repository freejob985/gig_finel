<?php
return array (
  'seo' =>
  array (
    'upload' => 'Dashboard - Carica file CSV - :site_name',
    'csv-data-index' => 'Dashboard - Cronologia caricamenti CSV - :site_name',
    'csv-data-edit' => 'Dashboard - Analizza dati CSV - :site_name',
    'item-index' => 'Dashboard - Importazione inserzioni - :site_name',
    'item-edit' => 'Dashboard - Modifica importazione elenco - :site_name',
  ),
  'alert' =>
  array (
    'upload-success' => 'il file è stato caricato con successo',
    'upload-empty-file' => 'Il file caricato ha un contenuto vuoto',
    'fully-parsed' => 'Il file CSV è stato completamente analizzato, non può essere analizzato di nuovo',
    'parsed-success' => 'I dati del file CSV sono stati analizzati correttamente nel database dell\'elenco temporaneo, vai al menu della barra laterale> Strumenti> Importatore> Elenco per avviare l\'importazione finale',
    'csv-file-deleted' => 'Il file CSV è stato eliminato dall\'archivio file del server',
    'import-item-updated' => 'Importazione delle informazioni sulla scheda aggiornate correttamente',
    'import-item-deleted' => 'Importazione delle informazioni sull\'elenco eliminate correttamente',
    'import-process-success' => 'Informazioni sulla scheda importate correttamente nell\'elenco del sito web',
    'import-process-error' => 'Si è verificato un errore durante l\'elaborazione dell\'importazione. Controlla il registro degli errori per i dettagli',
    'import-all-process-completed' => 'Importazione di tutte le inserzioni completata',
    'import-item-cannot-edit-success-processed' => 'Non è possibile modificare le informazioni sull\'elenco di importazione importate correttamente',
    'import-process-completed' => 'Processo di importazione completato',
    'import-process-no-listing-selected' => 'Seleziona gli elenchi prima di avviare il processo di importazione',
    'import-process-no-categories-selected' => 'Seleziona una o più categorie prima di avviare il processo di importazione',
    'import-listing-process-in-progress' => 'In corso, attendere il completamento',
    'delete-import-listing-process-no-listing-selected' => 'Seleziona gli elenchi prima di iniziare il processo di eliminazione',
  ),
  'sidebar' =>
  array (
    'importer' => 'Importatore',
    'upload-csv' => 'Carica CSV',
    'upload-history' => 'Carica cronologia',
    'listings' => 'Annunci',
  ),
  'show-upload' => 'Carica file CSV',
  'show-upload-desc' => 'Questa pagina consente di caricare un file CSV e di analizzarlo in dati di elenco non elaborati per l\'importazione nei passaggi successivi.',
  'csv-for-model' => 'File CSV per',
  'csv-for-model-listing' => 'Elenco',
  'choose-csv-file' => 'Scegli il file',
  'choose-csv-file-help' => 'tipo di file di supporto: csv, txt, dimensione massima: 10mb',
  'upload' => 'Caricare',
  'csv-skip-first-row' => 'Salta la prima riga',
  'filename' => 'Nome del file',
  'progress' => 'Progressi analizzati',
  'uploaded-at' => 'Caricato su',
  'model-for' => 'Modello',
  'import-csv-data-index' => 'Cronologia caricamento file CSV',
  'import-csv-data-index-desc' => 'Questa pagina mostra tutti i file CSV caricati e i loro progressi analizzati.',
  'parse' => 'Parse',
  'import-csv-data-edit' => 'Analizza i dati del file CSV',
  'import-csv-data-edit-desc' => 'Questa pagina ti consente di analizzare i dati di un file CSV che hai caricato.',
  'start-parse' => 'Avvia Parse',
  'import-csv-data-parse-error' => 'Si è verificato un errore, ricarica la pagina per continuare ad analizzare le righe rimanenti.',
  'parsed-percentage' => ':parsed_count di :total_count record analizzati',
  'column' => 'Colonna',
  'column-item-title' => 'titolo dell\'elenco',
  'column-item-slug' => 'elenco lumaca',
  'column-item-address' => 'indirizzo dell\'elenco',
  'column-item-city' => 'elenco di città',
  'column-item-state' => 'stato dell\'elenco',
  'column-item-country' => 'paese dell\'elenco',
  'column-item-lat' => 'listato lat',
  'column-item-lng' => 'listato lng',
  'column-item-postal-code' => 'elenco del codice postale',
  'column-item-description' => 'descrizione dell\'elenco',
  'column-item-phone' => 'elenco di telefono',
  'column-item-website' => 'sito web dell\'elenco',
  'column-item-facebook' => 'inserendo facebook',
  'column-item-twitter' => 'listato twitter',
  'column-item-linkedin' => 'elenco linkedin',
  'column-item-youtube-id' => 'elencando l\'ID di YouTube',
  'delete-file' => 'Cancella il file',
  'csv-file' => 'File CSV',
  'import-errors' =>
  array (
    'user-not-exist' => 'L\'utente non esiste',
    'item-status-not-exist' => 'La scheda deve essere inviata, pubblicata o sospesa',
    'item-featured-not-exist' => 'L\'elenco in primo piano deve essere sì o no',
    'country-not-exist' => 'Il paese non esiste, aggiungi il paese in Posizione> Paese> Aggiungi paese',
    'state-not-exist' => 'Lo stato non esiste, aggiungere lo stato in Posizione> Stato> Aggiungi stato',
    'city-not-exist' => 'La città non esiste, aggiungi la città in Posizione> Città> Aggiungi città',
    'item-title-required' => 'Il titolo dell\'annuncio è obbligatorio',
    'item-description-required' => 'La descrizione dell\'annuncio è obbligatoria',
    'item-postal-code-required' => 'Il codice postale della scheda è obbligatorio',
    'categories-required' => 'L\'elenco deve essere assegnato a una o più categorie',
    'import-item-cannot-process-success-processed' => 'Non è possibile elaborare le informazioni di elenco di importazione che sono state importate correttamente',
  ),
  'import-listing-index' => 'Importa elenchi',
  'import-listing-index-desc' => 'Questa pagina mostra tutti i dati di elenco analizzati dal file CSV. Si tratta di dati di elenco non elaborati, pronti per essere importati negli elenchi di siti Web.',
  'import-listing-status-not-processed' => 'Non processato',
  'import-listing-status-success' => 'Elaborato con successo',
  'import-listing-status-error' => 'Elaborato con errore',
  'import-listing-order-newest-processed' => 'Più recente elaborato',
  'import-listing-order-oldest-processed' => 'Il più vecchio elaborato',
  'import-listing-order-newest-parsed' => 'Più recente analizzato',
  'import-listing-order-oldest-parsed' => 'Il più vecchio analizzato',
  'import-listing-order-title-a-z' => 'Titolo (AZ)',
  'import-listing-order-title-z-a' => 'Titolo (ZA)',
  'import-listing-order-city-a-z' => 'Città (AZ)',
  'import-listing-order-city-z-a' => 'Città (ZA)',
  'import-listing-order-state-a-z' => 'Stato (AZ)',
  'import-listing-order-state-z-a' => 'Stato (ZA)',
  'import-listing-order-country-a-z' => 'Paese (AZ)',
  'import-listing-order-country-z-a' => 'Paese (ZA)',
  'select' => 'Selezionare',
  'import-listing-title' => 'Titolo',
  'import-listing-city' => 'Città',
  'import-listing-state' => 'Stato',
  'import-listing-country' => 'Nazione',
  'import-listing-status' => 'Stato',
  'import-listing-detail' => 'Dettaglio',
  'import-listing-slug' => 'Slug',
  'import-listing-address' => 'Indirizzo',
  'import-listing-lat' => 'Latitudine',
  'import-listing-lng' => 'Longitudine',
  'import-listing-postal-code' => 'Codice postale',
  'import-listing-description' => 'Descrizione',
  'import-listing-phone' => 'Telefono',
  'import-listing-website' => 'Sito web',
  'import-listing-facebook' => 'Facebook',
  'import-listing-twitter' => 'Twitter',
  'import-listing-linkedin' => 'LinkedIn',
  'import-listing-youtube-id' => 'ID YouTube',
  'import-listing-do-not-parse' => 'NON PARSE',
  'import-listing-source' => 'fonte',
  'import-listing-source-csv' => 'Caricamento di file CSV',
  'import-listing-error-log' => 'Registro degli errori',
  'import-listing-edit' => 'Modifica importazione annuncio',
  'import-listing-edit-desc' => 'Questa pagina consente di modificare le informazioni sull\'elenco di importazione e di elaborare le singole informazioni sull\'elenco di importazione nell\'elenco del sito web.',
  'import-listing-information' => 'Importa informazioni sull\'elenco',
  'choose-import-listing-preference' => 'Importa in elenco',
  'choose-import-listing-categories' => 'Scegli una o più categorie',
  'choose-import-listing-owner' => 'Proprietario della scheda',
  'choose-import-listing-status' => 'Stato dell\'elenco',
  'choose-import-listing-featured' => 'Elenco in primo piano',
  'import-listing-button' => 'Importa ora',
  'choose-import-listing-preference-selected' => 'Importa selezionati in elenco',
  'import-listing-selected-button' => 'Importa selezionati',
  'import-listing-selected-modal-title' => 'Importa elenchi selezionati',
  'import-listing-selected-total' => 'Totale da importare',
  'import-listing-selected-success' => 'Successo',
  'import-listing-selected-error' => 'Errore',
  'import-listing-per-page-10' => '10 righe',
  'import-listing-per-page-25' => '25 righe',
  'import-listing-per-page-50' => '50 righe',
  'import-listing-per-page-100' => '100 righe',
  'import-listing-per-page-250' => '250 righe',
  'import-listing-per-page-500' => '500 righe',
  'import-listing-per-page-1000' => '1000 righe',
  'import-listing-select-all' => 'Seleziona tutto',
  'import-listing-un-select-all' => 'Deseleziona tutto',
  'csv-parse-in-progress' => 'Analisi del file CSV in corso, attendere il completamento',
  'error-notify-modal-close-title' => 'Errore',
  'error-notify-modal-close' => 'Vicino',
  'csv-file-upload-listing-instruction' => 'Istruzioni',
  'csv-file-upload-listing-instruction-columns' => 'Colonne per l\'elenco: titolo, slug (opzione), indirizzo (opzione), città, stato, paese, latitudine (opzione), longitudine (opzione), codice postale, descrizione, telefono (opzione), sito web (opzione), facebook (opzione ), twitter (opzione), linkedin (opzione), ID youtube (opzione).',
  'csv-file-upload-listing-instruction-tip-1' => 'Sebbene il processo di analisi del file CSV farà del suo meglio per indovinare, assicurati che il nome della città, dello stato e del paese corrisponda ai dati sulla posizione (barra laterale> Posizione> Paese, Stato, Città) del tuo sito web.',
  'csv-file-upload-listing-instruction-tip-2' => 'Se il tuo sito web ospita in hosting condiviso, prova a caricare un file CSV con meno di 15.000 righe ogni volta per evitare l\'errore di superamento del tempo di esecuzione massimo.',
  'csv-file-upload-listing-instruction-tip-3' => 'Raggruppa i file CSV per categorie per comodità. Ad esempio, i ristoranti in un file CSV denominato restaurant.csv e gli hotel in un altro file CSV denominato hotel.csv.',
  'import-listing-delete-selected' => 'Elimina selezionato',
  'import-listing-delete-progress' => 'Eliminazione in corso ... attendere prego',
  'import-listing-delete-progress-deleted' => 'cancellato',
  'import-listing-delete-complete' => 'Fatto',
  'import-listing-delete-error' => 'Si è verificato un errore, ricarica la pagina per continuare a eliminare i record rimanenti.',
  'import-listing-import-button-progress' => 'Importazione in corso ... attendere prego',
  'import-listing-import-button-complete' => 'Fatto',
  'import-listing-import-button-error' => 'Si è verificato un errore, ricarica la pagina per continuare a importare i record rimanenti.',
  'import-listing-markup' => 'Markup',
  'import-listing-markup-help' => 'Dare alcune parole per distinguere con altri batch di file',
  'import-listing-markup-all' => 'Tutti i markup',
);
