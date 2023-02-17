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
define( 'DB_NAME', 'presta' );

/** Database username */
define( 'DB_USER', 'prestauser' );

/** Database password */
define( 'DB_PASSWORD', 'abc123.' );

/** Database hostname */
define( 'DB_HOST', 'db' );

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
define( 'AUTH_KEY',         '+hl-8An/UAV^|f2Aw2xUz]K[XC MB>H4SoY7np^%}P@PS^H>,)LL?3x=:8xV}W%h' );
define( 'SECURE_AUTH_KEY',  '%OoF<={wM(0O4Cr#+l0i+|yb8p.B#|avkn;Qn}LE?@LN I%s3x;_0MuW-960Mg-q' );
define( 'LOGGED_IN_KEY',    '!aHI5J$<LTBr)u;bga=ax2e4o%`f},>@=t z9}aT7!k9$wQl+*ITKe{eNQ[)x.h]' );
define( 'NONCE_KEY',        '4V`-jenxCb0)qPGbghtn53$w77,<*!y:{F.Kl,Q!*Rt{I&6hI(HuM}K=w~1&s)cL' );
define( 'AUTH_SALT',        'BJt=n0u{/>%71]JUi;^e@p?-<Ejrh+<E,(dge;&fDW87qTV!dk/-0]%NP<BwZ?k:' );
define( 'SECURE_AUTH_SALT', 'w7Gx5@$nT~~ c2mwJ[c}H%aVi<Zw_)VsTZGN|N1EddH/I:&+9uJ1Sb]]v<qn#dk)' );
define( 'LOGGED_IN_SALT',   'tnZ9,ic[pX;Q6@Id%/sHs=*4ga)WP/NN yl/x;4{S!_>1)gdK_(S:5@lCP=>rYm8' );
define( 'NONCE_SALT',       '?bnaSKV8.C(}/oUj `(2-@(@HQm_;cLXYeJ`<-83~B?c1nR6od=k&Tk $^!**0Fx' );

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
