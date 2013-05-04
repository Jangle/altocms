<?php
/*-------------------------------------------------------
 * @Project: Alto CMS
 * @Project URI: http://altocms.com
 * @Description: Advanced Community Engine
 * @Version: 0.9a
 * @Copyright: Alto CMS Team
 * @License: GNU GPL v2 & MIT
 *-------------------------------------------------------
 */

/**
 * Настройки HTML вида
 */
$config['view']['skin']        = 'synio';                       // скин
$config['view']['theme']       = 'default';                     // тема
$config['view']['name']        = 'Your Site Name';              // название сайта
$config['view']['description'] = 'Description your site'; // seo description
$config['view']['keywords']    = 'site, google, internet';      // seo keywords
$config['view']['tinymce']         = false;  // использовать или нет визуальный редактор TinyMCE
$config['view']['noindex']          = true;   // "прятать" или нет ссылки от поисковиков, оборачивая их в тег <noindex> и добавляя rel="nofollow"
$config['view']['img_resize_width'] = 570;    // до какого размера в пикселях ужимать картинку по щирине при загрузки её в топики и комменты
$config['view']['img_max_width'] = 5000;    // максимальная ширина загружаемых изображений в пикселях
$config['view']['img_max_height'] = 5000;    // максимальная высота загружаемых изображений в пикселях
$config['view']['img_max_size_url'] = 500;    // максимальный размер картинки в kB для загрузки по URL

/**
 * Настройки СЕО для вывода топиков
 */
$config['seo']['description_words_count'] = 20;               // количество слов из топика для вывода в метатег description

/**
 * Настройка основных блоков
 */
$config['block']['stream']['row'] = 20;                       // сколько записей выводить в блоке "Прямой эфир"
$config['block']['stream']['show_tip'] = true;                // выводить или нет всплывающие сообщения в блоке "Прямой эфир"
$config['block']['blogs']['row']  = 10;                       // сколько записей выводить в блоке "Блоги"
$config['block']['tags']['tags_count'] = 70;                  // сколько тегов выводить в блоке "теги"
$config['block']['tags']['personal_tags_count'] = 70;         // сколько тегов пользователя выводить в блоке "теги"

/**
 * Настройка пагинации
 */
$config['pagination']['pages']['count'] = 4;                  // количество ссылок на другие страницы в пагинации


/**
 * Настройка путей
 * Если необходимо установить движек в директорию(не корень сайта) то следует сделать так:
 * $config['path']['root']['web']    = 'http://'.$_SERVER['HTTP_HOST'].'/subdir';
 * $config['path']['root']['server'] = $_SERVER['DOCUMENT_ROOT'].'/subdir';
 * и возможно придётся увеличить значение $config['path']['offset_request_url'] на число вложенных директорий,
 * например, для директории первой вложенности www.site.ru/community/ поставить значение равное 1
 *
 * Как правило полный путь до папки или файла содержит в названии 'dir'
 * URL-путь содержит в названии 'url'
 */
if (isset($_SERVER['HTTP_HOST'])) {
    $config['path']['root']['url']      = 'http://'. $_SERVER['HTTP_HOST'] . '/';   // полный WEB адрес сайта
} else {
    // for CLI scripts. or you can append "HTTP_HOST=http://yoursite.url" before script run command
    $config['path']['root']['url']      = null;
}
$config['path']['root']['dir']          = dirname(dirname(__FILE__)) . '/';   // полный путь до сайта в файловой системе


/**
 * Параметры сервера для статики. По умолчанию совпадают с основным сервером
 */
$config['path']['static']['url']        = '___path.root.url___';        // Полный URL до static-сервера
$config['path']['static']['dir']        = '___path.root.dir___';        // Полный путь до static-сервера в файловой системе

$config['path']['dir']['engine']        = '___path.root.dir___/engine/';    // Путь к папке движка в файловой системе;
$config['path']['dir']['lib']           = '___path.dir.engine___/lib/';     // Путь к библиотекам движка в файловой системе;

$config['path']['root']['engine_lib']   = '___path.root.web___/engine/lib/';  // Путь до библиотек в файловой системе
$config['path']['static']['skin']       = '___path.static.url___/templates/skin/___view.skin___/';
$config['path']['uploads']['root']      = '/uploads';                          // папка для загрузки файлов
$config['path']['uploads']['images']    = '___path.uploads.root___/images/';

$config['path']['offset_request_url']   = 0;                                   // иногда помогает если сервер использует внутренние реврайты

$config['path']['tmp']['dir']           = '___path.root.server___/_tmp/';           // путь к папке для временных файлов
$config['path']['runtime']['dir']       = '___path.root.server___/_run/';           // путь к папке для runtime-файлов
$config['path']['runtime']['url']       = '___path.root.web___/_run/';              // путь к папке для runtime-файлов

$config['path']['skins']['dir']         = '___path.root.dir___/templates/skin/';    // путь к папке для скинов
$config['path']['skin']['dir']          = '___path.root.dir___/templates/skin/___view.skin___/';    // путь к папке текущего скина
$config['path']['skin']['url']          = '___path.root.url___/templates/skin/___view.skin___/';    // URL-путь к папке текущего скина

