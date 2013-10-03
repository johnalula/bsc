<?php
App::uses('AppModel', 'Model');
/**
 * Perspective Model
 *
 * @property Objective $Objective
 */
class Perspective extends AppModel {
  var $displayField='perspective_name';
  public $PERSPECTIV_MAX = 40;
  public $PERSPECTIV_MIN = 20;
  public $validate =array(
               'perspective_name'=>array(
                   'minLength'=>array(
                        'rule'=>'notEmpty',
                        'message'=>'Field can not be empty'),
                      
                   'isUnique'=>array(
                       'rule'=>'isUnique',
                        'message'=>'The Field is alredy registerd')),
               'perspective_weight'=>array(
                  'minLength'=>array(
                        'rule'=>'notEmpty',
                        'message'=>'You must fill in the perspective weight'),                      
                    'custom'=>array(
                        'rule'=>array('custom','/^[0-9][0-9,.]*$/'),
                        'message'=>'The perspective weight shuld only contains number'),
                      
                     ),
               'perspective_description'=>array(
                   'minLength'=>array(
                        'rule'=>'notEmpty',
                        'message'=>'Field can not be empty'))
		
                            );
	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Objective' => array(
			'className' => 'Objective',
			'foreignKey' => 'perspective_id',
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
 public function calculateTheWeight($wigh){
      $allWeights=$this->findAllByOrgId(1);
      $total=0;
      foreach($allWeights as $weighta):
      $total=$total+$weighta['Perspective']['perspective_weight'];
      endforeach;
    if(($total+$wigh)<=100) return true;
     else return false;
     
      }
public function calculateTheEditWeight($wigh,$id){
        $allWeights=$this->findAllByOrgId(1);
      $total=0;
      foreach($allWeights as $weighta):
	if($weighta['Perspective']['id'] != $id){
      	$total=$total+$weighta['Perspective']['perspective_weight'];
	}
      endforeach;
    if(($total+$wigh)<=100) return true;
     else return false;
     
      }
  
}
