<?php
require 'environment.php';

global $config;
global $db;

$config = array();
if(ENVIRONMENT == 'development') {
	define("BASE_URL", "http://localhost/nova_loja/");
	$config['dbname'] = 'nova_loja';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = '';
} else {
	define("BASE_URL", "http://awregulagens.com.br/nova_loja/");
	$config['dbname'] = 'nova_loja';
	$config['host'] = '172.106.0.120';
	$config['dbuser'] = 'novaloja';
	$config['dbpass'] = 'N1e2c3a4novaloja';
}

$config['default_lang'] = 'pt-br';
$config['cep_origin'] = '78125590';

$config['pagseguro_seller'] = 'awregulagem@hotmail.com';

//Informações Mercado Pago
$config['mp_appid'] = '5021185167409685';
$config['mp_key'] = 'JuWlsLxA33m7lbab8k19ICxOjG9vv8rP';

$db = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'], $config['dbuser'], $config['dbpass']);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Cofigurações do Pag Seguro
\PagSeguro\Library::initialize();
\PagSeguro\Library::cmsVersion()->setName("NovaLoja")->setRelease("1.0.0");
\PagSeguro\Library::moduleVersion()->setName("NovaLoja")->setRelease("1.0.0");

// Configurações da conta PagSeguro
\PagSeguro\Configuration\Configure::setEnvironment('sandbox');
/*\PagSeguro\Configuration\Configure::setEnvironment('production');*/
\PagSeguro\Configuration\Configure::setAccountCredentials('awregulagem@hotmail.com', '2AA37E35FD25400BAF307E497890E2B8');
/*\PagSeguro\Configuration\Configure::setAccountCredentials('awregulagem@hotmail.com', 'pega no site pagseguro');*/
\PagSeguro\Configuration\Configure::setCharset('UTF-8');
\PagSeguro\Configuration\Configure::setLog(true, 'pagseguro.log');