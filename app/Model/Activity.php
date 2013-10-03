<?php
App::uses('AppModel', 'Model');
/**
 * Activity Model
 *
 * @property Perspective $Perspective
 * @property Activitievaluation $Activitievaluation
 * @property TiesUser $TiesUser
 */
class Activity extends AppModel {
var $displayField='activity';
/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'activity' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'You missed to writete the activity. Please try again',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'ways_of_evaluation' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Ways of evaluation mean, how could the evaluation evaluated for its acomplisment. So it is nessesry',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'precondition_from_office' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Preconditions are the requiremt from the office which helps the actor to acomplish this activity. Pleas list them',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'weight' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				'message' => 'weight has numeric value',
				'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'perspective_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				'message' => 'Select the perspective first',
				'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'objective_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				'message' => 'Select the objective first',
				'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
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
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Perspective' => array(
			'className' => 'Perspective',
			'foreignKey' => 'perspective_id',
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
		'Period' => array(
			'className' => 'Period',
			'foreignKey' => 'period_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Activitievaluation' => array(
			'className' => 'Activitievaluation',
			'foreignKey' => 'activity_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),

		'Sub' => array(
			'className' => 'Sub',
			'foreignKey' => 'activity_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);


/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	
}
