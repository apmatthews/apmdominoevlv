<?php
# Database Configuration
define( 'DB_NAME', 'wp_apmdomino' );
define( 'DB_USER', 'apmdomino' );
define( 'DB_PASSWORD', 'TZONzqjWrnz0rl6oEdCn' );
define( 'DB_HOST', '127.0.0.1:3306' );
define( 'DB_HOST_SLAVE', '127.0.0.1:3306' );
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', 'utf8_unicode_ci');
$table_prefix = 'wp_';

# Security Salts, Keys, Etc
define('AUTH_KEY',         ']mM`d)z wm%B+dQz&59DB/v9qI:NDw@g Y@YdoGnR4kyJ1t]-z]1rI^*+0wp Brz');
define('SECURE_AUTH_KEY',  'I1JW]:MniruYD9w<}:h759C Q`VE5cvr.1-c03UF0Aei+0&$7Q<jARHlt4?v{Hv,');
define('LOGGED_IN_KEY',    'Z BBs~f2~KisP%/K,6|M||n]IM*F)b;%6?KzsDU-N/G|LIk_>Ov>65Om+^PVoz??');
define('NONCE_KEY',        'pP{+[d8fUkzY3jtTr[/ZEU1$A:d1%2pZ:HP=C0dn(3Es 7,Pcu-Nle|`9p~EjUk4');
define('AUTH_SALT',        'W-_v3Po3$z,)pIgm)1?7q&48unO0aK/(LYj BMti!]j33 xV5/47Zqrg%-Eyv]u*');
define('SECURE_AUTH_SALT', '^cjHS=ydz|2+]e2V)p*Y1L -5-jP0/XJCN]k7ecQM}fYl->cv5li;uFtiWiE,r^=');
define('LOGGED_IN_SALT',   'g@qBd!z|2g&:+)7YB}Ev~2qhMCZ~834$#:lYX@$:cLHrV`aLhy]n=9^fmhuM%z]H');
define('NONCE_SALT',       '%Y1 B1S~=pwB%-Cy$poT3<%}2lCXp7|e4ukyW~X68lO-Pg|$,w(jeCYXW >MUjxb');


# Localized Language Stuff

define( 'WP_CACHE', TRUE );

define( 'WP_AUTO_UPDATE_CORE', false );

define( 'PWP_NAME', 'apmdomino' );

define( 'FS_METHOD', 'direct' );

define( 'FS_CHMOD_DIR', 0775 );

define( 'FS_CHMOD_FILE', 0664 );

define( 'WPE_APIKEY', 'd439ba6d7a3c071c30f50133a415a768933cdfc7' );

define( 'WPE_CLUSTER_ID', '100761' );

define( 'WPE_CLUSTER_TYPE', 'pod' );

define( 'WPE_ISP', true );

define( 'WPE_BPOD', false );

define( 'WPE_RO_FILESYSTEM', false );

define( 'WPE_LARGEFS_BUCKET', 'largefs.wpengine' );

define( 'WPE_SFTP_PORT', 2222 );

define( 'WPE_SFTP_ENDPOINT', '' );

define( 'WPE_LBMASTER_IP', '' );

define( 'WPE_CDN_DISABLE_ALLOWED', true );

define( 'DISALLOW_FILE_MODS', FALSE );

define( 'DISALLOW_FILE_EDIT', FALSE );

define( 'DISABLE_WP_CRON', false );

define( 'WPE_FORCE_SSL_LOGIN', false );

define( 'FORCE_SSL_LOGIN', false );

/*SSLSTART*/ if ( isset($_SERVER['HTTP_X_WPE_SSL']) && $_SERVER['HTTP_X_WPE_SSL'] ) $_SERVER['HTTPS'] = 'on'; /*SSLEND*/

define( 'WPE_EXTERNAL_URL', false );

define( 'WP_POST_REVISIONS', FALSE );

define( 'WPE_WHITELABEL', 'wpengine' );

define( 'WP_TURN_OFF_ADMIN_BAR', false );

define( 'WPE_BETA_TESTER', false );

umask(0002);

$wpe_cdn_uris=array ( );

$wpe_no_cdn_uris=array ( );

$wpe_content_regexs=array ( );

$wpe_all_domains=array ( 0 => 'apmdomino.wpengine.com', 1 => 'apmdomino.wpenginepowered.com', );

$wpe_varnish_servers=array ( 0 => 'pod-100761', );

$wpe_special_ips=array ( 0 => '104.196.147.234', );

$wpe_netdna_domains=array ( );

$wpe_netdna_domains_secure=array ( );

$wpe_netdna_push_domains=array ( );

$wpe_domain_mappings=array ( );

$memcached_servers=array ( 'default' =>  array ( 0 => 'unix:///tmp/memcached.sock', ), );
define('WPLANG','');

# WP Engine ID


# WP Engine Settings






# That's It. Pencils down
if ( !defined('ABSPATH') )
	define('ABSPATH', __DIR__ . '/');
require_once(ABSPATH . 'wp-settings.php');
