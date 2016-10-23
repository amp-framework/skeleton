<?php

return array(

	'beans' => array(
	),

	'routes' => array(
	),

	// This should be overriden by the unversioned local.php config file
	'doctrine' => array(
		'cacheDir' => (__DIR__ . '/../cache/doctrine/'),
		'connectionParams' => array(
			'driver' => 'pdo_mysql',
			'host' => 'host',
			'user' => 'user',
			'password' => 'password',
			'dbname' => 'dbname',
			'charset' => 'utf8mb4',
			'driverOptions' => array(),
		),
		'entities' => array(
			__DIR__ . '/../src/ampf/doctrine/entities/'
		),
		'isDevMode' => false,
		'proxyDir' => null,
		'useSimpleAnnotationReader' => false,
	),

	'translation.dir' => realpath(__DIR__ . '/translations/'),

	'stringfilecache' => array(
		'cachedir' => realpath(__DIR__ . '/../cache/'),
		'defaultttl' => 3600,
	),

	'configuration.service' => array(
		'.ampf' => array(),
		'.ampf.skeleton' => array(),
	),
);
