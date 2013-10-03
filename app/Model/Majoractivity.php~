<?php
App::uses('AppModel', 'Model');
/**
 * Majoractivity Model
 *
 * @property Measure $Measure
 */
class Majoractivity extends AppModel {
   var $displayField='activity_name';

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */    
        public $validate =array(
               'activity_name'=>array(
                   'minLength'=>array(
                        'rule'=>'notEmpty',
                        'message'=>'Field can not be empty'),
                       
                   'isUnique'=>array(
                       'rule'=>'isUnique',
                        'message'=>'The field is alredy registerd')),
                    
               'activity_weight'=>array(
                  'minLength'=>array(
                        'rule'=>'notEmpty',
                        'message'=>'You must fill in the Activity weight'),                      
                    'custom'=>array(
                        'rule'=>array('custom','/^[0-9][0-9,.]*$/'),
                        'message'=>'The Activity weight shuld only contains number')),
                'baseline'=>array(
                  'minLength'=>array(
                        'rule'=>'notEmpty',
                        'message'=>'You must fill in the Activity baseline'),                      
                    'custom'=>array(
                        'rule'=>array('custom','/^[0-9][0-9,.]*$/'),
                        'message'=>'The Activity baseline shuld only contains number')),
                'target'=>array(
                  'minLength'=>array(
                        'rule'=>'notEmpty',
                        'message'=>'You must fill in the Activity target'),                      
                    'custom'=>array(
                        'rule'=>array('custom','/^[0-9][0-9,.]*$/'),
                        'message'=>'The Activity target shuld only contains number')),
                'in_quntity'=>array(
                  'minLength'=>array(
                        'rule'=>'notEmpty',
                        'message'=>'You must fill in the Activity quantity'),                      
                    'custom'=>array(
                        'rule'=>array('custom','/^[0-9][0-9,.]*$/'),
                        'message'=>'The Activity quantity shuld only contains number'),
                      
                     ),
              'in_quality'=>array(
                  'minLength'=>array(
                        'rule'=>'notEmpty',
                        'message'=>'You must fill in the Activity quality'),                      
                    'custom'=>array(
                        'rule'=>array('custom','/^[0-9][0-9,.]*$/'),
                        'message'=>'The Activity quality shuld only contains number'),
                      
                     ),
              'in_cost'=>array(
                  'minLength'=>array(
                        'rule'=>'notEmpty',
                        'message'=>'You must fill in the Activity cost'),                      
                    'custom'=>array(
                        'rule'=>array('custom','/^[0-9][0-9,.]*$/'),
                        'message'=>'The Activity cost shuld only contains number'),
                      
                     ),
              'in_time'=>array(
                  'minLength'=>array(
                        'rule'=>'notEmpty',
                        'message'=>'You must fill in the Activity time'),                      
                    'custom'=>array(
                        'rule'=>array('custom','/^[0-9][0-9,.]*$/'),
                        'message'=>'The Activity time shuld only contains number'),
                      
                     ),
              'acomplishment_in_quantity'=>array(
                  'minLength'=>array(
                        'rule'=>'notEmpty',
                        'message'=>'You must fill in the Activity quantity'),                      
                    'custom'=>array(
                        'rule'=>array('custom','/^[0-9][0-9,.]*$/'),
                        'message'=>'The Activity quantity shuld only contains number'),
                      
                     ),
              'ac_in_quality'=>array(
                  'minLength'=>array(
                        'rule'=>'notEmpty',
                        'message'=>'You must fill in the Activity quality'),                      
                    'custom'=>array(
                        'rule'=>array('custom','/^[0-9][0-9,.]*$/'),
                        'message'=>'The Activity quality shuld only contains number'),
                      
                     ),
              'ac_in_cost'=>array(
                  'minLength'=>array(
                        'rule'=>'notEmpty',
                        'message'=>'You must fill in the Activity cost'),                      
                    'custom'=>array(
                        'rule'=>array('custom','/^[0-9][0-9,.]*$/'),
                        'message'=>'The Activity cost shuld only contains number'),
                      
                     ),
              'ac_in_time'=>array(
                  'minLength'=>array(
                        'rule'=>'notEmpty',
                        'message'=>'You must fill in the Activity time'),                      
                    'custom'=>array(
                        'rule'=>array('custom','/^[0-9][0-9,.]*$/'),
                        'message'=>'The Activity time shuld only contains number'),
                      
                     ),
                      
                     );
	public $belongsTo = array(
		'Period' => array(
			'className' => 'Period',
			'foreignKey' => 'period_id',
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
		)
	);  
     public $hasAndBelongsToMany = array(
		'User' => array(
			'className' => 'User',
			'joinTable' => 'majoractivities_users',
			'foreignKey' => 'activity_id',
			'associationForeignKey' => 'user_id',
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
             
	);
         var $hasMany = array( 
            'Subactivity' => array(
			'className' => 'Subactivity',
			'foreignKey' => 'majoractivity_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		));
public function isTotalActivityWeigtAtOfficeOk($newWeight,$mid,$oid){
   $allWeights=$this->findAllByMeasureIdAndOfficeId($mid,$oid);
      $total=0;
      foreach($allWeights as $weighta):
      $total=$total+$weighta['Majoractivity']['activity_weight'];
      endforeach;
    if(($total+$newWeight)<=100) return true;
     else return false; 
}
public function isTotalActivityWeigtAtOfficeEditOk($newWeight,$mid,$oid,$id){
   $allWeights=$this->findAllByMeasureIdAndOfficeId($mid,$oid);
      $total=0;
      foreach($allWeights as $weighta):
	if($weighta['Majoractivity']['id'] != $id){
      $total=$total+$weighta['Majoractivity']['activity_weight'];
}
      endforeach;
    if(($total+$newWeight)<=100) return true;
     else return false; 
}
public function findMeasureWeiht($id){
	 $weights =$this->query('SELECT measure_weight FROM measures where id = '.$id.';');
	 $weight=0;
	foreach($weights as $weiht):
		$weight=$weiht['measures']['measure_weight']; 
        endforeach;
   return $weight;  
}
    public function totalWeight($weit,$messuer){
        $actWeits=$this->findAllByMeasureId($messuer);
        $weiht=0;
        foreach($actWeits as $actWeit):
           $weiht = $weiht + $actWeit['Majoractivitiy']['weight']; 
          endforeach; 
          $weiht=$weiht + $weit;
       return $weiht;
   }
  public function findAccomplishment($id,$acqun,$acqul,$accost,$actime){
     $activitys = $this->findAllById($id);
     $acomplishment=0;
      foreach($activitys as $activity):
        $qn=($acqun*100)/$activity['Majoractivity']['in_quntity'];
        $ql=($acqul*100)/$activity['Majoractivity']['in_quality'];
        $co=($accost*100)/$activity['Majoractivity']['in_cost'];
	$ti=($actime*100)/$activity['Majoractivity']['in_time'];
 	 $acomplishment=($qn+$ql+$co+$ti)/4;
	endforeach;
      return $acomplishment;
 }
}