/**
 * Следующие параметры определяем для совместимости с LS
 * LS-compatible
 */
$config['path']['root']['web']          = '___path.root.url___';        // Определяем для совместимости с LS
$config['path']['root']['server']       = '___path.root.dir___';        // Определяем для совместимости с LS
$config['path']['static']['root']       = '___path.static.url___';      // Определяем для совместимости с LS
$config['path']['root']['engine']       = '___path.root.dir___/engine/';// Определяем для совместимости с LS

/**
 * Настройки шаблонизатора Smarty
 */
$config['path']['smarty']['template'] = '___path.skins.dir___/___view.skin___/';
$config['path']['smarty']['compiled'] = '___path.tmp.dir___/templates/___view.skin___-___view.theme___/compiled/';
$config['path']['smarty']['cache']    = '___path.tmp.dir___/templates/___view.skin___-___view.theme___/cache/';
$config['path']['smarty']['plug']     = '___path.root.engine___/modules/viewer/plugs/';

$config['smarty']['compile_check']    = true;   // Проверять или нет файлы шаблона на изменения перед компиляцией, false может значительно увеличить быстродействие, но потребует ручного удаления кеша при изменения шаблона
$config['smarty']['force_compile']    = false;  // Принудительно компилировать шаблоны (отменяет действие 'compile_check')

/**
 * Настройки плагинов
 */
$config['sys']['plugins']['activation_file'] = 'plugins.dat'; // файл со списком активных плагинов в каталоге /plugins/

/**
 * Настройки куков
 */
$config['sys']['cookie']['host'] = null;                    // хост для установки куков
$config['sys']['cookie']['path'] = '/';                     // путь для установки куков
$config['sys']['cookie']['time'] = 60 * 60 * 24 * 3;        // время жизни куки когда пользователь остается залогиненым на сайте, 3 дня

/**
 * Настройки сессий
 */
$config['sys']['session']['standart'] = true;                               // Использовать или нет стандартный механизм сессий
$config['sys']['session']['name']     = 'PHPSESSID';                        // название сессии
$config['sys']['session']['timeout']  = null;                               // Тайм-аут сессии в секундах
$config['sys']['session']['host']     = '___sys.cookie.host___';            // хост сессии в куках
$config['sys']['session']['path']     = '___sys.cookie.path___';            // путь сессии в куках
/**
 * Настройки почтовых уведомлений
 */
$config['sys']['mail']['type']             = 'mail';                 // Какой тип отправки использовать
$config['sys']['mail']['from_email']       = 'admin@admin.adm';      // Мыло с которого отправляются все уведомления
$config['sys']['mail']['from_name']        = 'Почтовик ___view.name___';  // Имя с которого отправляются все уведомления
$config['sys']['mail']['charset']          = 'UTF-8';                // Какую кодировку использовать в письмах
$config['sys']['mail']['smtp']['host']     = 'localhost';            // Настройки SMTP - хост
$config['sys']['mail']['smtp']['port']     = 25;                     // Настройки SMTP - порт
$config['sys']['mail']['smtp']['user']     = '';                     // Настройки SMTP - пользователь
$config['sys']['mail']['smtp']['password'] = '';                     // Настройки SMTP - пароль
$config['sys']['mail']['smtp']['secure']   = '';                     // Настройки SMTP - протокол шифрования: tls, ssl
$config['sys']['mail']['smtp']['auth']     = true;                   // Использовать авторизацию при отправке
$config['sys']['mail']['include_comment']  = true;                   // Включает в уведомление о новых комментах текст коммента
$config['sys']['mail']['include_talk']     = true;                   // Включает в уведомление о новых личных сообщениях текст сообщения

/**
 * Настройки кеширования
 */
// Устанавливаем настройки кеширования
$config['sys']['cache']['use']    = false;               // использовать кеширование или нет
$config['sys']['cache']['type']   = 'file';             // тип кеширования: file, xcache и memory. memory использует мемкеш, xcache - использует XCache
$config['sys']['cache']['dir']    = '___path.tmp.dir___/cache/';       // каталог для файлового кеша, также используется для временных картинок. По умолчанию подставляем каталог для хранения сессий
$config['sys']['cache']['prefix'] = 'alto_cache'; // префикс кеширования, чтоб можно было на одной машине держать несколько сайтов с общим кешевым хранилищем
$config['sys']['cache']['directory_level'] = 1;         // уровень вложенности директорий файлового кеша
$config['sys']['cache']['solid']  = true;               // Настройка использования раздельного и монолитного кеша для отдельных операций

/**
 * Настройки логирования
 */
$config['sys']['logs']['dir']            = '___path.tmp.dir___/logs/';       // папка для логов
$config['sys']['logs']['file']           = 'log.log';       // файл общего лога
$config['sys']['logs']['sql_query']      = false;            // логировать или нет SQL запросы
$config['sys']['logs']['sql_query_file'] = 'sql_query.log'; // файл лога SQL запросов
$config['sys']['logs']['sql_error']      = true;            // логировать или нет ошибки SQl
$config['sys']['logs']['sql_error_file'] = 'sql_error.log'; // файл лога ошибок SQL
$config['sys']['logs']['cron']     		 = true;    	    // логировать или нет cron скрипты
$config['sys']['logs']['cron_file']      = 'cron.log';      // файл лога запуска крон-процессов
$config['sys']['logs']['profiler']       = false;           // логировать или нет профилирование процессов
$config['sys']['logs']['profiler_file']  = 'profiler.log';  // файл лога профилирования процессов

