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
define( 'DB_NAME', 'ishityou_konstantin' );

/** MySQL database username */
define( 'DB_USER', 'ishityou_konstantin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'fNxs2e8DgdZl' );

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
define( 'AUTH_KEY',         ';%Db74k})XOyA_o*[+T s~|U8,~mEu{9Bjq;8ct+n7wxo/dEi/ev+l^w(TfNT+l;' );
define( 'SECURE_AUTH_KEY',  '%:o6VNu(LcOSf}PD-Y_YBXd44x*rXvJx=U78m094GUL}3.|{pu-gb%!Sd9q;,uyi' );
define( 'LOGGED_IN_KEY',    'Jz&1u}(!B0`n*I6/OG/{2TU)<^v~BolLZAkpi0z: <kI!T$[M,1r.Al#)KcN^S8%' );
define( 'NONCE_KEY',        '(-lTr$80|w7:5%Q;,TAT^;=2!pv=]yq2B@BPQ_tW0N7UqhR,>M/QW*$!8N>!{%Q=' );
define( 'AUTH_SALT',        'dF(TN(*HGjDeZG$`M!dM/3H^OC4i<Isq7+a#|3B[{G>vMtZagi9TA{[(mN*QXpcE' );
define( 'SECURE_AUTH_SALT', ',PNf7Z[F8j.<yuzB-FL[@7{sk|rrzH2grpfwU(D.ev$a1Vo JRD(z%)2Cb:d,._l' );
define( 'LOGGED_IN_SALT',   'VB]>Put#/$.Y:6*/=8LzB @o_`2Q2@p-,M|_j4*g|kVN*l@(`Onnt{f$l<I`tz_9' );
define( 'NONCE_SALT',       ';AwJ<_g:#fB3qGSn>A<7cky0+#;hO!VwuA#f$,>Vf%M~N.)45/gT&EaJ>052_MV7' );

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
