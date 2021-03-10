<?php
define('WP_CACHE', true);
include_once __DIR__ . '/wp-config.common.php';

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
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'okraina-db' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'okraina-db-user' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'yY8yU8mI9skF8m' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'GV#m-CpSe 26<hsFzU&n7)8)Q=TS2Oy~uzGyMW@^M@9lpmpxaX.jhW{<#W2%]3Gl' );
define( 'SECURE_AUTH_KEY',  'KI>?DV: _*Xh,!TWTC[dgm$B)2V^yjHv/fq#M~*o_llBYyAzI=raP-i(*~9V?c_R' );
define( 'LOGGED_IN_KEY',    'W(3!nPN@vt1M6T%th};CQh{_E#MYMC~_-!x(QDg|(6BK2^Z:In,8?KtRfXr*+KG5' );
define( 'NONCE_KEY',        'e7Z1i`vYi=_<|6plawdDR.6pMpeeta=}<H9X6h,tF]uF&Z!K&?3HIChTpy.9.z}G' );
define( 'AUTH_SALT',        'Z^%O>n82V,7-N3yUo~W+A&.ja%:DQyYD(`6ynu:D&&8^#hJ(ZPWG(lNFkl6[O<b1' );
define( 'SECURE_AUTH_SALT', 'yiW<h:v}s=1KKwu*2C${s*q 6Q<2v1V>`@Def(&-j!*+52n4jF_e>PtQ%0T}cIwf' );
define( 'LOGGED_IN_SALT',   'Y)SHk<;^d@)Nq@)=)R_+IAK)K2qI1ElU1I{/K[1f:D}il+GR/2$ rbSJeQs~x&^w' );
define( 'NONCE_SALT',       ');[aW{Rb*2*d=)=j5 d]2(R*sT72iQ@og<S|eJXlG!<]]t/&<`~[WzmEd]zb&3@@' );

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

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
