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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'pqh2101995');

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
define('AUTH_KEY',         '`Q}kq8=`H2aV,qw[o4,RKM}=wg(fPXZ;@ksL(Cb9x4Q01WK_ rmH3]J6_>a36&VY');
define('SECURE_AUTH_KEY',  ' HIC!mMg^Q:ZJB$B*&0$08^}~8LukyusnNGR1xjNdu mAu>n-ozg!vZ.){.cE%$!');
define('LOGGED_IN_KEY',    'W/%d7Td?coWqj$<H>a?/`u=JJpouIvy+a2@qTA!>>Mj5>YYgUO;_%nNlfY~JM0lC');
define('NONCE_KEY',        'Gs!^Ou}:RZ[9x#iE@nw:B#UFi^[L9#@n G!zor:3Jm#xH>cC9L8o?9N-;B2b_GpD');
define('AUTH_SALT',        '4> I}+_*uFes6}E]p{dcaX;+K#`WeB(qy{8qrE@.:gfP(v,K9;<#a[RVjnNM]rEj');
define('SECURE_AUTH_SALT', '(6^6L>Dbrh_5n.eKK_nL, e%.&J1Q;5FJ`t0E0]]Vja!asiv(3c-h@xfqNTK#G7w');
define('LOGGED_IN_SALT',   '!iKf7m.iy*$MIPLvr+#.=!U5f*+.},!Y&?sbnMUQvtG=&=(3P1-+g6<],%VwtP/]');
define('NONCE_SALT',       '[TSc{XrN+VVJ(3;&0l<)S2@+/X_u%EZ6H6z1r1&Y FX:pza5L~!S4m=#Aw1&y=yU');

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
