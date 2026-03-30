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
define( 'DB_NAME', 'Uzfa_creations' );

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
define( 'AUTH_KEY',         ')_2=ptfk&0t$=&Z~]DHX[mQd=(A~{xc>[n8qH9Fqh$ehJ#&@-|[pv(96.P,6+A!5' );
define( 'SECURE_AUTH_KEY',  'qg]i$PrB~;dn;u(3$0 1PaA)dG%mPIi*$u/%T#J#*4v,8]<]Uf{BT@*m-JCf`mz}' );
define( 'LOGGED_IN_KEY',    ';$D$B}Y}qds|Q)Hy(I<.tb$)f>wv6=8!`j8&+lpyn8QzU?|y?_pwqAR#pv+qM6M/' );
define( 'NONCE_KEY',        'gRqE)(QaCbd`?4m)|69ZIT+C{CAXFbF(^**ZXVnqLB3!7JB}](kI(]|!k`k}lDs<' );
define( 'AUTH_SALT',        ' jDjW h{gzl0OC+{J%u~.^sv!v<+#8FK;`l,T`z`Y:uE()}5lM#8Tvp^l`7l>Q{v' );
define( 'SECURE_AUTH_SALT', 'pBNGv^H%4>f7:!&vW3vBk9B=y3PB,FQ6=7kRy)gI.HI%bGP<R{rJODh@3Wx&QHBu' );
define( 'LOGGED_IN_SALT',   'xs #3]*G>$`QO+g_85}Qw}#=+n iCZY[jlwhILi0j_))hHs,/Og] ()=8oI#&iRT' );
define( 'NONCE_SALT',       's#zzqrz3#B[-+LsH&-C%],;IKa>a(.!(#TKI;VK2qb7GAUTu6nmxC@UjXko{>l2(' );

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
