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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'cT}_~=J1#x/2J+#;I]T3T58>V$PtE>4&,A*F1ln9KGa%A_:DMEEIs#9q=n<rrf*9' );
define( 'SECURE_AUTH_KEY',  '*f:]lji!hg?6R M)l#^`k66qi {3$0o10zxMu [)ORIYa1TwS^NeJ^:vd8F/QgQ7' );
define( 'LOGGED_IN_KEY',    '8c]pxuA}^#HGnKjPc[.,C@Eq[X58L5qLxkU?) G;%QH:Bm$UhAkvw:*N/=g6N%L6' );
define( 'NONCE_KEY',        '0k8bW]X[i9RR)5L3)h*l)]P?m3/m%/-6t-mXrQi0g:Er(PN_rc#i#73$IV6:R^Ld' );
define( 'AUTH_SALT',        'teg)iV+yl{!Y/yB=}bqilBkpX*h!t M+Ln;r`||Y;c4g-C0C|35o.JMy]_rP*A]:' );
define( 'SECURE_AUTH_SALT', '@q}^ekZh=/MF`G#l$jH@d%yVM%aSV0{^_aPw,%%qp73eDt0@M~4wu:2?, YY? i;' );
define( 'LOGGED_IN_SALT',   'k;9$xk|BmPA+j_t;WW>)apS1|9hQpNcL5&?xe6aZ$kWOP4rN8D8sq8_nvp{jD@QG' );
define( 'NONCE_SALT',       'K9Ih-^Y|9s48b.z[F>?!@sQyh4e>WR}G<Oi?a#Bv{ABQca,uQm-:RbCn@{PURR:*' );

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
