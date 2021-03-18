<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'sql10399950' );

/** MySQL database username */
define( 'DB_USER', 'sql10399950' );

/** MySQL database password */
define( 'DB_PASSWORD', 'bfM4I6aBFc' );

/** MySQL hostname */
define( 'DB_HOST', 'sql10.freesqldatabase.com' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '}y&B8xl=!Oc _j%?%=cDH%}?MfYJ`:^fT~R1No`5+;nnlUa^c[xMB8pF-2+LEA)N' );
define( 'SECURE_AUTH_KEY',  'FW8Z190YwX(9~9j].t+8D2AzhCioK[2>!HyLSnJc.waanF :xG71+roF>+zF7r3V' );
define( 'LOGGED_IN_KEY',    '&P*PBhl&C[B2CpP;UZ!s4B2%a~8>hti1a>x0& gWqfgM|Gjpg= &pxVFS~gSqFDn' );
define( 'NONCE_KEY',        '{*jf-;8Od*{gggQrOHzjCfN!,*pF75t}{dCGfz;]0McKJ8kETDlu#2j,lPx,d^vf' );
define( 'AUTH_SALT',        'J#9PF4BI6o94>I^D4Gmw]z+q>iu)F`.+b!o5:m01Z)Dh3F@lDCkBW>>kM^3Lkze;' );
define( 'SECURE_AUTH_SALT', 'h6AY=KD8!(hl3rWM]rGH+|oR)5jbF*.]?0aQGa`4xFOrouAtSY&ZgF6Ln-4=+Zud' );
define( 'LOGGED_IN_SALT',   '?GLL*;t60xO2 <}<ak04RfOVA)ESDqXD$ZKS 4;i Et3RdN*SP)`ND+xh${!<BX*' );
define( 'NONCE_SALT',       'CXglz`c2w3Wct@D9,~Yp}/K&YkP|<$l0]=B;%}KjsKs2891;DKT_iR6@Euda.`X~' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
