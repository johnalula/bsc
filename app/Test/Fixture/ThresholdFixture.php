<?php
/**
 * ThresholdFixture
 *
 */
class ThresholdFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'threshold_name' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 200, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'lower' => array('type' => 'float', 'null' => true, 'default' => null, 'length' => 10),
		'upper' => array('type' => 'float', 'null' => true, 'default' => null, 'length' => 10),
		'colour' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
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
			'created' => '2013-03-01 16:10:31',
			'modified' => '2013-03-01 16:10:31',
			'threshold_name' => 'Lorem ipsum dolor sit amet',
			'lower' => 1,
			'upper' => 1,
			'colour' => 'Lorem ipsum dolor '
		),
	);

}