$config['sys']['logs']['error_file']  = 'error.log';        // файл лога ошибок
$config['sys']['logs']['error_extinfo']  = false;            // выводить ли дополнительную информацию в лог ошибок

$config['sys']['logs']['hacker_console']  = false;  		// позволяет удобно выводить логи дебага через функцию dump(), использя "хакерскую" консоль Дмитрия Котерова

/*
 * Параметры для определения IP-адрес посетителя:
 *   'trusted'          - ключи переменной $_SERVER, где нужно искать IP-адрес
 *   'non_trusted'      - ключи переменной $_SERVER, где НЕ нужно искать IP-адрес
 *   'multi_backward'   - если в $_SERVER[<key>] несколько адресов, то выбираем с конца
 *   'exclude'          - список исключаемых IP-адресов
 *   'exclude_server'   - IP-адрес посетителя не может совпадать с IP-адресом сервера
 *   'default'          - если IP так и не определен
 */
$config['sys']['ip']['trusted'] = array('REMOTE_ADDR', 'HTTP_X_REAL_IP', 'HTTP_CLIENT_IP', 'HTTP_X_FORWARDED_FOR', 'HTTP_VIA');
$config['sys']['ip']['non_trusted'] = array();
$config['sys']['ip']['backward'] = true;
$config['sys']['ip']['exclude'] = array('127.0.0.1', 'fe80::1', '::1');
$config['sys']['ip']['exclude_server'] = true;
$config['sys']['ip']['default'] = '127.0.0.1';

/**
 * Общие настройки
 */
$config['general']['close']             = false; // использовать закрытый режим работы сайта, сайт будет доступен только авторизованным пользователям
$config['general']['rss_editor_mail']   = '___sys.mail.from_email___'; // мыло редактора РСС
$config['general']['reg']['invite']     = false; // использовать режим регистрации по приглашению или нет. Если использовать, то регистрация будет доступна ТОЛЬКО по приглашениям!
$config['general']['reg']['activation'] = false; // использовать активацию при регистрации или нет

/**
 * Настройки ACL(Access Control List — список контроля доступа)
 */
$config['acl']['create']['blog']['rating']                =  1;  // порог рейтинга при котором юзер может создать коллективный блог
$config['acl']['create']['comment']['rating']             = -10; // порог рейтинга при котором юзер может добавлять комментарии
$config['acl']['create']['comment']['limit_time']         =  10; // время в секундах между постингом комментариев, если 0 то ограничение по времени не будет работать
$config['acl']['create']['comment']['limit_time_rating']  = -1;  // рейтинг, выше которого перестаёт действовать ограничение по времени на постинг комментов. Не имеет смысла при $config['acl']['create']['comment']['limit_time']=0
$config['acl']['create']['topic']['limit_time']           =  240;// время в секундах между созданием записей, если 0 то ограничение по времени не будет работать
$config['acl']['create']['topic']['limit_time_rating']    =  5;  // рейтинг, выше которого перестаёт действовать ограничение по времени на создание записей
$config['acl']['create']['topic']['limit_rating']   	  =  -20;// порог рейтинга при котором юзер может создавать топики (учитываются любые блоги, включая персональные), как дополнительная защита от спама/троллинга
$config['acl']['create']['talk']['limit_time']        =  300; // время в секундах между отправкой инбоксов, если 0 то ограничение по времени не будет работать
$config['acl']['create']['talk']['limit_time_rating'] =  1;   // рейтинг, выше которого перестаёт действовать ограничение по времени на отправку инбоксов
$config['acl']['create']['talk_comment']['limit_time']        =  10; // время в секундах между отправкой инбоксов, если 0 то ограничение по времени не будет работать
$config['acl']['create']['talk_comment']['limit_time_rating'] =  5;   // рейтинг, выше которого перестаёт действовать ограничение по времени на отправку инбоксов
$config['acl']['create']['wall']['limit_time'] =  20;   // рейтинг, выше которого перестаёт действовать ограничение по времени на отправку сообщений на стену
$config['acl']['create']['wall']['limit_time_rating'] =  0;   // рейтинг, выше которого перестаёт действовать ограничение по времени на отправку сообщений на стену
$config['acl']['vote']['comment']['rating']               = -3;  // порог рейтинга при котором юзер может голосовать за комментарии
$config['acl']['vote']['blog']['rating']                  = -5;  // порог рейтинга при котором юзер может голосовать за блог
$config['acl']['vote']['topic']['rating']                 = -7;  // порог рейтинга при котором юзер может голосовать за топик
$config['acl']['vote']['user']['rating']                  = -1;  // порог рейтинга при котором юзер может голосовать за пользователя
$config['acl']['vote']['topic']['limit_time']             = 60*60*24*20; // ограничение времени голосования за топик
$config['acl']['vote']['comment']['limit_time']           = 60*60*24*5;  // ограничение времени голосования за комментарий

