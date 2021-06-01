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
define( 'DB_NAME', 'testdemo_db' );

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
define( 'AUTH_KEY',         'PXq/,!x3{`jlc`;x)kW?4e9=vP/NuL2Kll,;9LYsp?X_a8/!q*P@Og8r>Q/B+{~q' );
define( 'SECURE_AUTH_KEY',  'JeO}]QaAYk+kH0LNPQ+nsyi#|FcmQ*d6Kg8oZ2J{iK)xSUpHj5SR;ETN{ MH=gQ6' );
define( 'LOGGED_IN_KEY',    'r7F0Guw@ -C!}JSb)BTt[GctuKhjz!8TdV^WeI*MN}Uc])]Zi{T`cg;^mbwRpdj;' );
define( 'NONCE_KEY',        'N]A:q1]e!VKRr_pn @*JGiH5?}N[H1!3%Yf]ku>Dk9sSkmp#A;wq$%:,^NY.)wqg' );
define( 'AUTH_SALT',        '<OuyUQ0cpT3W[-JX$&b LKH/%6GV]|RYKjYGGr8J,,wi14)jYePH<-qU=?orD8.s' );
define( 'SECURE_AUTH_SALT', 'L1I8yHsO{|R,-s4ejpwf|u^XT#}%iC#]{qW-gV @m>/F03`y1j93tgUW7?cdjA^:' );
define( 'LOGGED_IN_SALT',   'TvV[R)xu`yW3P5uba0[^7t|>3?pD65|xP&B& @CP]05b<Z+AOy0SH(i]9el{R0B~' );
define( 'NONCE_SALT',       'ylNnlDWV@(pYOUa]E[kkH9R[%qY8Gz1RaLdr8:2]PkB,HA.$@o)%/N!%k&7<}IM ' );

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
