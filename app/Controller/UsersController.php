<?php

class UsersController extends AppController {
 
	 function getByOffice() {
		$office_id = $this->request->data['Behaveiorevaluation']['office_id'];
 
		$users = $this->User->find('list', array(
			'conditions' => array('User.office_id' => $office_id),
			'recursive' => -1
			));
 
		$this->set('users',$users);
		$this->layout = 'ajax';
	}
	function getByOfficer() {
		$office_id = $this->request->data['Report']['office_id'];
 
		$users = $this->User->find('list', array(
			'conditions' => array('User.office_id' => $office_id),
			'recursive' => -1
			));
 
		$this->set('users',$users);
		$this->layout = 'ajax';
	}
}
