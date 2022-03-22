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
define( 'DB_NAME', 'bdwordpress' );

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
define( 'AUTH_KEY',         'BM<?BR[ALoPoH`g7>2T(zx4JdhjWE 4#OJY=};pk-TTFf[hzFV!7~,1.R-1fXAf]' );
define( 'SECURE_AUTH_KEY',  '^PEtwWB_XkTBZoU*b[Oc::0)&Aul]7si>0c^8wNG!6f8NdNTvq~!ZzBB{*F;>#g:' );
define( 'LOGGED_IN_KEY',    'iTZP$=jP,:@`0h)^a)WmOX.pEn@FP)Ek`jpde</J%I)FgK_oWk&dw}/Q|<v=WiHI' );
define( 'NONCE_KEY',        'ZMr7?Y8$SIM]r-B.[c$!>JG`]vfqYEI=4&v@fgY2ncrbKggF7Kpw5/Rs,,*X:7t@' );
define( 'AUTH_SALT',        'H<C6h!g{`E1m9)=uMy?qbeJA@*dU8@w~KT{%0(zcP#?UyorRP>BV8peA)}P;H%RC' );
define( 'SECURE_AUTH_SALT', 'fV~J4O#-m3!UN`BZ]=VKq;=V*}|F]Y%b;Qvjc%!d-[:!g O-k;5Ic!LAb`P`>WpX' );
define( 'LOGGED_IN_SALT',   'm./g+y3&Wnd_RrT!2U5z3Tj3ZkbiUbEJBegY:AKaS8T 3~Y5t*Xxup~Lel{stDm=' );
define( 'NONCE_SALT',       'as?5k48shRDL fId8Tx@&4X#9bMV]dY9X>Usaw-kp(rPlY/2PX}@^1dJrn76rfw[' );
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
