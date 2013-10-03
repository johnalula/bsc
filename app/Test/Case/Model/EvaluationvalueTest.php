<?php
App::uses('Evaluationvalue', 'Model');

/**
 * Evaluationvalue Test Case
 *
 */
class EvaluationvalueTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.evaluationvalue'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Evaluationvalue = ClassRegistry::init('Evaluationvalue');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Evaluationvalue);

		parent::tearDown();
	}

}
