<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
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
define( 'DB_NAME', 'labb_1' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '=@pahz9h4a&15q,Q2YW2#k60o;dn2*;!~GD7%)/e*@rdC3]^]]<~F(SuHv:4onD(' );
define( 'SECURE_AUTH_KEY',  '-pdIi(>wS.,/hA1%$F`8##qqTe5Pc=7s4ha!Ji4+izaBYU?ndD4.8Oyiwq,.yrZ!' );
define( 'LOGGED_IN_KEY',    'jDqAM=[Zs^VEdd8[+&X[,n9-P!`,a@$6CX@<(QGI|u6R+<v]ieL_OAZ*DW<DQH2T' );
define( 'NONCE_KEY',        '=Sg?jgT%Pg&z{1&9F=ui6dy@|U;`JR/%KPKgB;UGMog=E]hnID@{sp^N/}qtOkdB' );
define( 'AUTH_SALT',        'lsl/Bw#Jvu!0pzsnZp(=$mY{S)oZ{7.`g|4~dAcx625]03Ip([M_L6}hjb]gaFx!' );
define( 'SECURE_AUTH_SALT', '&):yn=]v*P1%`ZfnQn?C? kGI K?o#=;T8C`D,5Aj_-Vft,@Y)@%fz#g`[<<ziC1' );
define( 'LOGGED_IN_SALT',   ';8zAZLD$ `s{Ns@A]aMyKob1IO;B}!#rs)wK3>cO5/f,LwVra_Y#ho$`v2(rfT+p' );
define( 'NONCE_SALT',       'rxUI.PeN:C@A@`0tq6_E-l8-IV=l3l|:cTd?*(.!RnoFG7GhoYamq>&9?JhzPme>' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
