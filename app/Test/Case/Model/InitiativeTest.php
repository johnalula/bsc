<?php
App::uses('Initiative', 'Model');

/**
 * Initiative Test Case
 *
 */
class InitiativeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.initiative',
		'app.project',
		'app.objective',
		'app.initiatives_objective'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Initiative = ClassRegistry::init('Initiative');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Initiative);

		parent::tearDown();
	}

}
