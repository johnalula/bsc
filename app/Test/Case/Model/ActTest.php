<?php
App::uses('Act', 'Model');

/**
 * Act Test Case
 *
 */
class ActTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.act',
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
		'app.themes_objective'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Act = ClassRegistry::init('Act');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Act);

		parent::tearDown();
	}

}