/**
 * Настройки модулей
 */
// Модуль Blog
$config['module']['blog']['per_page']        = 20;                  // Число блогов на страницу
$config['module']['blog']['users_per_page']  = 20;                  // Число пользователей блога на страницу
$config['module']['blog']['personal_good']   = -5;                  // Рейтинг топика в персональном блоге ниже которого он считается плохим
$config['module']['blog']['collective_good'] = -3;                  // рейтинг топика в коллективных блогах ниже которого он считается плохим
$config['module']['blog']['index_good']      =  8;                  // Рейтинг топика выше которого(включительно) он попадает на главную
$config['module']['blog']['encrypt']         = 'alto';              // Ключ XXTEA шифрования идентификаторов в ссылках приглашения в блоги
$config['module']['blog']['avatar_size'] = array(100,64,48,24,0);   // Список размеров аватаров у блога. 0 - исходный размер

// Модуль Topic
$config['module']['topic']['new_time']   = 60*60*24*1;              // Время в секундах в течении которого топик считается новым
$config['module']['topic']['per_page']   = 10;                      // Число топиков на одну страницу
$config['module']['topic']['max_length'] = 15000;                   // Максимальное количество символов в одном топике
$config['module']['topic']['link_max_length'] = 500;                // Максимальное количество символов в одном топике-ссылке
$config['module']['topic']['question_max_length'] = 500;            // Максимальное количество символов в одном топике-опросе
$config['module']['topic']['allow_empty_tags'] = true;              // Разрешать или нет не заполнять теги
$config['module']['topic']['max_filesize_limit'] = 2*1024*1024;     // максимальный размер загружаемого файла в байтах (по умолчанию 2мб)
$config['module']['topic']['upload_mime_types'] = array('zip','rar','gz','mp3','png', 'doc', 'docx', 'pdf','djv','djvu'); //расширения файлов, которые можно прикреплять к топикам
$config['module']['topic']['draft_link'] = false;                   // разрешить показывать черновик по прямой ссылке

/*
 * Настройка ЧПУ топика
 * Допустимые параметры:
 *      %year% - год топика
 *      %month% - месяц
 *      %day% - день
 *      %hour% - час
 *      %minute% - минуты
 *      %second% - секунды (54)
 *      %login% - логин автора топика (admin)
 *      %blog_url% - url коллективного блога (для личных блогов будет заменен на логин автора)
 *      %topic_id% - id топика
 *      %topic_url% - относительный URL топика
 *
 * В шаблоне обязательно должен быть %topic_id% или %topic_url%
 */
$config['module']['topic']['url'] = '%topic_id%.html';          // постоянная ссылка на топик (permalink)

// Модуль User
$config['module']['user']['per_page']    = 15;                  // Число юзеров на страницу на странице статистики и в профиле пользователя
$config['module']['user']['friend_on_profile']    = 15;         // Ограничение на вывод числа друзей пользователя на странице его профиля
$config['module']['user']['friend_notice']['delete'] = false;   // Отправить talk-сообщение в случае удаления пользователя из друзей
$config['module']['user']['friend_notice']['accept'] = false;   // Отправить talk-сообщение в случае одобрения заявки на добавление в друзья
$config['module']['user']['friend_notice']['reject'] = false;   // Отправить talk-сообщение в случае отклонения заявки на добавление в друзья
$config['module']['user']['avatar_size'] = array(100,64,48,24,0); // Список размеров аватаров у пользователя. 0 - исходный размер

$config['module']['user']['login']['min_size'] = 3;             // Минимальное количество символов в логине
$config['module']['user']['login']['max_size'] = 30;            // Максимальное количество символов в логине
$config['module']['user']['login']['charset'] = '0-9a-z_\-';    // Допустимые в имени пользователя символы
$config['module']['user']['login']['disabled'] = array('admin', 'administrator', 'moderator', 'new');  // недопустимые имена логинов

$config['module']['user']['time_active'] = 60*60*24*7;          // Число секунд с момента последнего посещения пользователем сайта, в течение которых он считается активным
$config['module']['user']['usernote_text_max'] = 250;           // Максимальный размер заметки о пользователе
$config['module']['user']['usernote_per_page'] = 20;            // Число заметок на одну страницу
$config['module']['user']['userfield_max_identical'] = 2;       // Максимальное число контактов одного типа
$config['module']['user']['profile_photo_width'] = 250;         // ширина квадрата фотографии в профиле, px
$config['module']['user']['name_max'] = 30;                     // максимальная длинна имени в профиле пользователя
$config['module']['user']['captcha_use_registration'] = true;   // проверять поле капчи при регистрации пользователя
$config['module']['user']['max_session_history'] = 50;          // число хранимых сессий пользователя, если 0, то хранятся все сессии

