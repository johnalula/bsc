<?php
App::uses('Behaviorevaluation', 'Model');

/**
 * Behaviorevaluation Test Case
 *
 */
class BehaviorevaluationTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.behaviorevaluation',
		'app.user',
		'app.behaviorevaluationcriteria',
		'app.evaluationtype',
		'app.evaluationrank',
		'app.period',
		'app.frequency',
		'app.measure',
		'app.objective',
		'app.perspective',
		'app.organization',
		'app.office',
		'app.objectives_office',
		'app.initiative',
		'app.project',
		'app.projects_task',
		'app.initiatives_objective',
		'app.initiatives_owner',
		'app.theme',
		'app.themes_objective',
		'app.unit',
		'app.threshold',
		'app.majoractivity',
		'app.subactivity',
		'app.majoractivities_user',
		'app.target'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Behaviorevaluation = ClassRegistry::init('Behaviorevaluation');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Behaviorevaluation);

		parent::tearDown();
	}

}
