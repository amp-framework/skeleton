<?php

namespace ampf\skeleton\beanAccess;

use \ampf\skeleton\doctrine\repositories\Test;

trait TestRepositoryAccess
{
	protected $__testRepository = null;

	/**
	 * @return Test
	 */
	public function getTestRepository()
	{
		if ($this->__testRepository === null)
		{
			$this->setTestRepository(
				$this->getBeanFactory()->get('EntityManagerFactory')
				->get()
				->getRepository('\ampf\skeleton\doctrine\entities\Test')
			);
		}
		return $this->__testRepository;
	}

	/**
	 * @param Test $testRepository
	 */
	public function setTestRepository(Test $testRepository)
	{
		$this->__testRepository = $testRepository;
	}
}