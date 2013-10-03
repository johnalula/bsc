<?php 
App::uses('AppModel', 'Model');
 class Report extends AppModel{
  var $useTable=false;
  var $name='Report';
 public $hasMany =array(
	);
  public $office_id;
  public $frequency_id;
  public $target_id;
  public $period_id;
  public $unit_id;
  public $user_id;
  public $measure_id;
  public $objective_id;
  public $perspective_id;
  public $theme_id;
  public $year;
  public $validate = array(
		'measure_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				'message' => 'Select the measure first',
				'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'office_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				'message' => 'Select the measure first',
				'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'user_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				'message' => 'Select the measure first',
				'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'year_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				'message' => 'Select the measure first',
				'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'period_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				'message' => 'Select the measure first',
				'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);
  public $belongsTo = array(
                'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Measure' => array(
			'className' => 'Measure',
			'foreignKey' => 'measure_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Objective' => array(
			'className' => 'Objective',
			'foreignKey' => 'objective_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Perspective' => array(
			'className' => 'Perspective',
			'foreignKey' => 'perspective_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Theme' => array(
			'className' => 'Theme',
			'foreignKey' => 'theme_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Office' => array(
			'className' => 'Office',
			'foreignKey' => 'office_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Frequency' => array(
			'className' => 'Frequency',
			'foreignKey' => 'frequncy_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
                'Unit' => array(
			'className' => 'Unit',
			'foreignKey' => 'unit_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
             'Target' => array(
			'className' => 'Target',
			'foreignKey' => 'target_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
             'Period' => array(
			'className' => 'Period',
			'foreignKey' => 'period_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

}