// Модуль Comment
$config['module']['comment']['per_page'] = 20;          // Число комментариев на одну страницу(это касается только полного списка комментариев прямого эфира)
$config['module']['comment']['bad']      = -5;          // Рейтинг комментария, начиная с которого он будет скрыт
$config['module']['comment']['max_tree'] = 7;           // Максимальная вложенность комментов при отображении
$config['module']['comment']['use_nested'] = false; 	// Использовать или нет nested set при выборке комментов, увеличивает производительность при большом числе комментариев + позволяет делать постраничное разбиение комментов
$config['module']['comment']['nested_per_page'] = 0; 	// Число комментов на одну страницу в топике, актуально только при use_nested = true
$config['module']['comment']['nested_page_reverse'] = true; 	// Определяет порядок вывода страниц. true - последние комментарии на первой странице, false - последние комментарии на последней странице
$config['module']['comment']['favourite_target_allow'] = array('topic'); 	// Список типов комментов, которые разрешено добавлять в избранное
$config['module']['comment']['edit']['enable'] = '5 minutes';    // В течение какого времени можно редактировать комментарии

// Модуль Talk
$config['module']['talk']['per_page']   = 30;           // Число приватных сообщений на одну страницу
$config['module']['talk']['encrypt']    = 'alto'; // Ключ XXTEA шифрования идентификаторов в ссылках
$config['module']['talk']['max_users']	= 15; // Максимальное число адресатов в одном личном сообщении

// Модуль Lang
$config['module']['lang']['delete_undefined'] = true;   // Если установлена true, то модуль будет автоматически удалять из языковых конструкций переменные вида %%var%%, по которым не была произведена замена

// Модуль Notify
$config['module']['notify']['delayed']        = false;  // Указывает на необходимость использовать режим отложенной рассылки сообщений на email
$config['module']['notify']['insert_single']  = false;  // Если опция установлена в true, систему будет собирать записи заданий удаленной публикации, для вставки их в базу единым INSERT
$config['module']['notify']['per_process']    = 10;     // Количество отложенных заданий, обрабатываемых одним крон-процессом

// Модуль Image
$config['module']['image']['default']['watermark_use']        = false;
$config['module']['image']['default']['watermark_type']       = 'text';
$config['module']['image']['default']['watermark_position']   = '0,24';
$config['module']['image']['default']['watermark_text']       = '(c) Alto CMS';
$config['module']['image']['default']['watermark_font']       = 'arial';
$config['module']['image']['default']['watermark_font_color'] = '255,255,255';
$config['module']['image']['default']['watermark_font_size']  = '10';
$config['module']['image']['default']['watermark_font_alfa']  = '0';
$config['module']['image']['default']['watermark_back_color'] = '0,0,0';
$config['module']['image']['default']['watermark_back_alfa']  = '40';
$config['module']['image']['default']['watermark_image']      = false;
$config['module']['image']['default']['watermark_min_width']  = 200;
$config['module']['image']['default']['watermark_min_height'] = 130;
$config['module']['image']['default']['round_corner']         = false;
$config['module']['image']['default']['round_corner_radius']  = '18';
$config['module']['image']['default']['round_corner_rate']    = '40';
$config['module']['image']['default']['path']['watermarks']   = '___path.root.server___/engine/lib/external/LiveImage/watermarks/';
$config['module']['image']['default']['path']['fonts']        = '___path.root.server___/engine/lib/external/LiveImage/fonts/';
$config['module']['image']['default']['jpg_quality']          = 95;  // Число от 0 до 100

$config['module']['image']['foto']['watermark_use']  = false;
$config['module']['image']['foto']['round_corner']   = false;

$config['module']['image']['topic']['watermark_use']  = false;
$config['module']['image']['topic']['round_corner']   = false;

// Модуль Security
$config['module']['security']['hash']  = 'alto_security_key'; // "примесь" к строке, хешируемой в качестве security-кода
$config['module']['security']['randomkey']  = false; // генерация случайных ключей во время одной сессии
$config['module']['security']['password_len']  = 6; // длина пароля

$config['module']['userfeed']['count_default'] = 10; // Число топиков в ленте по умолчанию

$config['module']['stream']['count_default'] = 20; // Число топиков в ленте по умолчанию
$config['module']['stream']['disable_vote_events'] = false;

// Модуль Wall - стена
$config['module']['wall']['count_last_reply'] = 3;	// Число последних ответов на сообщени на стене для отображения в ленте
$config['module']['wall']['per_page'] = 10;			    // Число сообщений на стене на одну страницу
$config['module']['wall']['text_max'] = 250;		    // Ограничение на максимальное количество символов в одном сообщении на стене
$config['module']['wall']['text_min'] = 1;		      // Ограничение на минимальное количество символов в одном сообщении на стене


/**
 * Настройка топика-фотосета
 */
$config['module']['image']['photoset']['jpg_quality'] = 100;        // настройка модуля Image, качество обработки фото
$config['module']['topic']['photoset']['photo_max_size'] = 6*1024;  // максимально допустимый размер фото, Kb
$config['module']['topic']['photoset']['count_photos_min'] = 2;     // минимальное количество фоток
$config['module']['topic']['photoset']['count_photos_max'] = 30;    // максимальное количество фоток
$config['module']['topic']['photoset']['per_page'] = 20;            // число фоток для одновременной загрузки
$config['module']['topic']['photoset']['size'] = array(             // список размеров превью, которые необходимо делать при загрузке фото
	array(
		'w' => 1000,
		'h' => null,
		'crop' => false,
	),
	array(
		'w' => 500,
		'h' => null,
		'crop' => false,
	),
	array(
		'w' => 100,
		'h' => 65,
		'crop' => true,
	),
	array(
		'w' => 50,
		'h' => 50,
		'crop' => true,
	)
);

