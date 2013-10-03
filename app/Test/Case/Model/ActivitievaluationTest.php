<?php
App::uses('Activitievaluation', 'Model');

/**
 * Activitievaluation Test Case
 *
 */
class ActivitievaluationTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.activitievaluation',
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
		'app.ties_user'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Activitievaluation = ClassRegistry::init('Activitievaluation');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Activitievaluation);

		parent::tearDown();
	}

}
