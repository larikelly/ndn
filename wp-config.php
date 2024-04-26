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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'fabrica' );

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
define( 'AUTH_KEY',         'wYFqtpI5>0Lj_gkePPo/;)*,&(C3ey-tJ6Fz)l0sG5Q`|b!.Zw[mv[HGK{]]~.^j' );
define( 'SECURE_AUTH_KEY',  'IS8+^|JVa%]flf%Gn6fznx7^Og>|-9F)ZPYb[NpiSkUE:ki>=|k!T28(6b_eo>G6' );
define( 'LOGGED_IN_KEY',    '`7R#Y4#1<w)xD,=rMT@!1w6bY>{A+J)J9kuS(D<Y%sf5B)q[>^XjHs>_AS14X1]z' );
define( 'NONCE_KEY',        ',XwWXa+M%|_cEU>m1JPha*Mh@S9rXkvB!~!u3Q3q4T5-CfF$d46f^Itm6kxB/A_z' );
define( 'AUTH_SALT',        '}%_s_Mmm1isT`~-d/[At8/Z).EswU?.wE7%kj.pt6;S ~0d$<xx^mkSvHMM$;XN6' );
define( 'SECURE_AUTH_SALT', 'pnB#`is{zf;<5 9xe`m5Z:GhVzH]]>AA4dHFIUawfwe e&}Ey`3uzxC~hU[6}?pU' );
define( 'LOGGED_IN_SALT',   '[6TA3*FPXTF4l/#H$Iuai%%/$?(}Pu1<viLV=%<In{6(rV~o1iu%he9Mc;6L6n0k' );
define( 'NONCE_SALT',       'Fsn3T)1/?!mD8>,eG7T[$r@RD.5w@<a*3$k6ePEnyhb(q;gX*)}UmQ^kt^DX?1t}' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
