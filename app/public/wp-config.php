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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'sxCwY1ZewJdqbeDDzkLKUoWr5Y1tIEAHnPBVj4laKKub8JG+Wmw6eSOpPRYZmKKf16fKYCG24IAhvXtwNFftRQ==');
define('SECURE_AUTH_KEY',  'oA/ROVu0wtmdpEkdTpSir5z2poKhnBwLyFN78JXZb1nAGoBepYmCnPgHXgUVVzaFtqaNl8HrpJqu5wVU40l1eQ==');
define('LOGGED_IN_KEY',    'qINiZpw87uOeUjX50/00YTZiAbZn9JSFR0pnHlNiDdZFjoQ9hZUivIBnsmZa5qeXj9KDXJcJkqjjxckhKmOXfw==');
define('NONCE_KEY',        'Zi7W4gs+fKin0xFvKHS13ossDjNwobm98zVNR2uptsQPAauBTtEXpsJwr7uJ4JaGdjNyIwz4gtAN5Cz4jp/O5A==');
define('AUTH_SALT',        '/LX+clXhszU2yiLFfXCuqBk/XZA13EKFX0tjbv2KtRGKHG/S5EluG1Mhcumm5KEAy5FhLwVTnU1ktP/GZDa2uQ==');
define('SECURE_AUTH_SALT', 'vmgHQrTcwISddLoQoqTBinBuLCAmnm6sS6jHPaZXr23JBwByd0kWFyOMPW2ldFUGijDNrzMrDacipmDDBpCwag==');
define('LOGGED_IN_SALT',   'VjkTYeT1N0BGpCUIOASFbkogoUNTAEL7A7wRF97f6/dYnKBLa7RE2dCo+sax9B+VQ7LnD1Zcdbm9Kjouw157/g==');
define('NONCE_SALT',       'cORlf6HNs6HaqdadGZs6HFwHHrtf1M8ATLrsiF1ldnAEM9x2w1hwKLxGoiUuCBOkCkwrc+RSUpoVvnrhfV7asw==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
