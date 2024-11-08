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
define( 'DB_NAME', 'cars' );

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
define( 'AUTH_KEY',         '7LzziK2?&jmL@g=NxM`O__O}b1l#-^3xK`- QA:pLURh`$ 5CoLcznhmA725=)4u' );
define( 'SECURE_AUTH_KEY',  'IZ8XRfwWCRAS2vj+j;i}-]^W=1JZ}952lKQ}<GN&|y*ObjPA*Y]Bs=LS_K?TH!su' );
define( 'LOGGED_IN_KEY',    '*0^]:o46fcu?TSai713vlb2Y?[.->gQ9V,t}i]Z1^l{AwfvW.=&3j}@Z:&]0{kbC' );
define( 'NONCE_KEY',        '21F{A*gWP-c?S}i#HxbY,ME]7;H}tCItg>aMR%BRX^}WK~M#v(*eI^[;va4ktjAy' );
define( 'AUTH_SALT',        '.Tm,xifRF7foYEP|;`GoUeoCp#OPqo%47]S!/L>~cN=>_t# Qli%4sC|B%PH|>5y' );
define( 'SECURE_AUTH_SALT', '.?XDJz<5wLwy[(6?IKJwR88Ron*QVy]@fhTNl]I4?j7.<^%r S[| ]AYWzX Fy}C' );
define( 'LOGGED_IN_SALT',   'AwPBSWs)_:FMqWM] K(eDZ4T|B96~z]s;Z%W^E^yHNQ,]|njjMFBO8iZLpAiY}z(' );
define( 'NONCE_SALT',       'JG?kM~KB:<HZ|EfM9Q:bRU)4jLZczbdWFx#K]_~gi/!nE8EX)&SZv?,)R04G0a [' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
