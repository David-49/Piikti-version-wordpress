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
define('DB_NAME', 'local');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

//désactive l'éditeur de texte dans le back office de WordPress
define('DISALLOW_FILE_EDIT', true);

//limiter le nombre de révisions
define('WP_POST_REVISIONS', 5);

define('AUTOSAVE_INTERVAL', 300); // 300/60 secondes = 5 minutes



/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'tN31LoGnKndJgrSoayM5xvubZd75QBzpgLmzzfvlp/uk0HT1F04Rog4eHXVdc4zPk2H6Zn8IoTcKCS0ILGpBWQ==');
define('SECURE_AUTH_KEY', 'F5uCs/6NNa9bSd/cAsi/plyCoW1cKFD/fPA+FFdJnTvPCTFY9tTqn6Ddw9GLH5jEfYcbV0AZ4E/SfIv4vVBW3g==');
define('LOGGED_IN_KEY', 'nZAchFsAR/83L1dYqBFNZeRujrgUz8CMhN2yQ9SiiW9BpvnDoIzK35JiVJakaqr18xd2XZdLBnjVKJi4n0hZFQ==');
define('NONCE_KEY', '4RXITcX7W88wKdbwVfeWakI7Aa7acXiIcbjr2/3dfCHrAFxvUPdweJiGBwLRzHeQS55P7dPPfTtL0b+QwPij7w==');
define('AUTH_SALT', 'jyatSGfAmZrRBcIkqBmlqNIh3vc6VlenSR1YXFCaLCl0xGxMNlXs6K/YVGa3ynqK8MYXsuCS1rmQAw885yy6xw==');
define('SECURE_AUTH_SALT', 'lDdxAUY8PSrJixC5x/srQmL52SAytQNiXic27hWIaP6Fn5Kp3IB5UdVCcEZMlTOQR0qEM0ocvhpG6+dvDblSyQ==');
define('LOGGED_IN_SALT', 'vRSj9zGZkHh1qn6d5vrZ9ntiHfQ1eGAFJ8JfC7TEaInIrTccDZyV82AysJFdcCwyGFWZuP+c/BwojG6f4t7IKg==');
define('NONCE_SALT', '+5dOJCl/GYjroT5DuOuMeo+eA7GbwXPoqqYQvcSGAcKcSwI0Aqs/FkjNpv4v8U2lhKidz9HddW5dOnoH0M4Qvg==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

$is_localhost = ($_SERVER['REMOTE_ADDR'] == "127.0.0.1" or $_SERVER['REMOTE_ADDR'] == "::1");

define('WP_DEBUG', $is_localhost);



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (! defined('ABSPATH')) {
    define('ABSPATH', dirname(__FILE__) . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
