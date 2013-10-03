<?php
App::uses('Behaveiorevaluation', 'Model');

/**
 * Behaveiorevaluation Test Case
 *
 */
class BehaveiorevaluationTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.behaveiorevaluation',
		'app.office',
		'app.organization',
		'app.objective',
		'app.perspective',
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
		'app.objectives_office'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Behaveiorevaluation = ClassRegistry::init('Behaveiorevaluation');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Behaveiorevaluation);

		parent::tearDown();
	}

}
