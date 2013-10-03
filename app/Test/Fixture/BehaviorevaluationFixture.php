<?php
/**
 * BehaviorevaluationFixture
 *
 */
class BehaviorevaluationFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'behaviorevaluationcriteria_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'evaluationtype_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'evaluationrank_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'remark' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'period_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'evaluator_id' => array('column' => 'user_id', 'unique' => 0),
			'criteria_id' => array('column' => 'behaviorevaluationcriteria_id', 'unique' => 0),
			'rank_id' => array('column' => 'evaluationrank_id', 'unique' => 0),
			'period_id' => array('column' => 'period_id', 'unique' => 0),
			'evaluationtype_id' => array('column' => 'evaluationtype_id', 'unique' => 0)
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
			'user_id' => 1,
			'behaviorevaluationcriteria_id' => 1,
			'evaluationtype_id' => 1,
			'evaluationrank_id' => 1,
			'remark' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'period_id' => 1
		),
	);

}
