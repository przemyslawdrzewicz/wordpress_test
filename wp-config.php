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
define( 'DB_NAME', 'wordpresstest' );

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
define( 'AUTH_KEY',         ')~Zr_(]Ia5cMs?/Jo +/6q!xiP*z?{0luzZ&!ZQEF%r$*$HePpFxOJLQlnuT5f.$' );
define( 'SECURE_AUTH_KEY',  ':diHj#Vo2hlMNzmY00l4?d`KIw~H@Y_gSXL(FA(jIM__!sA-qwQw<jTW!f]d~F3W' );
define( 'LOGGED_IN_KEY',    'hI!Ne2E9*(+A3Y]wd^<M$e2-c&u:u<~6YiEes51c.O1HY%}T6r=EwD,$6~^O9W6s' );
define( 'NONCE_KEY',        'M)}[i9`ANhXNW}!cx;)N4cZ8 54UWP$^4jb&8E^<VN[Lp=0!t+?FT{e<%]e*yck>' );
define( 'AUTH_SALT',        ';4&;zfNBZ2E[(w83Ze,_=FG*HIB<.m.<9[khKvb4/A=+ML}d3%._9zjVD%xXDJUu' );
define( 'SECURE_AUTH_SALT', '5,/,d%7nM5cyoHtQ<5@<u=l:yld&pse4=<O;/x&`7,<PTt+yf?z7wM4[;,KWzT]x' );
define( 'LOGGED_IN_SALT',   'd)38_y;43sJ wqSbk%/)qRc#oxu^c-X@HR^WZg2Kp}n{}uE7ifDW:8ewNaUzflKl' );
define( 'NONCE_SALT',       'BFz7O4DI1Q,duc?5=fuJ(u%.T[6G%>6ZU9U1jK<,qUc6@*-L>ygOFc5WLH@vH8 e' );

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
