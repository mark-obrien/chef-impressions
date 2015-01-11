<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
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
define('DB_NAME', 'chefimpressions');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '123456');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'eqK(hhb=vG5%6e(~Vaj}nnxU/EuS.{]@^15O}.tPB<8f3+_H.x<<D),/v^o-{v,Y');
define('SECURE_AUTH_KEY',  'v`n)d3$Zj*5-xIE|bJZO$u^c[wh6HF2;|d_d[YQG0kbxbG|{XN)aBWOg{eCWTpe;');
define('LOGGED_IN_KEY',    ';n+B.uPB(Z4AX|*,PSOm&L?M(0~G+`{:k1&&QMF&J;64Bf:.&j<tVnSMF37~BZC&');
define('NONCE_KEY',        'Jh3;f-A|QPc&P&o6~-R$&~R{@Bc4r-_F}.Hg*dH3.<cI1Z2W=Xv4m)D+%8i?<[dE');
define('AUTH_SALT',        'RR26!|CD*,-L9%@~5U>Q%B%8.DD7U1[(Kh}Uf?2Dd[n9-:ogM]6yY]}R+e9.xWY.');
define('SECURE_AUTH_SALT', 'oI|qvOqGEhZ}}*Kpwk<PdZ$(*0W;11+>bSz9/%`e1[kr]OX?}zEz);Md>=6tuD@3');
define('LOGGED_IN_SALT',   'V`$F}l}G 4^}4/1EB!F9.m=:%1.Q+3r#|{H(3T(uO<~ZUm|+cHGM@VRf|K)_kX/2');
define('NONCE_SALT',       'mm_20>P_(y~N7_ Z1C|5, ;uB)mk[Qdd=)W}@V>iA-jStZ$J|_lHo^Q=qpHr)r`1');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
