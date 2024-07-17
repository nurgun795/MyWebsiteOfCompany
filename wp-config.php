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
define( 'DB_NAME', 'nurgunmaka' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'nurgunmaka' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'V1bURLF5eXgpEao%' );

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
define( 'AUTH_KEY',         ')Q]jW-X3nEv1!Ux7GeChM|6.w1)BINV6{>5e;PWa?lWo%+.1Wx>[dUS_)ZaL 4 H' );
define( 'SECURE_AUTH_KEY',  '01kqwJmEh*+0FEZRqUVV{y.1T=O>^*SygGK[6.=F0K~%fq*6!}<8KaC6Omp1![F7' );
define( 'LOGGED_IN_KEY',    'Jmd,HRc1{%Ti; T#_8x5n_IG5zr)?Yh![Hw`4|h>>I)p&%Qy8s}FX?C3+&80!Phr' );
define( 'NONCE_KEY',        'l[8FY:pNS$&H!qYA_m=G_[v-Hm[.2-*Cb$=84`-J}15<rBl>ro%Q?nL+iv:^ZERt' );
define( 'AUTH_SALT',        '*F6^.rSp&Gkys.&<kZElP3YVB:-$14:Ao%4Iw@5^-%kqQ4vX:=MYVF`E{OO#y~:l' );
define( 'SECURE_AUTH_SALT', '_nL5>n$VUA yBKhqoF/QO4H,,*S:I)2(=835k%vy<iSN#<<fpg#E-O+gY8/aV&tA' );
define( 'LOGGED_IN_SALT',   'd{0i+9tqyjmDhMjK+E13OHk9iWPvwR@ ,*aJ_3Y;pG&Y;jSUbCZV%7wIFXdLkl`+' );
define( 'NONCE_SALT',       '! n,AdM+.7g=I$5HZM#ygUfH#X3LiCq})G<1WeW=X]^4s8 -0S8F@g`(il sAlZ`' );

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
