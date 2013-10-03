<?php
App::uses('Measure', 'Model');

/**
 * Measure Test Case
 *
 */
class MeasureTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
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
		$this->Measure = ClassRegistry::init('Measure');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Measure);

		parent::tearDown();
	}

}
