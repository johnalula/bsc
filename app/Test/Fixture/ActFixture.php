<?php
/**
 * ActFixture
 *
 */
class ActFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'perspective_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'activity' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'weight' => array('type' => 'float', 'null' => false, 'default' => null, 'length' => 10),
		'ways_of_evaluation' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'precondition_from_office' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'perspective_id' => array('column' => 'perspective_id', 'unique' => 0)
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
			'id' => 1,
			'perspective_id' => 1,
			'activity' => 'Lorem ipsum dolor sit amet',
			'weight' => 1,
			'ways_of_evaluation' => 'Lorem ipsum dolor sit amet',
			'precondition_from_office' => 'Lorem ipsum dolor sit amet'
		),
	);

}
