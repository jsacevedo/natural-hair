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
define( 'DB_NAME', 'natural_hair_wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         '[,@+ ]YJe2(Ii9ZXf8f(x7uzQIENnr!j,$9%,!pA;B^unM{ML[I5ib?qu]g2P&&S' );
define( 'SECURE_AUTH_KEY',  't}uS]ZnJ2C-OG7[vHz.cIX*v++},r=^Ik(,ZRjLucuj-:Gb7g]2Hci;>(IzlvLgR' );
define( 'LOGGED_IN_KEY',    'FD<Ca%R8/A{Adew.//3=6Ybg({`xs5$)ep>XV$Y%Iit^{ t ZDvG>-kbNdQP?Zo=' );
define( 'NONCE_KEY',        'BeUgp>;N]D9[Qfe/[$IC^3GF ] Tb:.saqR zQz:#.n?QW4qZhvZ.{mEfB)}-yw ' );
define( 'AUTH_SALT',        'H+0-PHAU4aiROJQ,X&~.4Y&vuSOGvbi<$5v9JO:En0>K;i0eDNX/,wP}RX8AJ2!$' );
define( 'SECURE_AUTH_SALT', '..bv-_9 ={{nHFcE-NhZsT)+^IYR|9u~n5ZszavQ?g}s>-9x0~BTb)Cz.SfOAHtJ' );
define( 'LOGGED_IN_SALT',   'd9e!3Y<nF45bwbZpw:G)GZeFaI|H?.JoW]g>]Eyig?0}vgHA^j!_C1bbGi1MjD{f' );
define( 'NONCE_SALT',       'Z.I7G),WHiQig7Q(t@:!0Z*yja}+rFhHK g!qE5 _O[>fSA9F|sx5$Yq1.=qDGIm' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );