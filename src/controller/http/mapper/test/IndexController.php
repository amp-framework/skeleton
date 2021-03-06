<?php

namespace ampf\skeleton\controller\http\mapper\test;

use \ampf\skeleton\controller\http\AbstractController;

class IndexController extends AbstractController
{
	use \ampf\skeleton\beanAccess\repos\Test;

	public function execute()
	{
		$this->uniqueActionID = 'mappertest_index';

		$testRepo = $this->getTestRepository();
		if ($this->getRequest()->hasGetParam('add') && $this->getRequest()->hasCorrectToken())
		{
			$test = $testRepo->create();
			$test->setEntry(md5(time()));

			$testRepo->persist($test);
			$testRepo->flush();

			$this->getRequest()->setRedirect('mapper/test/index');
			return;
		}

		$this->getView()->set('allEntries', $testRepo->findAll());

		$this->getRequest()->setResponse(
			$this->getView()->render('http/mapper/test/index/default.html.php')
		);
	}
}
