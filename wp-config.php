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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'H;%%@POWtj[ s*34 *Lplse`aW+=KhRc_DJRuIsd]RDADSRqEZLOjFMCpMD(mv-#' );
define( 'SECURE_AUTH_KEY',  'bDe=c+4 |;9?Wr6UZeOD|;D=TC#>,b@El[u9!.nBLNc}sPWFIvVixLBf^tj84sJS' );
define( 'LOGGED_IN_KEY',    '?oydb_n^[?>mtp_}HuG4:j{x,GGM$G?~iq5.zQ}x?[R}pvTiV_}9rXfvwv/*4ej`' );
define( 'NONCE_KEY',        'nvDo+u8NZ8.6H]m=?+0eUi @`wY8sN=w@o@G+!CQ2_z@S:JZ`+C^l[}{##8^IJjW' );
define( 'AUTH_SALT',        'Nv=2<%m4#`|VommwAlnY|.}QyB1|PBjVi]eV}c2g1&iLMXurAy[;X}7RGp9.}Gs_' );
define( 'SECURE_AUTH_SALT', '%lo8;ir E%7|?Kc;C`=`=n@l)J0P+:flnbl ^Yyar]5a~}od(,m`g3XXH_Yb2(mF' );
define( 'LOGGED_IN_SALT',   '>/pJu::L?!pd8[ &OR-HQfBy?a4$JWt7~mcE?X lcI<pOw{S*a]M3|0;1#ID9z^<' );
define( 'NONCE_SALT',       '(7O?O5D_Cc$v.zwN&erHp!P<`[5N~T45tO:5w?4y<({0)PZ76MaFVB^uh>Z)SF=6' );

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
