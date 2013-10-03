<?php
App::uses('Evaluationrank', 'Model');

/**
 * Evaluationrank Test Case
 *
 */
class EvaluationrankTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.evaluationrank'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Evaluationrank = ClassRegistry::init('Evaluationrank');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Evaluationrank);

		parent::tearDown();
	}

}
