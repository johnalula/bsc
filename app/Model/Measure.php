<?php
App::uses('AppModel', 'Model');
/**
 * Measure Model
 *
 * @property Objective $Objective
 * @property Unit $Unit
 * @property Frequency $Frequency
 * @property Threshold $Threshold
 * @property Majoractivity $Majoractivity
 * @property Target $Target
 */
class Measure extends AppModel {
    var $displayField='measure_name';

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
        public $validate =array(
               'measure_name'=>array(
                   'minLength'=>array(
                        'rule'=>'notEmpty',
                        'message'=>'Field can not be empty'),
                       
                   'isUnique'=>array(
                       'rule'=>'isUnique',
                        'message'=>'The field is alredy registerd')),
                    
               'measure_weight'=>array(
                  'minLength'=>array(
                        'rule'=>'notEmpty',
                        'message'=>'Field can not be empty'),
                       
                    'custom'=>array(
                        'rule'=>array('custom','/^[0-9][0-9,.]*$/'),
                        'message'=>'Field can not contain non numeric values')),
		'baseline'=>array(
                  'minLength'=>array(
                        'rule'=>'notEmpty',
                        'message'=>'Field can not be empty'),
                       
                    'custom'=>array(
                        'rule'=>array('custom','/^[0-9][0-9,.]*$/'),
                        'message'=>'Field can not contain non numeric values')),
		'measure_type'=>array(           
                    	'minLength'=>array(
                        'rule'=>'notEmpty',
                        'message'=>'Field can not be empty')),
		'formula'=>array(           
                    	'minLength'=>array(
                        'rule'=>'notEmpty',
                        'message'=>'Field can not be empty')),              
		'description'=>array(           
                    	'minLength'=>array(
                        'rule'=>'notEmpty',
                        'message'=>'Field can not be empty'))
		/*'polarity'=>array(           
                    	'minLength'=>array(
                        'rule'=>'notEmpty',
                        'message'=>'Field can not be empty')), 
		'data_source'=>array(           
                    	'minLength'=>array(
                        'rule'=>'notEmpty',
                        'message'=>'Field can not be empty')), 
		'data_quality'=>array(           
                    	'minLength'=>array(
                        'rule'=>'notEmpty',
                        'message'=>'Field can not be empty')), 
		'data_collector'=>array(           
                    	'minLength'=>array(
                        'rule'=>'notEmpty',
                        'message'=>'Field can not be empty')), 
		'rationalie'=>array(           
                    	'minLength'=>array(
                        'rule'=>'notEmpty',
                        'message'=>'Field can not be empty')), 
		'formula'=>array(           
                    	'minLength'=>array(
                        'rule'=>'notEmpty',
                        'message'=>'Field can not be empty')),              
		'description'=>array(           
                    	'minLength'=>array(
                        'rule'=>'notEmpty',
                        'message'=>'Field can not be empty'))*/
                      
		);
	public $belongsTo = array(
		'Objective' => array(
			'className' => 'Objective',
			'foreignKey' => 'objective_id',
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
		'Frequency' => array(
			'className' => 'Frequency',
			'foreignKey' => 'frequency_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Threshold' => array(
			'className' => 'Threshold',
			'foreignKey' => 'threshold_id',
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
		'Majoractivity' => array(
			'className' => 'Majoractivity',
			'foreignKey' => 'measure_id',
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
		'Activity' => array(
			'className' => 'Activity',
			'foreignKey' => 'measure_id',
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
		'Target' => array(
			'className' => 'Target',
			'foreignKey' => 'measure_id',
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
     public function findObjectiveWeight($id){
	 $weights =$this->query('SELECT objective_weight FROM objectives where id = '.$id.';');
	 $weight=0;
	foreach($weights as $weiht):
		$weight=$weiht['objectives']['objective_weight']; 
        endforeach;
   return $weight;    
	 }
public function isTheTotalMeasureWeightOk($newWeight,$objectiveweight,$id){
        $allWeights=$this->findAllByObjectiveId($id);
      $total=0;
      foreach($allWeights as $weighta):
      $total=$total+$weighta['Measure']['measure_weight'];
      endforeach;
    if(($total+$newWeight)<=$objectiveweight) return true;
     else return false;
}
public function isTheTotalMeasureWeightEditOk($newWeight,$objectiveweight,$mid,$id){
        $allWeights=$this->findAllByObjectiveId($mid);
      $total=0;
      foreach($allWeights as $weighta):
	if($weighta['Measure']['id'] != $id){
      $total=$total+$weighta['Measure']['measure_weight'];
	}
      endforeach;
    if(($total+$newWeight)<=$objectiveweight) return true;
     else return false;
}     
      
     public function calculateWeight($weht,$objid){
           $meWeits = $this->findAllByObjectiveId($objid); 
           $weiht=0;
           foreach($meWeits as $meWeit):
              $weiht = $weiht + $meWeit['Objective']['weight']; 
           endforeach;
           $weiht = $weiht + $weht;
       return $weiht;
     }
}
