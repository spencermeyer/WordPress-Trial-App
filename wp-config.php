<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress_trial');

/** MySQL database username */
define('DB_USER', 'wordpress_user2');

/** MySQL database password */
define('DB_PASSWORD', '123456');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'XrMuzSXw.Ab&1ZwcVxx{ws5v[FnGgeFA4w6?i|?u~08071{r9qPjQ[*A2gCfDS6?');
define('SECURE_AUTH_KEY',  'x,;w_;*)u:U8~n}(Im9.JsN-btyR%+n7K`%9kH%3f(sp!#roE#~Z!0Pg);:p7^rZ');
define('LOGGED_IN_KEY',    'W[K<?mI`IGUn0%Zd7IDI=z?7^Ug%B1xeUs7]{q>ys]qGo^aq{DMgRkTP|YMk(bJ?');
define('NONCE_KEY',        'pFX_`@p>ryGf)wTiJgIwJ~]_Z7v-R!yK%Nra[%Cx=[)Jmsj@~2+U3gfD3 5Bf&mx');
define('AUTH_SALT',        '#!mR/]yB <r[W$`W~0Y~?VjTbPh&U0sfc#qC>><PL&H|FM +;SE!B^@];*fd$ BP');
define('SECURE_AUTH_SALT', 'p)MPX+S0XAs[t&#Q+&q6i8h7i7Furbs ~V0ozPsH/8eVP<d[cmv{1/zZ$OPG xno');
define('LOGGED_IN_SALT',   'YY[! MS&,rLM;UyA341|8oOk8|pk~401DJ.Nw6g`(}U#Vts@rS5U<|-a~e>FmD-L');
define('NONCE_SALT',       'Gi,A%wcm[ }}e^DLi6UKWiss+19ibX!i<c/Z/yqZja8t@h=Hr*3hwDOGf{lSBw^<');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_trial';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
