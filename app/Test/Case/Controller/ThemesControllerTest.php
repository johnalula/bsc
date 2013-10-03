<?php
App::uses('ThemesController', 'Controller');

/**
 * ThemesController Test Case
 *
 */
class ThemesControllerTest extends ControllerTestCase {

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
 * testIndex method
 *
 * @return void
 */
	public function testIndex() {
	}

/**
 * testView method
 *
 * @return void
 */
	public function testView() {
	}

/**
 * testAdd method
 *
 * @return void
 */
	public function testAdd() {
	}

/**
 * testEdit method
 *
 * @return void
 */
	public function testEdit() {
	}

/**
 * testDelete method
 *
 * @return void
 */
	public function testDelete() {
	}

}
