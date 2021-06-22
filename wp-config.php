<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'nutrimais' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'RTm_ Pfh,sYWbt=431^PSu1l-evB<xgPefwSy<(_mCqSiURhIw(.,a,>kkIBZ;]J' );
define( 'SECURE_AUTH_KEY',  '%&(N@>J3/DC5^:eF|HOp]_EA> 5i>yT<,)gx#6(2q[|w4OivcpUgyn1f/|j{K>?@' );
define( 'LOGGED_IN_KEY',    's?)DltW5qt[!rS*|3%VC$6qoH77G -Qw7T)9jM3E-.GQ{Q/e):a**C`{Pge?~1up' );
define( 'NONCE_KEY',        '3{!bMD7nIB=e6r^J{XwC@PM=J#W=&($:;j/t%ZX0-OUEL-%}_C,g)D`0,ZboKXg2' );
define( 'AUTH_SALT',        'B%*ZpzN_T3 WLQ)r |MwGrv$fgt@elh.g0RFdOWfNja U]B3WPx Dwpi)PK-2w#X' );
define( 'SECURE_AUTH_SALT', '1hBw:}A(>G2o`RR`8`TaWfd*p~Uj5moTC9s}:-R_O@2qwx+XVV@ECv1:kzH]jFN8' );
define( 'LOGGED_IN_SALT',   'OcgB0Le~Y]9S_HXQ5wV`IISSO|#sR gN.-f=><E)9*rD&Dv]L]YYbt-Vm(]q97+6' );
define( 'NONCE_SALT',       '<v0 R0%7^xqtl]KV%9,(1s?9z5S&DeLPbFJ@p:_he FP[$K.NXq*s-$V`5t.0j%V' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_nutrimais';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
