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

define( 'DB_NAME', "chalets-OCR2" );


/** Database username */

define( 'DB_USER', "root" );


/** Database password */

define( 'DB_PASSWORD', "root" );


/** Database hostname */

define( 'DB_HOST', "localhost" );


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

define( 'AUTH_KEY',         'vo<ES/#]fE#gII,WeIZbDA8{T^x--$WBSsx^pOVxrXO165>;BM.FTgr7K0d|`ta&' );

define( 'SECURE_AUTH_KEY',  'YYg9o3_/$7UI9]oOy?EC:t.9))MR5C+DuER<N|bQ|9dy(HC&m&vO[1I^VpZ#;d#4' );

define( 'LOGGED_IN_KEY',    '>Y?tuMMq=Sb]j=I=cMz;d>~pO/UiCqbg0WQI#/b)Kgu;i{Nin]oNHhCLZ&d_^5Z=' );

define( 'NONCE_KEY',        '8=`Jw7lqX-Td-uuQK7tbvy:x;rOr8W_5,/@e6`Ov,lvee>)5nf,5$zQ0D)SOub&F' );

define( 'AUTH_SALT',        'G|l479oSc]XpINSrGEE.{NC61kqrgM</{aIAU@m`M[C&Ph:%!OT(>3i2to7B-O%B' );

define( 'SECURE_AUTH_SALT', 'IW&J@klz@mtI1qfaR0~;aX8<p}_vvn6h!qz_Zi&LU_@>>.)Hw|ph5PEwxy)rP{l-' );

define( 'LOGGED_IN_SALT',   'Cw`]<rv_+`/MqM)}|o>i;zv!`>tYOn1X)v!$e`i09a%{k&TI}jMjW#(uauA#*T2S' );

define( 'NONCE_SALT',       'ZE`E<0JNbblY/#{v[p|g9(0<RVxa(uK;]E{J#,c~Z#LCl6[Hc?jlirbfq3[(65ai' );


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

