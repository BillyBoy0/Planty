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
define( 'DB_NAME', 'planty' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '$@iP]nQCId_3vq::j#pnrI! qn_~[=(+i;*S<?.6a|~DuU1>G/D+KSK+0nNAX~_B' );
define( 'SECURE_AUTH_KEY',  '9~yZ0p<AnLqY2uw}n_Qy:y`)^HSLN%kht6&w{L}WlorK-8rulV0]rL1A>Pb[=?2r' );
define( 'LOGGED_IN_KEY',    'e7%s)l,l?$9%?(yT>#.`b>yW{$6jM8>8W[}O9zG6ZXzyJ@GCuG.j ZPfk4PqhCTd' );
define( 'NONCE_KEY',        'R6(Kty!gASh&XSc>!Vg*>-ws;?3{QMsy17[<zfnAbq `DQOP%2cu.UE&X9Cf5I~-' );
define( 'AUTH_SALT',        ':z8mr+aY=G}<{`~kB<vZAmqKDk{,MWBv#`2>c]q&`%pkpy%l<>R`r*m>40S;K,87' );
define( 'SECURE_AUTH_SALT', 'RH`1eG^D NXfDdLtj:7iB.rl$PJ$%U5*yyw|dk)k[ghRo#1_)IV-l/Y2{h}t^x51' );
define( 'LOGGED_IN_SALT',   '@QDQd[iBXY tY1lzl-wGbw}_GXZO1=([HQq<|j)@XceJ7qHYwh(*3Z|W6O}p^zI(' );
define( 'NONCE_SALT',       'k&:lbH|aY!rT4<}0u6Vo7|*}W=d@B7(RlabxG.2*},t<Efga U,ew.&RW8n_=^~B' );
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
