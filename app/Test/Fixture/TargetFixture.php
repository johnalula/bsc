<?php
/**
 * TargetFixture
 *
 */
class TargetFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'target_year' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'target_baseline' => array('type' => 'float', 'null' => true, 'default' => null, 'length' => 10),
		'target_value' => array('type' => 'float', 'null' => true, 'default' => null, 'length' => 10),
		'measure_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'measure_id' => array('column' => 'measure_id', 'unique' => 0)
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
			'created' => '2013-03-01 16:10:14',
			'modified' => '2013-03-01 16:10:14',
			'target_year' => '2013-03-01 16:10:14',
			'target_baseline' => 1,
			'target_value' => 1,
			'measure_id' => 1
		),
	);

}
