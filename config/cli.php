<?php

return array(

	'routes' => array(
		'index/index' => array(
			'pattern' => 'index/index',
			'controller' => 'IndexIndexController',
		),
		// generic catch-all, route.
		'help/index' => array(
			'pattern' => '(?P<pathInfo>.*)',
			'controller' => 'HelpIndexController',
		),
	),

	'beans' => array(
		/**
		 * Controller stuff
		 */
		'IndexIndexController' => array(
			'class' => '\ampf\skeleton\controller\cli\index\IndexController',
		),
		'HelpIndexController' => array(
			'class' => '\ampf\skeleton\controller\cli\help\IndexController',
		),

		/**
		 * View stuff
		 */
		'View' => array(
			'class' => '\ampf\views\impl\DefaultCliView',
			'scope' => 'prototype',
		),
	),

	'viewDirectory' => realpath((realpath(__DIR__) . '/../views/')),
);
