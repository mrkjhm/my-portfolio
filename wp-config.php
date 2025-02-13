<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'my-portfolio' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '6bi*Wr45E[]Yr#6ib0C]5+,K,Bl_hn{^D,P76Emv5pZJP&5,D@_S>qG*R@4|fd5N' );
define( 'SECURE_AUTH_KEY',  'XIgv^O.e,2&NPvAD{m!LICTlwRQRR.l|uC5%_%X5H-}7l sKXLi:guUj1+9<cM5I' );
define( 'LOGGED_IN_KEY',    '59,gAI`d:dI<o|n!mLsb>HpISV234(_#y1R(1BZWCtt|@tYB2ty_bxduTNC^%tZa' );
define( 'NONCE_KEY',        'j8af7GSy41]%hb>drGzfobm%5UbgK,uQm*|`=uKd51xBU xp8cEb4bHs?2S9wg$s' );
define( 'AUTH_SALT',        'D u  44U9b#OwkKP`KStu4w+%/ YXB4-/DDz&K@y:B1fJi/9x8_3kSP:zvLkY64k' );
define( 'SECURE_AUTH_SALT', 'vq$INFQ?$swB6en3qo?LdSxVt~<F!3i@MxE4/p.,YX=E;pb+jx4wZK}A3:;s3)_q' );
define( 'LOGGED_IN_SALT',   'm54+1ju&W3/(mb|#)A1LH&!!juav10h4+s :6KM6v.*s;qC1g)e_<g.t{q%Kh+rL' );
define( 'NONCE_SALT',       '`HC$e@WhDB%*?`~-Gs 8m-TvHDuQUH`pQrz9$<~I00i/r`okYwkf)vE*s>w)I+3J' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
