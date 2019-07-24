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
define('DB_NAME', 'kelsetu_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '!vd5//CRV#n6aoa^zTc3)r:@lXi.L+CwoT[9 f)-{i{%U:{oTvsWZ*,Eq+U[g4r2');
define('SECURE_AUTH_KEY',  'rrplu=zKn6hF>ZKrg[;GMxmO&1.G)%M1vQBKY$y>H/!hg&nD[Ra6 5A^I(;GEba7');
define('LOGGED_IN_KEY',    '9bwsPSoe0LyMT%}e])O8hNo|m}V>lD.l+lQ/pO5X7kk&Vay)[r 1-:PK7UKG>:oI');
define('NONCE_KEY',        '~&hq 3}g<u@EjMZ/M}|/~]+LM>G6!!]06[,@/JxuCn~ys%Rz=iwoI, Q>>k^m.vM');
define('AUTH_SALT',        '1@;ET(|*vp]lMz_/7=51LATb!%ZSca0zM]Ghd{oi(B?U?_!2j~..llrUm`^+`[{!');
define('SECURE_AUTH_SALT', 'P1=:%Nq7,9+ >M% uRiQlxn_<VAKqm,n,a+dnnW_{BlG@#>Tqg~E!PWf[>R[^XUq');
define('LOGGED_IN_SALT',   'm3M8jUm$4^$>5.T1TWh/;Z[p-xOgzB<ZXt%zLjn?]12r6y=soKoH+y0Ch8O/[4s&');
define('NONCE_SALT',       '.B&F[aEm-daKuKwQTx)-PuJ$EOJnI~EGn?=u7}RPq|ELUVTk).DOW@j)|G^L)wwV');

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
