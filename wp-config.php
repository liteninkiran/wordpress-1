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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'kiranand_wp793' );

/** MySQL database username */
define( 'DB_USER', 'kiranand_wp793' );

/** MySQL database password */
define( 'DB_PASSWORD', '3p]vT79XS!' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',         'sop23nlie5dpkew3q2m6xqkxsayyd9vpedqzzd1q4xple2ttkzwkqvjttalxwqm4' );
define( 'SECURE_AUTH_KEY',  '9hjh2ukds6ixaynkt5y3qrlunwb1umdpjhvwflyug73hxdzpzwxuy5xcwkjs38at' );
define( 'LOGGED_IN_KEY',    'wvvrzzclhhmgzwjv5wpcrkj89i7hhel3d9msias0y2skydfgy9nllpafpyv7gebz' );
define( 'NONCE_KEY',        'qfbbbovgvrb8wcbdnip1qqsx6xs8frfhvmbgzobsdnikenvmnzvhfpqjxuevviw3' );
define( 'AUTH_SALT',        '5vkqaxurjfylen3xdprezomqosjzc9xky9mywt6odkwzovtwqre2ye0obqnznsbq' );
define( 'SECURE_AUTH_SALT', 'aqbdfuv7buugdkxitlmpj8laazwiqfarwqzuvsdrs3bjmrnolvtpphux2x3pb2xv' );
define( 'LOGGED_IN_SALT',   '8f5g0ogq0ppj8ekyxxbpxagcuaogazwfehttgqv5z65k7d1qn0vqzzzvsuinlvqz' );
define( 'NONCE_SALT',       'fhfv1gkaszoae8ud2pm3yno9ffkmof820amz5i2m5krtqpfcku4k6ghxcmml4nyn' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpta_';

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
