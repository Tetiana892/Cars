<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'genius' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '0mH,.1v3cqJ}Ejqp.;0>Pi _D$M^Ih*fc{_[6x;e[Dz)HjPkAOw|gTFjXg)s%^6^' );
define( 'SECURE_AUTH_KEY',  'jZ:(%,(K]10,H[>Mo- uS62_a*{ 7x>DS4p{Bd2uH^y0W|5n|/8hgeqbK,^NH_+k' );
define( 'LOGGED_IN_KEY',    '/=.5xFGJ-=9-|SU6soY0]a;N-k!oO%/>e$8F|}!eNw93!Jp3v>YKc_7Q4<!L993v' );
define( 'NONCE_KEY',        'v0eiw^Kg(=`ci|lB 8O7]c4;kVTdZ9KQLFd#lhSB#L1>9F)5s#M)1N=F$p#U)tSb' );
define( 'AUTH_SALT',        '=!CpuvgfEytkHU#PQ7m$SJPqMj%9IO8LH+{50NiivyR<=pd:Yq:2f>ePN9Gl^mhy' );
define( 'SECURE_AUTH_SALT', 'h3*v9z|{u62U2Zju|WAs/U%c%I6Rpf&ZI-{xl`lkd}k=V:Mf|Q!^Y9!K<,Sa*k$C' );
define( 'LOGGED_IN_SALT',   'jQzK}55Cdwk|{1Z}5]Z:_O>96Ws> yi30I.BsCtxg>H^>Hf~P^E=0$fwF0MqZ!QZ' );
define( 'NONCE_SALT',       'atuO$P_wB*gH}K4Q^sXc*Ky}{`:#?K:[,VD/oG09M_ $$1(=JT_+);U^bPY[=G^c' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'geni_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
