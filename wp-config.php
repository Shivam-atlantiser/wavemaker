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
define( 'DB_NAME', 'wavemaker' );

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
define( 'AUTH_KEY',         '~SR!ZYI=G.&BuJ*hEb,`FvCMf&h]rt0Zi@7}]V:<4Ia#X!jbVq]O=xRw!.&cNQ^Q' );
define( 'SECURE_AUTH_KEY',  'Qo!uNzzcQw#ei9opIs~Aq?;Q_Y4judScX75;]@]F|cb0?h(G4/w8aq:aA82-oQ-8' );
define( 'LOGGED_IN_KEY',    ']5T3ey`x,3YG`r$50jl&r][;~+RbEwht&OT&dwz5:eX/}iV}!Jt#]L^]fSUzrmN.' );
define( 'NONCE_KEY',        'J.2TNJ&ICt<,!rI9$*?i7YN.u6,r{{v}ea>{c3_6Ga0$pkI}c[BR:D{YdAw;>uUf' );
define( 'AUTH_SALT',        'P1)jiP/{uk4%_c|]E/`&KwY9[Oid;Y/h*mS&H xyIqw^e6y.vo]4#]Vx4FrNl>)]' );
define( 'SECURE_AUTH_SALT', '4U}$0c,x5 %w-x,S4_lzHeh;xM@Q$F1SYSf68&NFeFv4V=PW+.r>CE@Iv8no!33~' );
define( 'LOGGED_IN_SALT',   'dT^-ti?Nm>%^lMovLQrI:&~>XAn]B=dXNxdLaGe6/<k/]%!3CPnHl!)1_@deySR+' );
define( 'NONCE_SALT',       'Dc[g2S)cS4yT@ssS2cqO::d:I;qI hy9&[L@DCT,b/&-gc1c-&rm$NRB){pX@J*A' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_wavemaker';

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
