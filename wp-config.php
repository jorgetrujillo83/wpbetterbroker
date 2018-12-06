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
define('DB_NAME', 'wbetbroker');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '!Nz+i.Vi!c(.}0.O4j#HuH/B/)M1J9=Gem< o{(jc$4xesx?DUU+::}@_rMEPdv/');
define('SECURE_AUTH_KEY',  'v218]uu6?G=(V|;v,i%P(i2EE Y.upKDMR:5xBZK,S:>fVcsQDysPW^r3N&s[zY;');
define('LOGGED_IN_KEY',    '$Dsdr3)UGwkf[Vx0d)R)N}[,Ogv4ER:{Bn&Q5}3a*csoM_.{Z|]T:dqM9@PL$};P');
define('NONCE_KEY',        '!7DD$$eHXW<fC8sT}q_._X=HC1@#:xy`$E4&PP-=TUf`&Fe/.QEEJDvT>}2V&P27');
define('AUTH_SALT',        '.$OT}A:jFET@@p{F(vKxM30VLzOV^f%TlRGB8P=TP!p%jsY{U8LKGI)]xZ]4+Y!v');
define('SECURE_AUTH_SALT', '`6/7(]scN0^;lZI#v >vOHL]Jz~t4yAq_L1+~Z>dbhKeaxa/uTKt4*D*ALG_ ]bq');
define('LOGGED_IN_SALT',   '*+:kX,?h+RJER`2R~L=j1:vIC~.}BLU@$o?;4Up{1Z<[;94mP0r!)<;(Q%(QPI^N');
define('NONCE_SALT',       'QAIZ!QY(M)a+2f?R{<^sz){qFbO03M1Iwif-1BzH2G#1R/BKrx5 C6op-0D@OKM_');

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
