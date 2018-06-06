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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'edumatch');

/** MySQL database username */
define('DB_USER', 'edumatch');

/** MySQL database password */
define('DB_PASSWORD', 'edumatch@123');

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
define('AUTH_KEY',         'OIOs)ff<hp^*~>R`[_x)IAPu,YW4)_]P_&uIVNw/q9ogkflChrG8cfF]_RBD)^T|');
define('SECURE_AUTH_KEY',  'JguW+%3BG6%jf[&hX3A2i x!LEk:vIApmnY^kW|!.lD%@i_W+osmrv01?lo%HOoZ');
define('LOGGED_IN_KEY',    'F,-iF1Lbv/:pE| nbol+;{w}<2pKY1/&=cFqho!SLI:0/ng& sBJh*5YA { v6t1');
define('NONCE_KEY',        'd`X?rPA&OlMUfR.n8t3WE`U`|&2MIa#QPSQM0BJqB#}dT_MKQX5VpqX@70Ka,(Br');
define('AUTH_SALT',        '@w`,~INgX`I #/xw9JVJV|==I~ESW.A{UG+! |u;h;?(Z{JDA4E3p`lKgkL*7-jd');
define('SECURE_AUTH_SALT', 'st=7.2gW:kwZ2U_9]`n}IGm4i?90[Le[`VIK0wSTuYlz}SRu^$1LR=|+1g^zTV/Z');
define('LOGGED_IN_SALT',   '.-o?H9nH]GtvB85z]pu32,hYxv$-VLw7^ :Ld*gX5+*daTCYtx-j |n@6v5`-%7H');
define('NONCE_SALT',       'X+<?14_R-~`R>q{:WM3_yv)R|P},+Nz-),J!t<$/XZ8Z5I0~%T_el[B F/N5lwtK');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', true);
define('FS_METHOD','direct'); 
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
