<?php
App::uses('Activity', 'Model');

/**
 * Activity Test Case
 *
 */
class ActivityTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
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
		'app.activitievaluation',
		'app.ties_user'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Activity = ClassRegistry::init('Activity');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Activity);

		parent::tearDown();
	}

}
