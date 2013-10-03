<?php
App::uses('Theme', 'Model');

/**
 * Theme Test Case
 *
 */
class ThemeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.theme',
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
		'app.subactivity',
		'app.target',
		'app.initiative',
		'app.project',
		'app.projects_task',
		'app.initiatives_objective',
		'app.themes_objective'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Theme = ClassRegistry::init('Theme');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Theme);

		parent::tearDown();
	}

}
