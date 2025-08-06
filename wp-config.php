<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'webart_quiqloans' );

/** Database username */
define( 'DB_USER', 'webart_quiqloans' );

/** Database password */
define( 'DB_PASSWORD', '5pVGNGP5Ccc3fhq' );

/** Database hostname */
define( 'DB_HOST', '148.135.138.226' );

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
define( 'AUTH_KEY',         '{n,&klp#u!]a2~;bCJ$#Db!!vyXl!^-b@W_*QP`(IC^MG4}Gm,,U4-zE9_Ig`uqZ' );
define( 'SECURE_AUTH_KEY',  '4T{L(rzkpNPi(u*^^K4t/e`T,i~d r!YuCl,C</L%>P~}/,2#tUB?Gs;=Lv|[Dx,' );
define( 'LOGGED_IN_KEY',    'Br*Dm|^C7h2Q66fg*S$2{9eQ$!-r3D>Ym1{e+$j2nIJbkceOLN<gIn)<xV8#RRgc' );
define( 'NONCE_KEY',        '123Dr5bP|Va+.rI!&5c<fD+0m)l>5Nx{c{J5.vC[r$$zfyJ:O^=rE1;zZy{lE8?^' );
define( 'AUTH_SALT',        'o-[d?9fK9a2o[|qRHaoSe6ef;/RN(SZi!Y2>[C>&t:a4V3[_U_2Yr0RC`&qu6h3(' );
define( 'SECURE_AUTH_SALT', '`yO!Hf`i@g/m.M;_:Dvu0Dml8pyQlFd3,e<4-3YN*DS!zhw<#EBjpni=<z}7!bGA' );
define( 'LOGGED_IN_SALT',   'WG`Yq<v-) Bt:dw`(Z1S8 WdQ[i.F<Mzuh79W2G^&;FSi<kf%/V;^n`9_Fi1{K8k' );
define( 'NONCE_SALT',       'b#s1 Dr>z<uVtAmeZ/pi@w!`2@6|F_7e& /o|7l3l6M+9iDW0I;DpO4LT)PD[G<L' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
