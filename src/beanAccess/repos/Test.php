<?php

namespace ampf\skeleton\beanAccess\repos;

use \ampf\skeleton\doctrine\repositories\Test;

trait Test
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
				$this->getBeanFactory()->get(
					'Doctrine.Repository.Test',
					function(\ampf\beans\BeanFactory $beanFactory, array &$beanConfig) {
						return $beanFactory
							->get('EntityManagerFactory')
							->get()
							->getRepository('\ampf\skeleton\doctrine\entities\Test');
					}
				)
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

	/**
	 * @return \ampf\beans\BeanFactory
	 */
	abstract public function getBeanFactory();
}
