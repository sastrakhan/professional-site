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

define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'seandatabase');

/** MySQL database username */
define('DB_USER', 'sastrakhan@sean-professional-mysqldbserver');

/** MySQL database password */
define('DB_PASSWORD', 'Sam1cooke!');

/** MySQL hostname */
define('DB_HOST', 'sean-professional-mysqldbserver.mysql.database.azure.com');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '09,b;0%P2}2^L>fZfPK+#=K6p+kSR}#=Qk9WFlBM@.>ywd(VlIU~c].g]=cAt~()');
define('SECURE_AUTH_KEY',  'WudY,{`;v9bjxwBp{h99MlZfoO:;n]uzbGMa]s @U_OU71NtKzx.1[)B[,f;6QGI');
define('LOGGED_IN_KEY',    'pGX0ofM&:Q`oh`?{.eYZ641D8G$Xp-P:|~Eb7.rs!6|(_|xO&w%dO{3F@&maa9FD');
define('NONCE_KEY',        'iVmC)!7(|:_NK+sl]omX1}0*4>yij/z+^4[^-A;qK.yXA,g*O]M Km#F9G4P$?<9');
define('AUTH_SALT',        'mh2SNL fL^Ulc:fE};@Q%5IKhOYX5|[K&Y-Vj49Dq)uRw]$cnHEm 3W%o2@=FipM');
define('SECURE_AUTH_SALT', '*6vJOcpieY$yu*Yjt>0E|P|X0N]*Yy<RX3b5|`aR7(bm%oaP]&%-x}o&)wl~<g2`');
define('LOGGED_IN_SALT',   'xXoFqtT8?@tl)9]W:O#(jR(M;mYf#Q?>}L&gc=Qn|p&} k!wu.8R]kz?iP 1.z8M');
define('NONCE_SALT',       '+,ZXmq>ef@6H{JNCA_]YxlGFGm.n@V|5rCzT|15=%;w|t%vK|rerq<pWP`/ymFeg');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
