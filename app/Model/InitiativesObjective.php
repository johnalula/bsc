<?php
App::uses('AppModel', 'Model');
/**
 * InitiativesObjective Model
 *
 * @property Initiative $Initiative
 * @property Objective $Objective
 */
class InitiativesObjective extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Initiative' => array(
			'className' => 'Initiative',
			'foreignKey' => 'initiative_id',
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
}
