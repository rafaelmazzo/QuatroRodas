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
define('DB_NAME', 'banco_teste');

/** MySQL database username */
define('DB_USER', 'rafaelmazzo');

/** MySQL database password */
define('DB_PASSWORD', '123mudar');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'M~^|5Do]&J$ryrR/GA($9U{TI<dm*J%kL/9<8|Z1,,zbtn@F+=qig=MqJR$qZQ9X');
define('SECURE_AUTH_KEY',  '+s_AUi+Y,Z[87blbwW4PfEi9J19(_S^nj@y^}1,Gdb8qt|CYu2B{B%;m6&RiFCjw');
define('LOGGED_IN_KEY',    '@3Jf)#>pOiNa(:fxFJBrVFnM_h(p @l[K]37Ug{#?_7SQ38AR5XejC^dm&G$o4ta');
define('NONCE_KEY',        'q:dSAe;91,eP&T2DqA_o^Pie@KTnxDS`5UC:b}+MB{V,KErOvm2l9&EADQdE(?3%');
define('AUTH_SALT',        'GU%^:jOaD-bb/3i$#~]cW[-4at`HVu*C)9SUkQU`u)W[=_L&*)hAPh+5Sn|U6UaT');
define('SECURE_AUTH_SALT', 'CQ93PI4JmV_-9H9@xmXJ9G57=/Bi*oS+-YTFRDBNdD>q#b~@FQ.iQ~>eNe.!P6_L');
define('LOGGED_IN_SALT',   'E{$L;_3(yZjc}.:IV<pWybbymYI^FEu59Ezl%.|Mg i>~@Xg-6G{{^em=r=r[[F>');
define('NONCE_SALT',       'xY|M*<}^I/>ZC%!X/@>[am,D5=oU fZMv{SW^sPPE%Qrcfr_CVb7vDy1lwMVL2XX');

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
