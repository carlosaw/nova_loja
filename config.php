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

// Informações do PagSeguro
$config['pagseguro_seller'] = 'awregulagem@hotmail.com';

//Informações Mercado Pago
$config['mp_appid'] = '5021185167409685';
$config['mp_key'] = 'JuWlsLxA33m7lbab8k19ICxOjG9vv8rP';

// Informações do Paypal
$config['paypal_clientid'] = 'AToTrCxd-P1hR-PmPqb2prwCFcQjD7Fva0t6D8ttcdNx6EMUNszFHWGEvUUy-tEPH1wUFcELTi5JSzew';
$config['paypal_secret'] = 'ELzKKj7E7vtxGECKf9rYXap8SH6pHwzxyiwNQSMvuJli4OLAnT0YnSTY6ZCiB7PS-bONuAVqu6hvDhCC';

// Informações do Gerencianet
$config['gerencianet_clientid'] = 'Client_Id_1c50ae8825e263515c4914f07f5385581d389ab2';
$config['gerencianet_clientsecret'] = 'Client_Secret_e9ae23fdee5a5b7dff9337caf068c3ae0763b463';
$config['gerencianet_sandbox'] = true;// Muda para false em "production".

// Banco de Dados
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