<?php

$start = microtime(true);

error_reporting(E_ALL | E_STRICT);
ini_set('display_errors', 1);
date_default_timezone_set('Europe/Berlin');
mb_internal_encoding("UTF-8");

// require composer autoloader
require (__DIR__ . '/../vendor/autoload.php');
// boot the applicationcontext and get merged config
$config = \ampf\ApplicationContext::boot(
	array(
		(realpath(__DIR__) . '/../vendor/amp-framework/ampf/config/default.php'),
		(realpath(__DIR__) . '/../vendor/amp-framework/ampf/config/http.php'),
		(realpath(__DIR__) . '/../config/default.php'),
		(realpath(__DIR__) . '/../config/http.php'),
		(realpath(__DIR__) . '/../config/local.php'),
	)
);

// set up our beanfactory
$beanFactory = new \ampf\beans\impl\DefaultBeanFactory($config);

// get the router
$router = $beanFactory->get('Router');
// get the request bean
$request = $beanFactory->get('Request');

// route it!
$router->route($request);

// flush the response
$request->flush();

$end = microtime(true);
$runtime = ($end - $start);
echo "<br /><br />Runtime: " . ($runtime * 1000) . "ms<br />";
