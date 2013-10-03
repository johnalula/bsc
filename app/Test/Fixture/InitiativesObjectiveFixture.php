<?php
/**
 * InitiativesObjectiveFixture
 *
 */
class InitiativesObjectiveFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'initiative_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'objective_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'indexes' => array(
			'initiative_id' => array('column' => array('initiative_id', 'objective_id'), 'unique' => 1),
			'objective_id' => array('column' => 'objective_id', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'initiative_id' => 1,
			'objective_id' => 1
		),
	);

}
