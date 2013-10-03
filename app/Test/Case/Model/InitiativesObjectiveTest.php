<?php
App::uses('InitiativesObjective', 'Model');

/**
 * InitiativesObjective Test Case
 *
 */
class InitiativesObjectiveTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.initiatives_objective',
		'app.initiative',
		'app.project',
		'app.objective',
		'app.perspective',
		'app.organization',
		'app.office',
		'app.objectives_office',
		'app.measure',
		'app.unit',
		'app.frequency',
		'app.period',
		'app.threshold',
		'app.majoractivity',
		'app.target'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->InitiativesObjective = ClassRegistry::init('InitiativesObjective');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->InitiativesObjective);

		parent::tearDown();
	}

}