// Какие модули должны быть загружены на старте
$config['module']['autoLoad'] = array('Hook','Cache','Security','Session','User');

/**
 * Настройка базы данных
 */
$config['db']['params']['host']   = 'localhost';
$config['db']['params']['port']   = '3306';
$config['db']['params']['user']   = 'root';
$config['db']['params']['pass']   = '';
$config['db']['params']['type']   = 'mysqli';    // mysql, mypdo, postgresql, mssql, sqlite, ibase
$config['db']['params']['dbname'] = 'alto';

$config['db']['params']['lazy'] = true; // "ленивое" подключение к базе

/**
 * Настройка таблиц базы данных
 */
$config['db']['table']['prefix'] = 'prefix_';

$config['db']['table']['user']                  = '___db.table.prefix___user';
$config['db']['table']['blog']                  = '___db.table.prefix___blog';
$config['db']['table']['topic']                 = '___db.table.prefix___topic';
$config['db']['table']['topic_tag']             = '___db.table.prefix___topic_tag';
$config['db']['table']['content']               = '___db.table.prefix___content';
$config['db']['table']['content_field']         = '___db.table.prefix___content_field';
$config['db']['table']['content_values']        = '___db.table.prefix___content_values';
$config['db']['table']['comment']               = '___db.table.prefix___comment';
$config['db']['table']['vote']                  = '___db.table.prefix___vote';
$config['db']['table']['topic_read']            = '___db.table.prefix___topic_read';
$config['db']['table']['blog_user']             = '___db.table.prefix___blog_user';
$config['db']['table']['favourite']             = '___db.table.prefix___favourite';
$config['db']['table']['favourite_tag']         = '___db.table.prefix___favourite_tag';
$config['db']['table']['talk']                  = '___db.table.prefix___talk';
$config['db']['table']['talk_user']             = '___db.table.prefix___talk_user';
$config['db']['table']['talk_blacklist']        = '___db.table.prefix___talk_blacklist';
$config['db']['table']['friend']                = '___db.table.prefix___friend';
$config['db']['table']['topic_content']         = '___db.table.prefix___topic_content';
$config['db']['table']['topic_question_vote']   = '___db.table.prefix___topic_question_vote';
$config['db']['table']['user_administrator']    = '___db.table.prefix___user_administrator';
$config['db']['table']['comment_online']        = '___db.table.prefix___comment_online';
$config['db']['table']['invite']                = '___db.table.prefix___invite';
$config['db']['table']['page']                  = '___db.table.prefix___page';
$config['db']['table']['reminder']              = '___db.table.prefix___reminder';
$config['db']['table']['session']               = '___db.table.prefix___session';
$config['db']['table']['notify_task']           = '___db.table.prefix___notify_task';
$config['db']['table']['userfeed_subscribe']    = '___db.table.prefix___userfeed_subscribe';
$config['db']['table']['stream_subscribe']      = '___db.table.prefix___stream_subscribe';
$config['db']['table']['stream_event']          = '___db.table.prefix___stream_event';
$config['db']['table']['stream_user_type']      = '___db.table.prefix___stream_user_type';
$config['db']['table']['user_field']            = '___db.table.prefix___user_field';
$config['db']['table']['user_field_value']      = '___db.table.prefix___user_field_value';
$config['db']['table']['topic_photo']           = '___db.table.prefix___topic_photo';
$config['db']['table']['subscribe']             = '___db.table.prefix___subscribe';
$config['db']['table']['track']                 = '___db.table.prefix___track';
$config['db']['table']['wall']                  = '___db.table.prefix___wall';
$config['db']['table']['user_note']             = '___db.table.prefix___user_note';
$config['db']['table']['geo_country']           = '___db.table.prefix___geo_country';
$config['db']['table']['geo_region']            = '___db.table.prefix___geo_region';
$config['db']['table']['geo_city']              = '___db.table.prefix___geo_city';
$config['db']['table']['geo_target']            = '___db.table.prefix___geo_target';
$config['db']['table']['user_changemail']       = '___db.table.prefix___user_changemail';
$config['db']['table']['adminban']              = '___db.table.prefix___adminban';
$config['db']['table']['adminips']              = '___db.table.prefix___adminips';
$config['db']['table']['storage']               = '___db.table.prefix___storage';

$config['db']['tables']['engine'] = 'InnoDB';  // InnoDB или MyISAM
/**
 * Настройка memcache
 */
$config['memcache']['servers'][0]['host'] = 'localhost';
$config['memcache']['servers'][0]['port'] = '11211';
$config['memcache']['servers'][0]['persistent'] = true;
$config['memcache']['compression'] = true;

/**
 * Настройки роутинга
 */
$config['router']['rewrite'] = array();

