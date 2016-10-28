<?php

return array(

	'beans' => array(
	),

	'routes' => array(
	),

	// This should be overriden by the unversioned local.php config file
	'doctrine' => array(
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
