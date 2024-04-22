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
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'kalansodb' );

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
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'd}#|_>nUl0EwW(<>5bk)zgq4:8qG+n1f=A:;^dlhdhB3v2@cm.@{HV`b&A *!t p' );
define( 'SECURE_AUTH_KEY',  'M3P,}uyM7c?kF9RnYxd:.d%vGlb}a2QEI9Y5tBVoQq3w[)4|K#Os8@Go?K2^w,8I' );
define( 'LOGGED_IN_KEY',    'OLX7HHkgy>`E/`om Hw$M-G*4M<MbN@Jso9m;-+O8Txx%Rc@JM)SBKE25/GV %,&' );
define( 'NONCE_KEY',        'L,}pK/jC=1E42~}^ndSDXE?U}6zScdLZ3tg1Je`{?$&@O.Gk$T?6Q9Dt%eYEqJ4i' );
define( 'AUTH_SALT',        '$r]PDG94]3HF M/_Q0r8YdPpo1t?9[B_Hb<-u&H1EnTcNo&1L{yQ-c{o_7E>8h:{' );
define( 'SECURE_AUTH_SALT', 'd XIu03p5sZcPtnG85!G4UwmZmesijo>7GwhH7QEB>&B%`Eu?(VOg$gb>S|u;I2`' );
define( 'LOGGED_IN_SALT',   'muzZQSG7OPzSYnv~#0:876[zc?(Q,GF~ _`96x4STgE.(dg-:b8[D6g{R,*kEhwf' );
define( 'NONCE_SALT',       '!:v3N/@~$Bk3U%8:H7kxq)1PsZ~q%lM6YsuqnF,v:v+h =?WlqN{ [I*f3kBZHJZ' );
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
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
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
