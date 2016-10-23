<?php

namespace ampf\skeleton\controller\cli;

use \ampf\beans\BeanFactoryAccess;
use \ampf\controller\Controller;
use \ampf\requests\CliRequest;
use \ampf\views\CliView;

abstract class AbstractController implements BeanFactoryAccess, Controller
{
	use \ampf\beans\impl\DefaultBeanFactoryAccess;

	protected $_request = null;
	protected $_view = null;

	public function beforeAction()
	{
	}

	public function afterAction()
	{
	}

	// Bean getters

	public function getRequest()
	{
		if (is_null($this->_request))
		{
			$this->setRequest($this->getBeanFactory()->get('Request'));
		}
		return $this->_request;
	}

	public function getView()
	{
		if (is_null($this->_view))
		{
			$this->setView($this->getBeanFactory()->get('View'));
		}
		return $this->_view;
	}

	// Bean setters

	public function setRequest(CliRequest $request)
	{
		$this->_request = $request;
	}

	public function setView(CliView $view)
	{
		$this->_view = $view;
	}
}
