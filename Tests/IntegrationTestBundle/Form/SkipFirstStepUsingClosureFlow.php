<?php

namespace Craue\FormFlowBundle\Tests\IntegrationTestBundle\Form;

use Craue\FormFlowBundle\Form\FormFlow;

/**
 * @author Christian Raue <christian.raue@gmail.com>
 * @copyright 2011-2013 Christian Raue
 * @license http://www.opensource.org/licenses/mit-license.php MIT License
 */
class SkipFirstStepUsingClosureFlow extends FormFlow {

	protected $allowDynamicStepNavigation = true;

	/**
	 * {@inheritDoc}
	 */
	public function getName() {
		return 'skipFirstStepUsingClosure';
	}

	/**
	 * {@inheritDoc}
	 */
	protected function loadStepsConfig() {
		return array(
			array(
				'label' => 'step1',
				'skip' => function($currentStepNumber, $formData) {
					return true;
				},
			),
			array(
				'label' => 'step2',
			),
		);
	}

}
