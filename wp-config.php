<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'baseonepage' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'xQ}VbLXUS4N=~I=/%FdvOaU?E1At)T&hL=ehef.|Mm2c_GwZieVriCXua 9.|E%E' );
define( 'SECURE_AUTH_KEY',  'F[j,34;tz(67K#CTp<f)#uy})v^s@~:@0k8oqK=EFXbnR.29T)%pcpER`HdufAxF' );
define( 'LOGGED_IN_KEY',    'Z/^I3Sli?>0t4rEgt0`SiGO|XhHb4;[R1TN.>{n>1+`g3,k8#(flcFwyo:QK4ArY' );
define( 'NONCE_KEY',        '0}Jq`QJFA9(k!RZti7^Vo 3GkL%p<IEtkP&)f7i$|gQBt37cD)F]h}=[3zeP#UuJ' );
define( 'AUTH_SALT',        '`w*v3dS^}k@xYQ(c3z==AvHF-U$;^QCh4}=4^807LRn/mFWmyzz(}pB*i]n2MsL#' );
define( 'SECURE_AUTH_SALT', 'AH|>avBoP0DU_4i!G900=:@d2Id)l>Yw7We%|AD%!(3xrdL]-_8CQ>&+u_AW-W@L' );
define( 'LOGGED_IN_SALT',   'zq04[P++c0%;Yth4_.R;G~:f>i5WWs9r:P*VD>0hGdL[8!hVuuO5j>R>O96e&<+V' );
define( 'NONCE_SALT',       'IO}/^E#hQn%KQxHY%.[woHu^aW3gF%x/s>1a{aHAn9UiTr[Fbt!rkSWIb546i3w#' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
