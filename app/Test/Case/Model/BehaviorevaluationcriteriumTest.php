<?php
App::uses('Behaviorevaluationcriterium', 'Model');

/**
 * Behaviorevaluationcriterium Test Case
 *
 */
class BehaviorevaluationcriteriumTest extends CakeTestCase {

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Behaviorevaluationcriterium = ClassRegistry::init('Behaviorevaluationcriterium');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Behaviorevaluationcriterium);

		parent::tearDown();
	}

}
