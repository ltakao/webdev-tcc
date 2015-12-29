<?php 

require_once __DIR__ . '/vendor/autoload.php';

use Silex\Application;
use Silex\Provider\DoctrineServiceProvider;
use Silex\Provider\TwigServiceProvider;

$app = new Application();

$config = require_once __DIR__ . '/config/config.php';

if(!$config) {
	throw new \Exception("Erro ao processar o arquivo config.php", 1);	
}

// Providers
$app->register(new TwigServiceProvider(), array(
	'twig.path'	=> __DIR__ . '/views',
));

$app->register(new DoctrineServiceProvider(), array(
	'db.options' => $config['db.options']	
));

// Mount Controllers
$app->get('/', function() {
	return 'Hello World!!!';
});