// Правила реврайта для REQUEST_URI
$config['router']['uri'] = array(
    // запрет обработки статичных файлов с заданными расширениями
    /* допустимые значения:
     *  - @ignore   - запрос игнорируется и его обработка прекращается
     *  - @die(msg) - обработка запроса прекращается с выдачей сообщения msg
     *  - @404      - обработка прекращается с выдачей кода 404
     */
    '~[\w\/\-]+\.(js|css|png|jpg|gif|swf|ico|pdf|mov|fla|zip|rar)\/?$~i' => '@404',
);

// Распределение action
$config['router']['page']['error']         = 'ActionError';
$config['router']['page']['registration']  = 'ActionRegistration';
$config['router']['page']['profile']       = 'ActionProfile';
$config['router']['page']['my']            = 'ActionMy';
$config['router']['page']['blog']          = 'ActionBlog';
$config['router']['page']['page']          = 'ActionPage';
$config['router']['page']['index']         = 'ActionIndex';
$config['router']['page']['content']       = 'ActionContent';
$config['router']['page']['filter']        = 'ActionFilter';
$config['router']['page']['download']      = 'ActionDownload';
$config['router']['page']['login']         = 'ActionLogin';
$config['router']['page']['people']        = 'ActionPeople';
$config['router']['page']['settings']      = 'ActionSettings';
$config['router']['page']['tag']           = 'ActionTag';
$config['router']['page']['talk']          = 'ActionTalk';
$config['router']['page']['rss']           = 'ActionRss';
$config['router']['page']['link']          = 'ActionLink';
$config['router']['page']['question']      = 'ActionQuestion';
$config['router']['page']['blogs']         = 'ActionBlogs';
$config['router']['page']['search']        = 'ActionSearch';
$config['router']['page']['admin']         = 'ActionAdmin';
$config['router']['page']['ajax']          = 'ActionAjax';
$config['router']['page']['feed']          = 'ActionUserfeed';
$config['router']['page']['stream']        = 'ActionStream';
$config['router']['page']['photoset']      = 'ActionPhotoset';
$config['router']['page']['subscribe']     = 'ActionSubscribe';

// Глобальные настройки роутинга
$config['router']['config']['action_default']   = 'homepage';
$config['router']['config']['action_not_found'] = 'error';

$config['router']['config']['homepage']   = 'index';

// Автоопределение роутинга экшенов
$config['router']['config']['autodefine'] = true;

require "widgets.php";

/**
 * Подключаемые ресурсы - js- и css-файлы
 * <local_path|URL>
 * <local_path|URL> => <parameters_array>
 *
 * Параметр 'asset' указывает на один набор при слиянии файлов
 */
$config['head']['default']['js']  = array(
	'___path.root.engine_lib___/external/html5shiv.js' => array('browser'=>'lt IE 9'), // хак для IE версии ниже 9
	//'___path.root.engine_lib___/external/jquery/jquery.js' => array('name'=>'jquery.js'), // файлы с таким же параметром 'name' добавляться повторно не будут
    '___path.root.engine_lib___/external/jquery/jquery.js',
	'___path.root.engine_lib___/external/jquery/jquery-ui.js',
	'___path.root.engine_lib___/external/jquery/jquery.notifier.js',
	'___path.root.engine_lib___/external/jquery/jquery.jqmodal.js',
	'___path.root.engine_lib___/external/jquery/jquery.scrollto.js',
	'___path.root.engine_lib___/external/jquery/jquery.rich-array.min.js',
	'___path.root.engine_lib___/external/jquery/markitup/jquery.markitup.js',
	'___path.root.engine_lib___/external/jquery/jquery.form.js',
	'___path.root.engine_lib___/external/jquery/jquery.jqplugin.js',
	'___path.root.engine_lib___/external/jquery/jquery.cookie.js',
	'___path.root.engine_lib___/external/jquery/jquery.serializejson.js',
	'___path.root.engine_lib___/external/jquery/jquery.file.js',
	'___path.root.engine_lib___/external/jquery/jcrop/jquery.Jcrop.js',
	'___path.root.engine_lib___/external/jquery/poshytip/jquery.poshytip.js',
	'___path.root.engine_lib___/external/jquery/jquery.placeholder.min.js',
	'___path.root.engine_lib___/external/jquery/jquery.charcount.js',
	'___path.root.engine_lib___/external/prettify/prettify.js',
	'___path.root.web___/templates/framework/js/main.js',
	'___path.root.web___/templates/framework/js/favourite.js',
	'___path.root.web___/templates/framework/js/blocks.js',
	'___path.root.web___/templates/framework/js/talk.js',
	'___path.root.web___/templates/framework/js/vote.js',
	'___path.root.web___/templates/framework/js/poll.js',
	'___path.root.web___/templates/framework/js/subscribe.js',
	'___path.root.web___/templates/framework/js/infobox.js',
	'___path.root.web___/templates/framework/js/geo.js',
	'___path.root.web___/templates/framework/js/wall.js',
	'___path.root.web___/templates/framework/js/usernote.js',
	'___path.root.web___/templates/framework/js/comments.js',
	'___path.root.web___/templates/framework/js/blog.js',
	'___path.root.web___/templates/framework/js/user.js',
	'___path.root.web___/templates/framework/js/userfeed.js',
	'___path.root.web___/templates/framework/js/userfield.js',
	'___path.root.web___/templates/framework/js/stream.js',
	'___path.root.web___/templates/framework/js/photoset.js',
	'___path.root.web___/templates/framework/js/toolbar.js',
	'___path.root.web___/templates/framework/js/settings.js',
	'___path.root.web___/templates/framework/js/topic.js',
	'___path.root.web___/templates/framework/js/hook.js',
	'http://yandex.st/share/share.js' => array('merge'=>false),
);
$config['head']['default']['css'] = array(
	'___path.static.skin___/css/reset.css',
	'___path.root.engine_lib___/external/jquery/markitup/skins/simple/style.css',
	'___path.root.engine_lib___/external/jquery/markitup/sets/default/style.css',
	'___path.root.engine_lib___/external/jquery/jcrop/jquery.Jcrop.css',
	'___path.root.engine_lib___/external/prettify/prettify.css',
	'___path.static.skin___/css/main.css',
	'___path.static.skin___/css/grid.css',
	'___path.static.skin___/css/common.css',
	'___path.static.skin___/css/forms.css',
	'___path.static.skin___/css/popups.css',
	'___path.static.skin___/css/topic.css',
	'___path.static.skin___/css/comments.css',
	'___path.static.skin___/css/blocks.css',
	'___path.static.skin___/css/infobox.css',
	'___path.static.skin___/css/jquery.jqmodal.css',
	'___path.static.skin___/css/jquery.notifier.css',
	'___path.static.skin___/css/smoothness/jquery-ui.css',
);

