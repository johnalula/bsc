<?php
/**
 * ActivitievaluationFixture
 *
 */
class ActivitievaluationFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'activity_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'rank' => array('type' => 'integer', 'null' => false, 'default' => null),
		'in_quality' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'in_time' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'in_quntity' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'activity_id' => array('column' => 'activity_id', 'unique' => 0)
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
			'activity_id' => 1,
			'rank' => 1,
			'in_quality' => 'Lorem ipsum dolor sit amet',
			'in_time' => 'Lorem ipsum dolor sit amet',
			'in_quntity' => 'Lorem ipsum dolor sit amet'
		),
	);

}
