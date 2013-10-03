<?php
class SubactivitiesController extends AppController {

	var $name = 'Subactivities';
	var $helpers = array('Html', 'Form', 'Session');
        var $paginate = array(
              'limit' => 7);
	function index() {
		$this->Subactivity->recursive = 0;
		$this->set('subactivities', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Subactivity.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('subactivity', $this->Subactivity->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Subactivity->create();                     
                    $this->request->data['Subactivity']['user_id']=$this->UserAuth->getUserId();
                    $this->request->data['Subactivity']['office_id']=$this->UserAuth->getUserOfficeId();
			if ($this->Subactivity->save($this->data)) {
				$this->Session->setFlash(__('The Subactivity has been saved'.$activeWeight, true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Subactivity could not be saved. Please, try again.', true));
			}
                     
		}
		$majoractivities = $this->Subactivity->Majoractivity->find('list');
               $years=array();
           for($i=6;$i<11;$i++){
              $years[date('Y')-$i]=date('Y')-$i;
             }
  	$year = $years;
                $periods = $this->Subactivity->Period->find('list');
		$this->set(compact('majoractivities','periods','year'));
	}
        
        function approve(){
           $this->Subactivity->recursive = 0;
		$this->set('subactivities', $this->paginate());
		$this->Subactivity->Majoractivity->find('all',
                 array(
                  'fields' => array(
                      'Majoractivity.id',
                       'Majoractivity.activity_name'
                       ),
                  'order' => 'Majoractivity.id DESC',
                  'recursive' => 0
                  ));

              $this->set('majoractivities');

        }
        function makeAproveDisAprove($id = null, $is_approved=0) {
		if (!empty($id)) {
			$subactivity=array();
			$subactivity['Subactivity']['id']=$id;
			$subactivity['Subactivity']['is_approved']=($is_approved) ? 1 : 0;
			$this->Subactivity->save($subactivity,false);
			if($is_approved) {
				$this->Session->setFlash(__('Sub Activity is successfully approved'));
			} else {
				$this->Session->setFlash(__('Sub Activity is successfully dis approver'));
			}
		}
		$this->redirect('approve');
	
        }
        function remark($id = null){
                if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Subactivity', true));
			$this->redirect(array('action'=>'index'));
		}
               if (!empty($this->data)) {
			$subactivity=array();
			$subactivity['Subactivity']['id']=$id;
			$subactivity['Subactivity']['remark']=$this->request->data('Subactivity.remark');
			$this->Subactivity->save($subactivity,false);
			
		$this->redirect('approve');
         }}
	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Subactivity', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->Subactivity->save($this->data)) {
				$this->Session->setFlash(__('The Subactivity has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Subactivity could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Subactivity->read(null, $id);
		}
                $years=array();
           for($i=6;$i<11;$i++){
              $years[date('Y')-$i]=date('Y')-$i;
             }
  	$year = $years;
		$majoractivities = $this->Subactivity->Majoractivity->find('list');
               // $periodlookups = $this->Subactivity->Periodlookup->find('list');
              
                $periods = $this->Subactivity->Period->find('list');
		$this->set(compact('majoractivities','periods','majoractivities','year'));
	}
        
	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Subactivity', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Subactivity->delete($id)) {
			$this->Session->setFlash(__('Subactivity deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>
