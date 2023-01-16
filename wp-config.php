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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'jjadmin' );

/** Database username */
define( 'DB_USER', 'jjadmin' );

/** Database password */
define( 'DB_PASSWORD', 'nexon2023' );

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
define( 'AUTH_KEY',         'UfGFj!7<%1^h+Z5(,AFlQd^~@TDO[EZMVo]ySHGte]oR[dHzdsn:T^<;2x.c~re8' );
define( 'SECURE_AUTH_KEY',  'p0{l*t6rMnheQ~wH@JHV7[J{,z_MiM-JwHC#`4$eib6K2,3yst8561O*#(iA$nI:' );
define( 'LOGGED_IN_KEY',    '8g8!Yg(Gom8zm-}G;p=-$IQ|b=VsaNv!5,V01K_KR6JhO*Jr+=>vPvU&:&]jpYnm' );
define( 'NONCE_KEY',        '<Ha6v;U@Abo&egd?3scEl~/BCU_kSbh3@kpgYq=9{rs}R-]t*XVkKl4K6!SVZ[#p' );
define( 'AUTH_SALT',        'U2./QdGd_1?$ tI}e@cPv{S/1ydim}ItWCezx(U>qk5=IH}IC#$ edp}mm6{AU:d' );
define( 'SECURE_AUTH_SALT', '?Ic#AAR_gsWy;FzwZ0%9]Ci/, f;v,MGWCh^A69cv=v6*1k~FXo? $z%@%.cZ,Dx' );
define( 'LOGGED_IN_SALT',   '6B%s#]ZPPl%FQ}E,h?~.;QhSOws#a/b~1.<?yHG.S^wp>4e` ae^a?G@Lm{yo/c ' );
define( 'NONCE_SALT',       'Zf-kT) t<dep%_BPc7kEP~wyysNPZB4@41sK$OArMkC!061yteVfG0bXM<tt@,*M' );

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
