<?php
App::uses('Office', 'Model');

/**
 * Office Test Case
 *
 */
class OfficeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.office',
		'app.organization',
		'app.objective',
		'app.objectives_office'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Office = ClassRegistry::init('Office');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Office);

		parent::tearDown();
	}

}
