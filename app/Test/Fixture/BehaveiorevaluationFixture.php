<?php
/**
 * BehaveiorevaluationFixture
 *
 */
class BehaveiorevaluationFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'office_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'self' => array('type' => 'integer', 'null' => false, 'default' => null),
		'pear' => array('type' => 'integer', 'null' => false, 'default' => null),
		'head' => array('type' => 'integer', 'null' => false, 'default' => null),
		'student' => array('type' => 'integer', 'null' => false, 'default' => null),
		'period_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'office_id' => array('column' => 'office_id', 'unique' => 0),
			'period_id' => array('column' => 'period_id', 'unique' => 0),
			'user_id' => array('column' => 'user_id', 'unique' => 0)
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
			'office_id' => 1,
			'user_id' => 1,
			'self' => 1,
			'pear' => 1,
			'head' => 1,
			'student' => 1,
			'period_id' => 1
		),
	);

}
