<?php
App::uses('UserMgmtAppController', 'Usermgmt.Controller');
class OfficesController extends UserMgmtAppController{
   public $uses = array('Usermgmt.Office', 'Usermgmt.User');

  public function index(){
         $offices=$this->Office->find('all', array('order'=>'Office.id'));
         $this->set('offices', $offices);
  }
  public function addOffice(){
         if (!empty($this->data)) {
	  $this->Office->create();
	  if ($this->Office->save($this->data)) {
	  $this->Session->setFlash(__('The Office has been saved', true));
	  $this->redirect('/addOffice');
	 } else {
	   $this->Session->setFlash(__('The Office could not be saved. Please, try again.', true));
	    }
	}
  }
  public function editOffice($id = null){
     if (!$id && empty($this->data)) {
		$this->Session->setFlash(__('Invalid Office', true));
		$this->redirect('/index');
		}
	 if (!empty($this->data)) {
		if ($this->Office->save($this->data)) {
		$this->Session->setFlash(__('The Office has been saved', true));
		$this->redirect('/index');
		} else {
		$this->Session->setFlash(__('The Office could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Office->read(null, $id);
		}
  }
  public function deleteOffice($id = null){
      if (!$id) {
	$this->Session->setFlash(__('Invalid id for Office', true));
	$this->redirect('/index');
		}
	if ($this->Office->delete($id)) {
	$this->Session->setFlash(__('Office deleted', true));
	$this->redirect('/index');
		}
  } 
}
?>
