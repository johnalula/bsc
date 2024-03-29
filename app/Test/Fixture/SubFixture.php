<?php
/**
 * SubFixture
 *
 */
class SubFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'year' => array('type' => 'text', 'null' => false, 'default' => null, 'length' => 4),
		'activity_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'period_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'sub_activity' => array('type' => 'integer', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'activity_id' => array('column' => 'activity_id', 'unique' => 0),
			'period_id' => array('column' => 'period_id', 'unique' => 0)
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
			'year' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'activity_id' => 1,
			'period_id' => 1,
			'sub_activity' => 1
		),
	);

}
