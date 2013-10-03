<?php
App::uses('Evaluationtype', 'Model');

/**
 * Evaluationtype Test Case
 *
 */
class EvaluationtypeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.evaluationtype'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Evaluationtype = ClassRegistry::init('Evaluationtype');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Evaluationtype);

		parent::tearDown();
	}

}
