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
define('DB_NAME', 'drone_world');

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
define('AUTH_KEY',         '4x36YaZn&57HNy],7bEy$LH9RB?H:^3V{CZ/~z`KQuZ:rS.x7:4o}um>@>*M~lZ}');
define('SECURE_AUTH_KEY',  'jrMy6/v/#9`S<w=|Et@<s*HZMxc^{pUhQC6(Sld$IUu#(X3:+F#(Rv{+NX&|4WfW');
define('LOGGED_IN_KEY',    'acn.B:pu6q87/*IVK+Oai+u=$?(#P}Uzdh@,SpX@{g<Rv]Y3Xd$l5)(b8X}kc>hK');
define('NONCE_KEY',        '1&iQy{Z+i&aIi0z^E? 4j.:8>pM4Iun;|&JI<(qw+Mhx{/&wr)%Y jBL4`HuZ/Ea');
define('AUTH_SALT',        ' &Y=YA%yJuP[0;{5GP!^#lj%+OlyS#hnO-CufQTUh:.3~*/5ct1#/3)3s9[=KCt;');
define('SECURE_AUTH_SALT', '#2pQZML>G-`UdL7HC?q*EU@]SDWKXk8xGVps>sni|O&}BVro9ctwhU)+G<c~1iZg');
define('LOGGED_IN_SALT',   'TOu-qH H-[w?[G}56iYruAkCgu)r79jS85a*KeR:EUVbXM?P&.#iEiS+B9ZI4A|$');
define('NONCE_SALT',       'Q95Y}`6Y$^NE)PUtQ+z4&.HSmHlz2+g|I^?r?;>y5FXkj}r]s65l6_;[1nY9J6XF');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_Droneworld';

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