/**
 * Параметры компрессии css-файлов
 */
$config['compress']['css']['merge'] = true;         // указывает на необходимость слияния файлов по указанным блокам.
$config['compress']['css']['use']   = false;        // указывает на необходимость компрессии файлов. Компрессия используется только в активированном режиме слияния файлов.
$config['compress']['css']['case_properties']     = 1;
$config['compress']['css']['merge_selectors']     = 0;
$config['compress']['css']['optimise_shorthands'] = 1;
$config['compress']['css']['remove_last_;']       = true;
$config['compress']['css']['css_level']           = 'CSS2.1';
$config['compress']['css']['template']            = 'highest_compression';
$config['compress']['css']['force']  = false;       // если заданно 'compress.css.merge', то слияние выполняется, даже если результирующий файл есть
/**
 * Параметры компрессии js-файлов
 */
$config['compress']['js']['merge']  = true;         // указывает на необходимость слияния файлов по указанным блокам.
$config['compress']['js']['use']    = true;         // указывает на необходимость компрессии файлов. Компрессия используется только в активированном режиме слияния файлов.
$config['compress']['js']['force']  = false;        // если заданно 'compress.js.merge', то слияние выполняется, даже если результирующий файл есть

/**
 * "Примеси" ("соли") для повышения безопасности хешируемых данных
 */
$config['security']['salt_sess']  = '123456789012345678901234567890';
$config['security']['salt_pass']  = 'qwertyuiopqwertyuiopqwertyuiop';
$config['security']['salt_auth']  = '1234567890qwertyuiopasdfghjkl0';

$config['security']['user_session_key']  = 'user_key';

/**
 * Настройки типографа текста Jevix
 */
$config['jevix'] = require_once(dirname(__FILE__).'/jevix.php');

/**
 * Определния классов
 */
$config['classes'] = require_once(dirname(__FILE__).'/classes.php');

/**
 * Локализация
 */
// * Языковые настройки
$config['lang']['allow'] = array('ru', 'en');                               // какие языки доступны на сайте; если не задано или задан только один язык, то настройки мультиязычности игнорируются
$config['lang']['aliases'] = array(                                         // набор алиасов для совместимости LS
    'ru' => 'russian',
    'en' => 'english',
);
// Настройки мультиязычного сайта
$config['lang']['in_url'] = true;                                           // проверка языка в URL
$config['lang']['in_get'] = true;                                           // проверка языка в GET-параметре: 'lang=ru'
//$config['lang']['in_get'] = 'language';                                   // то же, но задает параметр: 'language=ru'
$config['lang']['save'] = '1 year';                                         // сохранение языка в куки, задает время хранения; если 0 (или false), то не сохраняется

$config['lang']['default'] = 'ru';                                          // язык, который будет использоваться на сайте по умолчанию, если не наййдены тексты для текущего языка
$config['lang']['current'] = 'ru';                                          // основной язык сайта
$config['lang']['path']    = '___path.root.server___/templates/language';   // полный путь до языковых файлов
$config['lang']['load_to_js'] = array();                                    // Массив текстовок, которые необходимо прогружать на страницу в виде JS хеша, позволяет использовать текстовки внутри js

/**
 * Установка локали и временной зоны
 */
//$config['i18n']['locale'] = 'ru_RU.UTF-8';                                // Задается локаль, если не задана здесь, то берется из описания языка
//$config['i18n']['timezone'] = 'Europe/Moscow';                            // Задается временная зона, если не задана здесь, то берется из описания языка

return $config;

// EOF
