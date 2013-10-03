<?php
App::uses('AppModel', 'Model');
/**
 * Objective Model
 *
 * @property Perspective $Perspective
 * @property Organization $Organization
 * @property Measure $Measure
 * @property Initiative $Initiative
 * @property Office $Office
 */
class Objective extends AppModel {

var $displayField='objective_name';
public $validate =array(
               'objective_name'=>array(
                   'minLength'=>array(
                        'rule'=>'notEmpty',
                        'message'=>'You must fill in the objective name'),
                       
                   'isUnique'=>array(
                       'rule'=>'isUnique',
                        'message'=>'The objective is alredy registerd'),
                    ),
               'objective_description'=>array(
                   'minLength'=>array(
                        'rule'=>'notEmpty',
                        'message'=>'You must fill in the objective scope'),                       
                    ),
               'objective_weight'=>array(
                  'minLength'=>array(
                        'rule'=>'notEmpty',
                        'message'=>'You must fill in the objective weight'),
                       
                    'custom'=>array(
                        'rule'=>array('custom','/^[0-9][0-9,.]*$/'),
                        'message'=>'The objective weight shuld only contains number'),
                      
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
		'Organization' => array(
			'className' => 'Organization',
			'foreignKey' => 'organization_id',
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
		'Measure' => array(
			'className' => 'Measure',
			'foreignKey' => 'objective_id',
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
		'Initiative' => array(
			'className' => 'Initiative',
			'joinTable' => 'initiatives_objectives',
			'foreignKey' => 'objective_id',
			'associationForeignKey' => 'initiative_id',
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
                'Theme' => array(
			'className' => 'Theme',
			'joinTable' => 'themes_objectives',
			'foreignKey' => 'objective_id',
			'associationForeignKey' => 'theme_id',
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
			'joinTable' => 'objectives_offices',
			'foreignKey' => 'objective_id',
			'associationForeignKey' => 'office_id',
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
   
 /*public function getPerspectiveWeight(){
 	$weights = $this->query('select perspective_weight from perspectives where id = 40 ;'); 
    $whet=0;
     foreach
}*/

 public function findPerspectiveWeight($id){
    $weights =$this->query('SELECT perspective_weight FROM perspectives where id = '.$id.';');
	 $weight=0;
	foreach($weights as $weiht):
		$weight=$weiht['perspectives']['perspective_weight']; 
        endforeach;
   return $weight;
}
 public function isTheTotalWeightOk($newWeight,$perpectiveweight,$id){
        $allWeights=$this->findAllByPerspectiveId($id);
      $total=0;
      foreach($allWeights as $weighta):
      $total=$total+$weighta['Objective']['objective_weight'];
      endforeach;
    if(($total+$newWeight)<=$perpectiveweight) return true;
     else return false;
     
      }
 public function isTheTotalWeightEditOk($newWeight,$perpectiveweight,$pid,$id){
        $allWeights=$this->findAllByPerspectiveId($pid);
      $total=0;
      foreach($allWeights as $weighta):
	if($weighta['Objective']['id'] != $id){
      $total=$total+$weighta['Objective']['objective_weight'];
	}
      endforeach;
    if(($total+$newWeight)<=$perpectiveweight) return true;
     else return false;
     
      }

}
