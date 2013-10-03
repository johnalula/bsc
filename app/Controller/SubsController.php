<?php
App::uses('AppController', 'Controller');
/**
 * Subs Controller
 *
 * @property Sub $Sub
 */
class SubsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Sub->recursive = 0;
		$this->set('subs', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Sub->id = $id;
		if (!$this->Sub->exists()) {
			throw new NotFoundException(__('Invalid sub'));
		}
		$this->set('sub', $this->Sub->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Sub->create();
			$this->request->data['Sub']['user_id']=$this->UserAuth->getUserId();
                   	$this->request->data['Sub']['office_id']=$this->UserAuth->getUserOfficeId();
			if ($this->Sub->save($this->request->data)) {
				$this->Session->setFlash(__('The sub has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The sub could not be saved. Please, try again.'));
			}
		}
		$activiti = $this->Sub->query('SELECT a.activity, a.id, ae.activity_id FROM activities as a,  activityevaluationvalues as ae WHERE a.id = ae.activity_id and ae.user_id = '.$this->UserAuth->getUserId());
		$activities = array();
		foreach($activiti as $active):
 			$activities[$active['a']['id']] = $active['a']['activity'];
		endforeach;
		$periods = $this->Sub->Period->find('list');
		$years=array();
           for($i=6;$i<11;$i++){
              $years[date('Y')-$i]=date('Y')-$i;
             }
  	$year = $years;
		$this->set(compact('activities', 'periods','year'));
	}
	function approve(){
           $this->Sub->recursive = 0;
		$this->set('subs', $this->paginate());
		$this->Sub->Activity->find('all',
                 array(
                  'fields' => array(
                      'Activity.id',
                       'Activity.activity'
                       ),
                  'order' => 'Activity.id DESC',
                  'recursive' => 0
                  ));

              $this->set('activities');

        }
        function makeAproveDisAprove($id = null, $pproved) {
		if (!empty($id)) {
			$subactivity=array();
			$subactivity['Sub']['id']=$id;
			$subactivity['Sub']['is_approved']=$pproved;
			$this->Sub->save($subactivity,false);
			if($is_approved==1) {
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
			$subactivity['Sub']['id']=$id;
			$subactivity['Sub']['remark']=$this->request->data('Sub.remark');
			$this->Sub->save($subactivity,false);
			
		$this->redirect('approve');
         }}
/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Sub->id = $id;
		if (!$this->Sub->exists()) {
			throw new NotFoundException(__('Invalid sub'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Sub->save($this->request->data)) {
				$this->Session->setFlash(__('The sub has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The sub could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Sub->read(null, $id);
		}
		$activities = $this->Sub->Activity->find('list');
		$periods = $this->Sub->Period->find('list');
		$this->set(compact('activities', 'periods'));
	}

/**
 * delete method
 *
 * @throws MethodNotAllowedException
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Sub->id = $id;
		if (!$this->Sub->exists()) {
			throw new NotFoundException(__('Invalid sub'));
		}
		if ($this->Sub->delete()) {
			$this->Session->setFlash(__('Sub deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Sub was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
