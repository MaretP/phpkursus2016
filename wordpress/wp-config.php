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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'student');

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
define('AUTH_KEY',         'L4/V%N>r@|GXiwqz~roNL>1UD}%bWLVJzGqx|q%#2AS>Y-Y+CEBX+4<rNbGS.#e~');
define('SECURE_AUTH_KEY',  'Xi3+_eUx-{B0%Z(D?&UX &)OL.x-v0 zhl^cJw2|x9XER]WP=3^M!eX<@|sQUT+M');
define('LOGGED_IN_KEY',    '-K c7N+,pr7$HP!4(2eG .R2D%#zp2Av7$,y+^XEbOwxn ~D<0tHCW%|wGOu9M-c');
define('NONCE_KEY',        'Q.eB;+3kBy7yXB3W<Wo_zo+nU> 5u+!UN2}4=Qd;$Yj:U[h7#;mrdM([C+9e^RO(');
define('AUTH_SALT',        '?6K%ZfL>b-Hx+z>-XP&tgL@Gw9tx<=Wgq1kZvV]7ipfdx;)Z{~OD9IN^gF&>|DB}');
define('SECURE_AUTH_SALT', 'Jh_5+~#6YEu?idB*_V=CLrPm .Zd6wg!&bxy~G-W6e-$/{+/<+YE!ql58]n*O!n+');
define('LOGGED_IN_SALT',   'i.3[/Tffu>-D4+$^M{/F:+CR-!7$hI|(0E=@M<}+J-X*p1=a67xheyL;I<|##5R.');
define('NONCE_SALT',       '-!|,nzNa}yc@ :+)X1hAs+]9w<Ng#+b.85[Qnu|ZvHI/TNZ^3]:eW;#@|M&e)^*k');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_phpkursus2016_';

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
