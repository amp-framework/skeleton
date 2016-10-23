<?php

return array(

	'routes' => array(
		'index' => array(
			'pattern' => 'index',
			'controller' => 'IndexController',
		),
		'mapper/test/index' => array(
			'pattern' => 'mapper/test/index',
			'controller' => 'MapperTestIndexController',
		),
		// generic catch-all, route.
		'index/redirect' => array(
			'pattern' => '(?P<pathInfo>.*)',
			'controller' => 'IndexRedirectController',
		),
	),

	'beans' => array(
		/**
		 * Controller stuff
		 */
		'IndexController' => array(
			'class' => '\ampf\skeleton\controller\http\IndexController',
		),
		'IndexRedirectController' => array(
			'class' => '\ampf\skeleton\controller\http\IndexRedirectController',
		),
		'SubrouteExampleController' => array(
			'class' => '\ampf\skeleton\controller\http\subroute\ExampleController',
		),
		'MapperTestIndexController' => array(
			'class' => '\ampf\skeleton\controller\http\mapper\test\IndexController',
		),
	),

	'viewDirectory' => realpath((realpath(__DIR__) . '/../views/')),
);
