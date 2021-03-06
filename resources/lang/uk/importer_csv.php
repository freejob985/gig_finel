<?php
return array (
  'seo' =>
  array (
    'upload' => 'Інформаційна панель - Завантажити файл CSV - :site_name',
    'csv-data-index' => 'Інформаційна панель - Історія завантаження CSV - :site_name',
    'csv-data-edit' => 'Інформаційна панель - Розбір даних CSV - :site_name',
    'item-index' => 'Інформаційна панель - Імпорт списку - :site_name',
    'item-edit' => 'Інформаційна панель - Редагувати імпорт списку - :site_name',
  ),
  'alert' =>
  array (
    'upload-success' => 'Файл успішно завантажено',
    'upload-empty-file' => 'Завантажений файл містить порожній вміст',
    'fully-parsed' => 'Файл CSV повністю проаналізовано, його неможливо проаналізувати знову',
    'parsed-success' => 'Дані файлу CSV успішно проаналізовано до тимчасової бази даних списку, перейдіть у меню бічної панелі> Інструменти> Імпорт> Список, щоб розпочати остаточний імпорт',
    'csv-file-deleted' => 'Файл CSV видалено із сховища файлів сервера',
    'import-item-updated' => 'Імпорт інформації про список успішно оновлено',
    'import-item-deleted' => 'Імпорт інформації про список успішно видалено',
    'import-process-success' => 'Інформацію про лістинг успішно імпортовано до списку веб-сайтів',
    'import-process-error' => 'Під час обробки імпорту сталася помилка. Перевірте докладніше журнал помилок',
    'import-all-process-completed' => 'Імпорт усіх списків завершено',
    'import-item-cannot-edit-success-processed' => 'Ви не можете редагувати інформацію про список імпорту, яку вдало імпортували',
    'import-process-completed' => 'Процес імпорту завершено',
    'import-process-no-listing-selected' => 'Будь ласка, виберіть списки перед початком процесу імпорту',
    'import-process-no-categories-selected' => 'Будь ласка, виберіть одну або кілька категорій перед початком процесу імпорту',
    'import-listing-process-in-progress' => 'Триває, зачекайте завершення',
    'delete-import-listing-process-no-listing-selected' => 'Будь ласка, виберіть списки, перш ніж розпочати процес видалення',
  ),
  'sidebar' =>
  array (
    'importer' => 'Імпортер',
    'upload-csv' => 'Завантажте CSV',
    'upload-history' => 'Історія завантажень',
    'listings' => 'Списки',
  ),
  'show-upload' => 'Завантажте файл CSV',
  'show-upload-desc' => 'Ця сторінка дозволяє завантажувати файл CSV та аналізувати його на необроблені дані списку для імпорту на наступних етапах.',
  'csv-for-model' => 'CSV-файл для',
  'csv-for-model-listing' => 'Перелік',
  'choose-csv-file' => 'Виберіть файл',
  'choose-csv-file-help' => 'тип файлу підтримки: csv, txt, максимальний розмір: 10 Мб',
  'upload' => 'Завантажити',
  'csv-skip-first-row' => 'Пропустити перший ряд',
  'filename' => 'Ім\'я файлу',
  'progress' => 'Проаналізований прогрес',
  'uploaded-at' => 'Завантажено о',
  'model-for' => 'Модель',
  'import-csv-data-index' => 'Історія завантаження файлів CSV',
  'import-csv-data-index-desc' => 'На цій сторінці відображаються всі завантажені файли CSV та їх аналіз.',
  'parse' => 'Розбір',
  'import-csv-data-edit' => 'Проаналізувати дані файлу CSV',
  'import-csv-data-edit-desc' => 'Ця сторінка дозволяє проаналізувати дані завантаженого вами файлу CSV.',
  'start-parse' => 'Почніть розбір',
  'import-csv-data-parse-error' => 'Сталася помилка. Будь ласка, перезавантажте сторінку, щоб продовжувати аналіз решти рядків.',
  'parsed-percentage' => ':parsed_count із :total_count записів проаналізовано',
  'column' => 'Стовпець',
  'column-item-title' => 'заголовок списку',
  'column-item-slug' => 'перелік слимака',
  'column-item-address' => 'адреса списку',
  'column-item-city' => 'перерахування міста',
  'column-item-state' => 'стан списку',
  'column-item-country' => 'країна зі списком',
  'column-item-lat' => 'перелік лат',
  'column-item-lng' => 'перелік lng',
  'column-item-postal-code' => 'перерахування поштового індексу',
  'column-item-description' => 'опис списку',
  'column-item-phone' => 'телефон із списком',
  'column-item-website' => 'веб-сайт зі списком',
  'column-item-facebook' => 'список Facebook',
  'column-item-twitter' => 'листинг щебетати',
  'column-item-linkedin' => 'перелік пов\'язаних',
  'column-item-youtube-id' => 'перелік ідентифікаторів YouTube',
  'delete-file' => 'Видалити файл',
  'csv-file' => 'Файл CSV',
  'import-errors' =>
  array (
    'user-not-exist' => 'Користувач не існує',
    'item-status-not-exist' => 'Лістинг повинен мати статус надісланого, опублікованого або призупиненого',
    'item-featured-not-exist' => 'Рекомендований перелік повинен бути так чи ні',
    'country-not-exist' => 'Країна не існує, додайте країну в Розташування> Країна> Додати країну',
    'state-not-exist' => 'Штат не існує, додайте штат у Розташування> Штат> Додати штат',
    'city-not-exist' => 'Місто не існує, будь ласка, додайте місто в Розташування> Місто> Додати місто',
    'item-title-required' => 'Назва списку обов’язкова',
    'item-description-required' => 'Опис списку обов\'язковий',
    'item-postal-code-required' => 'Потрібно вказати поштовий індекс',
    'categories-required' => 'Перелік повинен бути віднесений до однієї або декількох категорій',
    'import-item-cannot-process-success-processed' => 'Ви не можете обробити інформацію про список імпорту, яку вдало імпортували',
  ),
  'import-listing-index' => 'Список імпорту',
  'import-listing-index-desc' => 'На цій сторінці відображаються всі проаналізовані дані списку з файлу CSV. Це необроблені дані про лістинг, які можна імпортувати до списків веб-сайтів.',
  'import-listing-status-not-processed' => 'Не оброблено',
  'import-listing-status-success' => 'Оброблено успіхом',
  'import-listing-status-error' => 'Оброблено з помилкою',
  'import-listing-order-newest-processed' => 'Найновіші оброблені',
  'import-listing-order-oldest-processed' => 'Найдавніший оброблений',
  'import-listing-order-newest-parsed' => 'Найновіший проаналізований',
  'import-listing-order-oldest-parsed' => 'Найстаріший розібраний',
  'import-listing-order-title-a-z' => 'Назва (AZ)',
  'import-listing-order-title-z-a' => 'Назва (ZA)',
  'import-listing-order-city-a-z' => 'Місто (AZ)',
  'import-listing-order-city-z-a' => 'Місто (ZA)',
  'import-listing-order-state-a-z' => 'Штат (AZ)',
  'import-listing-order-state-z-a' => 'Штат (ZA)',
  'import-listing-order-country-a-z' => 'Країна (AZ)',
  'import-listing-order-country-z-a' => 'Країна (ZA)',
  'select' => 'Виберіть',
  'import-listing-title' => 'Заголовок',
  'import-listing-city' => 'Місто',
  'import-listing-state' => 'Держава',
  'import-listing-country' => 'Країна',
  'import-listing-status' => 'Статус',
  'import-listing-detail' => 'Деталь',
  'import-listing-slug' => 'Слизень',
  'import-listing-address' => 'Адреса',
  'import-listing-lat' => 'Широта',
  'import-listing-lng' => 'Довгота',
  'import-listing-postal-code' => 'Поштовий індекс',
  'import-listing-description' => 'Опис',
  'import-listing-phone' => 'Телефон',
  'import-listing-website' => 'Веб-сайт',
  'import-listing-facebook' => 'Facebook',
  'import-listing-twitter' => 'Twitter',
  'import-listing-linkedin' => 'LinkedIn',
  'import-listing-youtube-id' => 'Ідентифікатор Youtube',
  'import-listing-do-not-parse' => 'НЕ РОЗБІРАЙТЕ',
  'import-listing-source' => 'Джерело',
  'import-listing-source-csv' => 'Завантаження файлу CSV',
  'import-listing-error-log' => 'Журнал помилок',
  'import-listing-edit' => 'Редагувати імпорт списку',
  'import-listing-edit-desc' => 'Ця сторінка дозволяє редагувати інформацію про список імпорту, а також обробляти інформацію про окремий список імпорту до списку веб-сайтів.',
  'import-listing-information' => 'Імпортувати інформацію про список',
  'choose-import-listing-preference' => 'Імпортувати в лістинг',
  'choose-import-listing-categories' => 'Виберіть одну або кілька категорій',
  'choose-import-listing-owner' => 'Власник списку',
  'choose-import-listing-status' => 'Статус списку',
  'choose-import-listing-featured' => 'Рекомендовані',
  'import-listing-button' => 'Імпортуйте зараз',
  'choose-import-listing-preference-selected' => 'Імпортувати вибране в лістинг',
  'import-listing-selected-button' => 'Імпортувати вибране',
  'import-listing-selected-modal-title' => 'Імпортувати вибрані списки',
  'import-listing-selected-total' => 'Всього для імпорту',
  'import-listing-selected-success' => 'Успіху',
  'import-listing-selected-error' => 'Помилка',
  'import-listing-per-page-10' => '10 рядів',
  'import-listing-per-page-25' => '25 рядів',
  'import-listing-per-page-50' => '50 рядів',
  'import-listing-per-page-100' => '100 рядків',
  'import-listing-per-page-250' => '250 рядів',
  'import-listing-per-page-500' => '500 рядів',
  'import-listing-per-page-1000' => '1000 рядків',
  'import-listing-select-all' => 'Вибрати все',
  'import-listing-un-select-all' => 'Скасувати вибір усіх',
  'csv-parse-in-progress' => 'Триває аналіз файлу CSV. Зачекайте завершення',
  'error-notify-modal-close-title' => 'Помилка',
  'error-notify-modal-close' => 'Закрити',
  'csv-file-upload-listing-instruction' => 'Інструкція',
  'csv-file-upload-listing-instruction-columns' => 'Стовпці для переліку: заголовок, слизень (варіант), адреса (варіант), місто, штат, країна, широта (варіант), довгота (варіант), поштовий індекс, опис, телефон (варіант), веб-сайт (варіант), facebook (варіант) ), Twitter (опція), linkedin (опція), ідентифікатор YouTube (опція).',
  'csv-file-upload-listing-instruction-tip-1' => 'Хоча процес синтаксичного аналізу файлів CSV намагатиметься вгадати, переконайтесь, що назва міста, штату та країни відповідає даним про місцезнаходження (Бічна панель> Місцезнаходження> Країна, штат, місто) вашого веб-сайту.',
  'csv-file-upload-listing-instruction-tip-2' => 'Якщо ваш веб-сайт розміщує спільний хостинг, спробуйте щоразу завантажувати файл CSV із менше 15 000 рядків, щоб уникнути перевищення максимального часу виконання помилки.',
  'csv-file-upload-listing-instruction-tip-3' => 'Будь ласка, згрупуйте файли CSV за категоріями для зручності. Наприклад, ресторани в одному файлі CSV з назвою restaurant.csv, а готелі в іншому файлі CSV з назвою hotel.csv.',
  'import-listing-delete-selected' => 'Видалити вибране',
  'import-listing-delete-progress' => 'Видалення ... зачекайте',
  'import-listing-delete-progress-deleted' => 'видалено',
  'import-listing-delete-complete' => 'Готово',
  'import-listing-delete-error' => 'Сталася помилка. Будь ласка, перезавантажте сторінку, щоб продовжувати видаляти решту записів.',
  'import-listing-import-button-progress' => 'Імпортування ... будь ласка, почекайте',
  'import-listing-import-button-complete' => 'Готово',
  'import-listing-import-button-error' => 'Сталася помилка. Будь ласка, перезавантажте сторінку, щоб продовжувати імпортувати решту записів.',
  'import-listing-markup' => 'Розмітка',
  'import-listing-markup-help' => 'Дайте кілька слів, які можна відрізняти від інших пакетів файлів',
  'import-listing-markup-all' => 'Усі націнки',
);
