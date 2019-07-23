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
define( 'DB_NAME', 'vievoai.tk_db' );

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
define( 'AUTH_KEY',         'LfExurI!O5EJ/!_O<]b!SyUOyKMy`1SzxG#ZWaY`F|V`3B@fx)kzzNcILF]xCZ]9' );
define( 'SECURE_AUTH_KEY',  'N`2y4iaapYtbqGj d6p6By(5rj.(3sa~F{FXWX+o`$>KSANZI/Fx&@P: d<WVmxK' );
define( 'LOGGED_IN_KEY',    'M.YoHFB-%HO^og<=Dp]H<i;(z`AP}{loQ:9h%qD63+<1?RgrkhLw-!=WI#bCJNCS' );
define( 'NONCE_KEY',        '-:Y}DTq@s=[,Z4^tTr&slLQlhZ=$[57vR!:<zoDn.9^)zpKZfz0NrgVp$JMe4)dA' );
define( 'AUTH_SALT',        'ZB$[cVYF7STZJtw^wS?we2C%lF{OfH>]~clNHU7=Z4dSE.^3^WBf/%F!OegmoQ2q' );
define( 'SECURE_AUTH_SALT', 'RXKhi6J#I54Y :Fa^)6kr,`EZf^eD<9&]S(9c$n%3WOC*Xgu;ua?!UIzkw!L`;0p' );
define( 'LOGGED_IN_SALT',   'tT$]M)uT06iC]oDL0>D#P5mZN<b8q>/A:@%wh]7rn>qD-?<3QtN0I yPQezrB0~0' );
define( 'NONCE_SALT',       '*CFz],wSjxq!f#WPyD:yI0Q9mMpt1fC{&JRa=Y|DF]CC,USP80ULC97>,Vo>,Rhr' );

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
