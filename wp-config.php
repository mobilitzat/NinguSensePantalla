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
define( 'DB_NAME', 'ningusen_wp163' );

/** MySQL database username */
define( 'DB_USER', 'ningusen_wp163' );

/** MySQL database password */
define( 'DB_PASSWORD', '@ES071-m5p' );

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
define( 'AUTH_KEY',         'cxurqpem4tbwkowfxldsoqk27jwo4cg3yre22iyd40be2ifgvn6obbuoxxztkqyt' );
define( 'SECURE_AUTH_KEY',  'jg7wlwrmc4ejdrwrpctv3mbekoyo1ucuwglyhwlz5aczjagsvkjltxyrkiguxpbo' );
define( 'LOGGED_IN_KEY',    'hkaimonnlv7nznxpmfe9hekyvaasvlgcrfmvay6bdfh2fflsy7e78no1hebri7fp' );
define( 'NONCE_KEY',        'fwizb2yx1eolcakhqf1kks7fbxh39tgvivzct6ngsjck1rwdqbhfxhyt3n1f90wy' );
define( 'AUTH_SALT',        'jh4qdb5tjylzzkrgpk6hsbuxw6evefuw6in6jiaogmmpck251fgby8torfr5plnz' );
define( 'SECURE_AUTH_SALT', 'dgqbsu8ingurkp4y5tqickeqhkujjxkoaiqktszpatnuie1y5ehsp1tzxwcohrya' );
define( 'LOGGED_IN_SALT',   'fue66inphbtvte5rheyybqhzmx3i7ihzwoh5hyfk9qm5qk3i1brv1ipryb3cpcaj' );
define( 'NONCE_SALT',       '8ouudlyv3slk01csh9pvciuiiilndarpyji0lkhhpkfu5ywjumpvftglat7kxqug' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpba_';

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
