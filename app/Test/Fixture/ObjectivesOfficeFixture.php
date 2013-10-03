<?php
/**
 * ObjectivesOfficeFixture
 *
 */
class ObjectivesOfficeFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'office_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'objective_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'indexes' => array(
			'office_id' => array('column' => array('office_id', 'objective_id'), 'unique' => 1),
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
			'office_id' => 1,
			'objective_id' => 1
		),
	);

}
