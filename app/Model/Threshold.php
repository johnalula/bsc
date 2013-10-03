<?php
App::uses('AppModel', 'Model');
/**
 * Threshold Model
 *
 * @property Measure $Measure
 */
class Threshold extends AppModel {

 public $validate = array(
		'performance'=>array(
                   'minLength'=>array(
                        'rule'=>'notEmpty',
                        'message'=>'You must fill in the performance'),                       
                    ),
		'lower' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				'message' => 'Fill the lower value numeric',
				'allowEmpty' => false),
			'isUnique'=>array(
                       		'rule'=>'isUnique',
                        	'message'=>'Lower value is alredy registerd'),
				
			
		),
		'upper' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				'message' => 'Fill the upper value numeric',
				'allowEmpty' => false),
			'isUnique'=>array(
                       		'rule'=>'isUnique',
                        	'message'=>'Upper value is alredy registerd'),
		),
		'background'=>array(
                   'minLength'=>array(
                        'rule'=>'notEmpty',
                        'message'=>'You must select in the background'),                       
                    ),

);
	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Measure' => array(
			'className' => 'Measure',
			'foreignKey' => 'threshold_id',
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

}
