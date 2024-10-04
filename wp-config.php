<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Bs<p?I!9y)~+e4k~y_=Et^h|3^pbZh[6 ^)bG}]_JrDn<Vt4P#csP6|ha_8&1m:f' );
define( 'SECURE_AUTH_KEY',  '}?Q8$qZ>wU57]TY0P7id?4~ajRLo9`eH|F|#;RR4m>4euy3+u`Cs:$r>zvt5]!bp' );
define( 'LOGGED_IN_KEY',    'TzDK$J4Mn,2#O=H+86)R`Q$Kf{td,Ug?c`Z)tCuAoimeoidL#lE5tsRz~WpSt?P1' );
define( 'NONCE_KEY',        'LJY:ifC^aN) Krdd7@FaZ#C1dy/GeOT$j@;nA7B@]A=t(F6!#Ws:Y{QZP`~_%>2^' );
define( 'AUTH_SALT',        '05*M&Me+`FP~$9_S>zg{7w HE,`e/wj?`Bf^*Jw`0GlR_qEZ;o3{?-LE8&8-um!T' );
define( 'SECURE_AUTH_SALT', 'C~WTlIVDe I]rXC{%7F4_ACIpVxNBfW>aTi(HKm*szI9@zr=(J|ipZlEvybA;R6>' );
define( 'LOGGED_IN_SALT',   'tf8W;n3:O}J?JaR0J5R]zlIN19_# dGsNSu.CiP6f+bm(h}%r)28XaT$+&Wtw!eD' );
define( 'NONCE_SALT',       'z*tZ?kjn%r LyT3,cr?%lb|kYUiqHXM7FaYvyTo}w6[$TzkI>jhAJGr26.m}joq~' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_cms';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
