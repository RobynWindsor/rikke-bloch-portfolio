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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'J{@QZ:@gL3NNj?rkxC?3!yAY16kZkq:So&-Z3i:KhMP!+D3ghSfxm!3GO_T],d9u' );
define( 'SECURE_AUTH_KEY',   '@nzwY&a~G+W%lvIZ?b43t7,?0Xvl_b($g@2^6:-[s0&^j:X3E6x%26xMNI|{>.vg' );
define( 'LOGGED_IN_KEY',     '2@A4J0aMc24s[`,3Ce<?P&=(!w|$#{[f@O9<e-}*YOu{AB$h.)d ^>VMo&@Yd#_&' );
define( 'NONCE_KEY',         'zNc@*s9]4C;<Om-]/S4ajjX|b*B..sruVAW4u9;CmzzjYIg=S{z_YbZ;I7-l?=PQ' );
define( 'AUTH_SALT',         'yio>iQ/gZ%Bkjhs^)l%kZZ$zi_mEK%z(BD@V=IM$]N6#S8A;)HsS/aWL@Z}AKdZc' );
define( 'SECURE_AUTH_SALT',  'g))0`FBENrT0opVT&9^OkNKPCPm`aHB2O?,$?AbTCm?_}w:^*)7:gcUIbaOH)+!f' );
define( 'LOGGED_IN_SALT',    '`qpO-]Knbz>-W!q)/NvS)#>-1LejQ@!,&b4wX7G1<Ue S@7^@w5G3v@>B2x:$=Is' );
define( 'NONCE_SALT',        '<;.m_n8BN0Hnp#ZGBJ;}v(YI$[a8:.rN7z Oju(>5#.btX|B3j&{4_b&6qj^tn#h' );
define( 'WP_CACHE_KEY_SALT', '|MzI,uchH>@@vd(Zh(YxKwUp3L)%S!XLuU(A6:(T(D1k$;x-yP&E+<: $OHNop9u' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
