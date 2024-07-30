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
define( 'DB_NAME', 'granjacob_blog' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '123456789' );

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
define( 'AUTH_KEY',         'me2@8-*Y<gG1[O0$WT$tC<D~$BoR8S+M6t<?rax(z]WXI5L!7AXZy%}a#s_;LK^l' );
define( 'SECURE_AUTH_KEY',  'UF3VmV/b{(c0uAWlhV6-7MXF^[&U3But<uZ4v}Qzc>utyP?L0Mr%}[rI0)e0lpqc' );
define( 'LOGGED_IN_KEY',    ':_PF~2%u.:nsZg0T9Id.Gx9;!/}K4MlA#QF;;OmFu_KsW#r&Q9_%d}K`AAPFANwq' );
define( 'NONCE_KEY',        '<[#LV3V>R@WO[?jPAf7fW)7 3Uyn??@5g_vuK%&?r`Y(@+M4=3JSqjMZd0~<V6v8' );
define( 'AUTH_SALT',        'Eh.>/~X*zSqc%wFHjBX=~n92dU3(/rSR>a7M]?jF%:v|u1Am+Ebztz#YHwHuxY[J' );
define( 'SECURE_AUTH_SALT', 'y^XFn0kN~/J)gf6FzbhS(0PA;8+EIb=#gDJ_7ecB{v5nR-sG%qP-_KJ_{(Q|uuQF' );
define( 'LOGGED_IN_SALT',   'g-y Chrl3rM2_h Ve4a8aK;0+j_x%Bq^;B<os4Ndbrp$H4<+qX9F.$)w15R7OQ0X' );
define( 'NONCE_SALT',       'u0bFi^}BVF1Ksh[[.xny)f95CT<T,0klN}puB,Tkm}@/7F%}W^II1lcG_RTe3_wn' );



/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
