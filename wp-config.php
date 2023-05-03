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
define( 'DB_NAME', 'wp_store' );

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
define( 'AUTH_KEY',         'z[:NK{NK0gj#+9h80Yk%9MR}>U>J6lW_dW(:iKL0,<BTP4?W|FJ`b02.C)7gKveF' );
define( 'SECURE_AUTH_KEY',  '5TMC<*Vva9B9S|;}YkQq2{`gx5BO(z+!Z?J_o6>-{T zd3jiz{PeAtH?BX2(%w])' );
define( 'LOGGED_IN_KEY',    '%DdQd5-=q}|SO~V4KG T?5)u-R 5`j#9:27X.=:zxy<F=%sk*Ih6NrutFXg[9bka' );
define( 'NONCE_KEY',        'NL=?K:t(eo[N(gT-}<Wzpus8%6FlR;5_:n%)bRB@#TE`6aLzPR-#58cup*NH)$`g' );
define( 'AUTH_SALT',        'i=Ed4]TIp=GL{w7:pS8TSR6bR6Iokh6-M*[zz({$^tS21l[A|d.)x3^uev/S?&x.' );
define( 'SECURE_AUTH_SALT', '-[mqy)>eD+-xYM$>xE;<-q96e&]Iu,jsEBvrHmQGN F >QFxOn/2syFJ/Fgm8u?I' );
define( 'LOGGED_IN_SALT',   'AEBRLmL-0nmd}rFbb,CQ;+BfW4&3[E,+x<B(Q&yAqxZLG#Jw%Vx(NpX-T_U32}6G' );
define( 'NONCE_SALT',       '~<7!VrY9YXI$;oeZq{ VaiuleFu}[q,c,5AUkgGm*o|zH0$s[}8aR8:sp/o%~<@ ' );

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
