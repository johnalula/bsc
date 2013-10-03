<?php
App::uses('Perspective', 'Model');

/**
 * Perspective Test Case
 *
 */
class PerspectiveTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.perspective',
		'app.objective'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Perspective = ClassRegistry::init('Perspective');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Perspective);

		parent::tearDown();
	}

}
