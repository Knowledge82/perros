<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'portfolioDB');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '<=Lb&8Z{_N+k;qto;1NReIK%#+(X-~E9zvOPg*{NTySEY{_AwHB6HWXAYwK-x-|O');
define('SECURE_AUTH_KEY',  'th*TK]k%Dh}@@_^e0e|v(}}1j^:ve7Ggl7$>1]]+A|+]epH-OecfJ1tqXR#YB_}j');
define('LOGGED_IN_KEY',    'MhK!NCHGl%R,E2AcsWU~?E2+L+L.4Vah]$d<-9+4 rI1b[Mm.WG0TSI9o9uXtX7c');
define('NONCE_KEY',        '2(QOhM!9d*6Ff<Ewb&Bml&PKfqwotMaggh=UlHyI#F&=/2D3#;CH|]1b,Pow-Ie.');
define('AUTH_SALT',        '2fb-_9)n#;?(@|`=F7lq<53PsBst%v]x$YX:{?n>Xz-8.*Sb8XTg~S+b&c-M4I2I');
define('SECURE_AUTH_SALT', 'W)dD8xSA)msVa4LM^3GP.U5C[<)iVY]%[^6<WL:<+Py`EItHK4aHH(e9$)_Ru8x#');
define('LOGGED_IN_SALT',   'uaPM6UgVyT_]BN}?_mK9.}H9S=uB%S#>ciLqi8thhuMBEPsS6tB@+T|1Rw_+/_N*');
define('NONCE_SALT',       ':g2j,Mw ]/l[Wv{gb}~{MUPv4t;B)w&af?^~2@z#J~@_*SRDP<j![iR@F1nFksk>');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 * 
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
