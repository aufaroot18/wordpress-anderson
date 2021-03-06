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
define( 'DB_NAME', 'wp_landing' );

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
define( 'AUTH_KEY',         'i&m/C3:}p2?16(yE!oN73G2*rFXr06m={jkwW;gyeIigs:4ASmzq[kd3 oWvL:f`' );
define( 'SECURE_AUTH_KEY',  '9s)hkU{C6i2lNy-U%KGKV %T]7cb{MKAx7Q$`czq`[,p*|6RFa^cEI5mF{X$LDo/' );
define( 'LOGGED_IN_KEY',    '+%=?nf`HtdVpDT[6;xy*pdEa4a/)xQy~CT3,;),!F/S[j?<g..F7w?!o[;=0@f;j' );
define( 'NONCE_KEY',        'R7qO%8$;&UdplTOElabg{,mN_^ar*J:hZiQPhVB=kRj=T6;gVhY_#Wy.Rk=<qWd@' );
define( 'AUTH_SALT',        '{4_r6;jVo>0nuBu/1F0kZwx6=]/%P!o ,9fQaoBk9cF3hW 84r!HGrdD}b0`iNQF' );
define( 'SECURE_AUTH_SALT', 'ovQl*cT1S25Zj$2>T*-Z]=4q,c1P|iAU]ii<uAy6Mr/Prr?uG6T0Nzwq=dGLB648' );
define( 'LOGGED_IN_SALT',   ')`l:bK Nic%zGT6IQ*vBgM%E):9fcOb)~oRnG6a-$F*phM5)! CPWHOtyD4g92y|' );
define( 'NONCE_SALT',       '9whS&r!R{ T,pP^7$ygqx3&>Zgeg elr<dLL#[8lQaE+LQ{j:NY4E_]okz<Z3[{G' );

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

define('FS_METHOD','direct');