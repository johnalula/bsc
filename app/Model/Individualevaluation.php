<?php 
App::uses('AppModel', 'Model');
 class Individualevaluation extends AppModel{
  var $useTable=false;
  var $name='Individualevaluation';
  public $activity_id;
  public $activevalution_id;
	public $belongsTo = array(
                'Activity' => array(
			'className' => 'Activity',
			'foreignKey' => 'activity_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Activitievaluation' => array(
			'className' => 'Activitievaluation',
			'foreignKey' => 'activevalution_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		));
}
