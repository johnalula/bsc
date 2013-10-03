<?php
App::uses('Objective', 'Model');

/**
 * Objective Test Case
 *
 */
class ObjectiveTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.objective',
		'app.perspective',
		'app.organization',
		'app.office',
		'app.objectives_office',
		'app.measure',
		'app.initiative',
		'app.project',
		'app.initiatives_objective'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Objective = ClassRegistry::init('Objective');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Objective);

		parent::tearDown();
	}

}
