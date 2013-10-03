<?php
App::uses('Activityevaluationvalue', 'Model');

/**
 * Activityevaluationvalue Test Case
 *
 */
class ActivityevaluationvalueTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.activityevaluationvalue',
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
		$this->Activityevaluationvalue = ClassRegistry::init('Activityevaluationvalue');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Activityevaluationvalue);

		parent::tearDown();
	}

}
