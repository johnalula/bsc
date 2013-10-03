<?php
App::uses('AppModel', 'Model');
/**
 * Period Model
 *
 * @property Frequency $Frequency
 */
class Period extends AppModel {
var $displayField='period_name';

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Frequency' => array(
			'className' => 'Frequency',
			'foreignKey' => 'frequency_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
