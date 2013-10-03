<?php
App::uses('Majoractivity', 'Model');

/**
 * Majoractivity Test Case
 *
 */
class MajoractivityTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.majoractivity',
		'app.measure',
		'app.objective',
		'app.perspective',
		'app.organization',
		'app.office',
		'app.objectives_office',
		'app.initiative',
		'app.project',
		'app.initiatives_objective',
		'app.unit',
		'app.frequency',
		'app.period',
		'app.threshold',
		'app.target'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Majoractivity = ClassRegistry::init('Majoractivity');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Majoractivity);

		parent::tearDown();
	}

}
