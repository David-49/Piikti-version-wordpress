<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'piikti' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

//désactive l'éditeur de texte dans le back office de WordPress
define('DISALLOW_FILE_EDIT', true);

//limiter le nombre de révisions
define('WP_POST_REVISIONS', 5);

define('AUTOSAVE_INTERVAL', 300); // 300/60 secondes = 5 minutes

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'R^@yXQ2/7yep1Lmt|g<LY9[?yi7 Q[&=H*%Z&Q>QNshV>%/I(wB&</l,CB~ixq-[' );
define( 'SECURE_AUTH_KEY',  ']g~5g:dq9L>.&#g.7nY2y:YyvV8wvy?>YUUFQ0VD[%ji4eGAC3j#2sUr-D~SeL!?' );
define( 'LOGGED_IN_KEY',    'InV#H7#|F[_LLoBXN@9;gk1xVv#o/*dkP>Ks|&n=xDWkUgxf[NGo[ak(^C<#%ZI}' );
define( 'NONCE_KEY',        '^M#Cm+jx4K9=($gOhy0stubz^eFKK@Ql~&g2<Kh~I0DMDAxq7xE=<$aLnWu`m1]Y' );
define( 'AUTH_SALT',        'f!;mYgrM.GB~!RA^M|d$(JQ*t+W}Rp$jWh:zO>HT`n~i,5i(` I@lgL(Oeu)qcDa' );
define( 'SECURE_AUTH_SALT', '(>v%nN5r76dXj;{*,BnDq`nHTJ/{s]Zz-(<rCf&fnSw;]pE-0V9YY^8/+ggxwZCj' );
define( 'LOGGED_IN_SALT',   'o61uQ+@v+/pPoHg}b+GY,k/)}=<V,Gw#nD#8)zytmv[6:24BglU+z#Y>@.~Eytxw' );
define( 'NONCE_SALT',       '6srnhin+k!q 0}CF1]_/Ya9$fG(&yQ.(qSVC#Q*osFLzR&oW$E=Psw!0O5]muw|t' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

// $is_localhost = ($_SERVER['REMOTE_ADDR'] == "127.0.0.1" or $_SERVER['REMOTE_ADDR'] == "::1");
//
// define('WP_DEBUG', $is_localhost);

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', true);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
