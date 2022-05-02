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
define( 'DB_NAME', 'cfi' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'usercfi' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'LT#S:&-56HTnR9Qn0-,c' );

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
define( 'AUTH_KEY',         'ow~y3Me)QaK0Y[pV{Sc=>7Yi4%)F$`7=]XI~TB}wx/fXl.>ZZE|z2+%SCMrvBMGF' );
define( 'SECURE_AUTH_KEY',  'oIkeRQ3|w^4UHN{|WTQEh;#j2Ku1zh]c~AsTA}nV~*$?,nb:&pY,zI7sds@6+a#]' );
define( 'LOGGED_IN_KEY',    'vbRaxB&[A}3VFr|9A__NMoVW5`@1.W)gWR&ScL:/VR)]7=,ZTWD5f(?V^H=A-~X4' );
define( 'NONCE_KEY',        '9UOm>H_{RcUNsVQAB-~Xyh_L-GK<;mRec 2^iQ]jD6~Wd$$[K%7q@E9`3Z0In&sw' );
define( 'AUTH_SALT',        'b}p_BweX0}czu}gy_IBjGzx:/W]p|s,T53#4Aad` mn~kH]uIsV#c$ +9Zp/7F^a' );
define( 'SECURE_AUTH_SALT', 'Fxh|XU=a7FDh5E)+/w8LkTV)T&5[esF;GGhH.QfB[)OCe<L(P8^1:~-O(?LTIU;m' );
define( 'LOGGED_IN_SALT',   'W,UJ#|@$M6M+,|KGD_I36];J2j{DS<?8-STzR^1(@f[M*d #brQXPScwRdWR%oNO' );
define( 'NONCE_SALT',       'hQ_G(7YS~]+gmuZ1mCg==W>qxB!V5,fU&d&d+:9O8(l+t1oG}_VgFc}lE F.d0bT' );
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
