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
define('DB_NAME', 'gobiernovirtual');

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
define('AUTH_KEY',         'FGO_v,!W1ndte/wK}ZO5/Ad2x#,ATNASs} %#-POCC;CnqyXa5q[kM+oUo;r(24P');
define('SECURE_AUTH_KEY',  'JZs?Ra8.US7/B)eekJNrX:g>8i{5essKY1oiz< i$FX| *J&@ls!emLHAbyUrCJm');
define('LOGGED_IN_KEY',    'ean{;+!<]w;LC6jmc}*,2*DnI<uI6TILY6n{0Ldnlk[:kl}tHZ!C_%6>}yYq.WVc');
define('NONCE_KEY',        'kL;]/O^7:*&Hr,/RwAH.}@u9DJcqyTosh5[e):D+yZFrwm1ts7f*8`jY5686QrSY');
define('AUTH_SALT',        'uzt$YwJ uNpkpBHn;$EwQl^isVe*Cv<dMblrBeAYO~aw<XD.JBQ`S`F)qL~xtN6N');
define('SECURE_AUTH_SALT', 'S3rp*)O/+[:P`6lUWi$jdR h}H)R&gnT0B8^[O3vBMT])>KV}M4hn!q9$r*>R/(e');
define('LOGGED_IN_SALT',   'riiJ(@i_`|jPnx@gv1&Mn*OLBGX</9^Y3Z4F o^<fq?#hnZA}MgOP=QqJK%r&dyt');
define('NONCE_SALT',       'lAuaajmUSIrffXr? {k1Nae:ADqr |0SO63g@/o8 .3d.yzt JBaYyKqZ-pJIbe%');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'gobiernovirtual';

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
