<?php
App::uses('AppModel', 'Model');
/**
 * Initiative Model
 *
 * @property Project $Project
 * @property Objective $Objective
 */
class Initiative extends AppModel {
   var $displayField='initiative_name';

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
       public $validate =array(
               'initiative_name'=>array(
                   'minLength'=>array(
                        'rule'=>'notEmpty',
                        'message'=>'Field can not be empty'),
                       
                   'isUnique'=>array(
                       'rule'=>'isUnique',
                        'message'=>'The Field is alredy registerd')),
               'initiative_description'=>array(
                   'minLength'=>array(
                        'rule'=>'notEmpty',
                        'message'=>'Field can not be empty')),
		'initiative_importance'=>array(
                   'minLength'=>array(
                        'rule'=>'notEmpty',
                        'message'=>'Field can not be empty')),
		'deliverable'=>array(
                   'minLength'=>array(
                        'rule'=>'notEmpty',
                        'message'=>'Field can not be empty')),
		'implimenter'=>array(
                   'minLength'=>array(
                        'rule'=>'notEmpty',
                        'message'=>'Field can not be empty')),
		'project_owner'=>array(
                   'minLength'=>array(
                        'rule'=>'notEmpty',
                        'message'=>'Field can not be empty')),
		'Objective'=>array(
                   'minLength'=>array(
                        'rule'=>'notEmpty',
                        'message'=>'Field can not be empty')),
               'budget'=>array(
                  'minLength'=>array(
                        'rule'=>'notEmpty',
                        'message'=>'Field can not be empty'),
                       
                    'custom'=>array(
                        'rule'=>array('custom','/^[0-9][0-9,.]*$/'),
                        'message'=>'Field can not contain non numeric values'))
                      
                
                      
		);
	public $hasMany = array(
		'Project' => array(
			'className' => 'Project',
			'foreignKey' => 'initiative_id',
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
	public $hasAndBelongsToMany = array(
		'Objective' => array(
			'className' => 'Objective',
			'joinTable' => 'initiatives_objectives',
			'foreignKey' => 'initiative_id',
			'associationForeignKey' => 'objective_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		),
             'Office' => array(
			'className' => 'Implimenter',
			'joinTable' => 'initiatives_implimenters',
			'foreignKey' => 'initiative_id',
			'associationForeignKey' => 'implimenter_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		),
           'Office' => array(
			'className' => 'Office',
			'joinTable' => 'initiatives_owners',
			'foreignKey' => 'initiative_id',
			'associationForeignKey' => 'owner_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		)
	);
    

}
