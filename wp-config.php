<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'wordpress' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         's;E%lX&tDYXqurqB/9NUEP-]q`j2m*.7]HtYGfeW-zMAw@;@Gk#;Mq{XqWm:]Y@s' );
define( 'SECURE_AUTH_KEY',  'U(j;aWLA]IKN!9P.z@H;nas8I;6XZK&$Z,7Sjuqdj3q({h5TK?Smih%(E2H%w:!~' );
define( 'LOGGED_IN_KEY',    'GgiA]eT=q8L*dHa,aCY}Ga3y^0bri+-.aWgChKfm%`uZFKktq54PFF`<XzYOi~)c' );
define( 'NONCE_KEY',        'nS(Z*p$2|oK-D(9ZikydvO-K(6o]dJMa4o$9,hjJp6|U^HULV,D}Th^s;?noC0HA' );
define( 'AUTH_SALT',        'q/k[C`%%uwgS$aavSYDh~._*~2B_gtc#^uKO!S+#w+?yO9Z^Hk)VgdZ~gdb )9qZ' );
define( 'SECURE_AUTH_SALT', 'S1no4TZU1pkEEVsv/ TbaWB3wN=P>P&R7T2-]f|+Y45nSdB.q(iQN3xsnY!va#7F' );
define( 'LOGGED_IN_SALT',   'x>c^R!?5Aj=y%)ZZ6%zp0Y{tQEYt8Ray5W!8Dx1Smka=Ush3}7Y Q)~?;m<w</XZ' );
define( 'NONCE_SALT',       'f>b}%^cWLf||QUcO>s6[v5@!!EelC..PraW/9r<1_+#tTMopi<#qUZ/acGl3]}kX' );
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
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
