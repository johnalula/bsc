<?php
App::uses('Sub', 'Model');

/**
 * Sub Test Case
 *
 */
class SubTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.sub',
		'app.activity',
		'app.perspective',
		'app.objective',
		'app.organization',
		'app.office',
		'app.objectives_office',
		'app.measure',
		'app.unit',
		'app.frequency',
		'app.period',
		'app.threshold',
		'app.majoractivity',
		'app.subactivity',
		'app.user',
		'app.majoractivities_user',
		'app.target',
		'app.initiative',
		'app.project',
		'app.projects_task',
		'app.initiatives_objective',
		'app.initiatives_owner',
		'app.theme',
		'app.themes_objective',
		'app.activitievaluation'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Sub = ClassRegistry::init('Sub');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Sub);

		parent::tearDown();
	}

}
