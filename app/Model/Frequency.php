<?php
App::uses('AppModel', 'Model');
/**
 * Frequency Model
 *
 * @property Measure $Measure
 * @property Period $Period
 */
class Frequency extends AppModel {
   var $displayField='frequency_name';

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
        public $validate =array(
               'frequency_name'=>array(
                   'minLength'=>array(
                        'rule'=>'notEmpty',
                        'message'=>'Field can not be empty'),
                       
                   'isUnique'=>array(
                       'rule'=>'isUnique',
                        'message'=>'Field is alredy registerd'),
                    'custom'=>array(
                        'rule'=>array('custom','/^[a-zA-Z][a-zA-Z ]*$/'),
                        'message'=>'Field can not contain numberic values!')),
               'number_of_days'=>array(
                  'minLength'=>array(
                        'rule'=>'notEmpty',
                        'message'=>'Field can not be empty'),
                       
                    'custom'=>array(
                        'rule'=>array('custom','/^[0-9][0-9,.]*$/'),
                        'message'=>'Field can not contain non numeric values')),
                      
                     
		
                      
		);
	public $hasMany = array(
		'Measure' => array(
			'className' => 'Measure',
			'foreignKey' => 'frequency_id',
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
		'Period' => array(
			'className' => 'Period',
			'foreignKey' => 'frequency_id',
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
