<?php

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'jawad_word' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'tD<>W&eT$E]-FgmfHkuuS{<nc3%#bcROjW7CU`4Bw`@FEJ`?`Nz`T[>J&;3q(0ui' );
define( 'SECURE_AUTH_KEY',  '=).qP~d$$#i}]%lj$chkLbVr3]-~ZRf950$k~_nxdMI08adR~uO@LQtOwu>,)zd^' );
define( 'LOGGED_IN_KEY',    'n 4L^WCI,[WMBs[7w;4Rle+_#jKVergJ%O?Z8I-7z;<R 1~<7u2g?wKI9>7dSc$z' );
define( 'NONCE_KEY',        'v3=0i!N^4AtUF4Nd36!K)O.]c*GSu%b2_v[^34NUcye@r7=)RE3miO48JU/nG[HS' );
define( 'AUTH_SALT',        'pOV[KDn>?.9QT0_sA3wCAsSXd|/6PavS|-&0j;i}i}M0t+JP-@1u:42P+k/*2</B' );
define( 'SECURE_AUTH_SALT', 'nda$Et<owqa;fJ#5G4}ZbeaMs}~AYV+qiwxc@Z_F_a_5yi@/Ds]sx.]:.gUn3.).' );
define( 'LOGGED_IN_SALT',   '<KUWb-e,o6s>94!H2^:Gpb13G1]z:.n)2Cs>4sh]j<~d^Ioe,~:UTcBJvnsJ|P1`' );
define( 'NONCE_SALT',       'PGtX%{gXe3i)K8 ~l+6BR9# Dw/W29PploJ!y:oZy)Ku$$C#:S)K[U-KX~;=~hBd' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
