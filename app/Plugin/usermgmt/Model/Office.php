<?php

App::uses('UserMgmtAppModel', 'Usermgmt.Model');
App::uses('CakeEmail', 'Network/Email');

class Office extends UserMgmtAppModel{
  var $hasMany = array('Usermgmt.User');
//var $hasMany = array('Usermgmt.UserGroupPermission');
public function getOffices() {
		$result=$this->find("all", array("order"=>"id"));
		
		$offices=array();
		foreach ($result as $row) {
			//$offices[$i]=$row['Office']['name'];
			
			$offices[$row['Office']['id']]=$row['Office']['office_name'];
		
		}
		return $offices;
	}
public function getOfficesForRegistration() {
		$this->unbindModel(array('hasMany' => array('UserGroupPermission')));
		$result=$this->find("all", array("order"=>"id", "conditions"=>array('allowRegistration'=>1)));
		$user_offices=array();
		$user_offices[0]='Select';
		foreach ($result as $row) {
			$user_offices[$row['Office']['id']]=$row['Office']['office_name'];
		}
		return $user_offices;
	}
}
