<?php
App::uses('AppController', 'Controller');
/**
 * Behaveiorevaluations Controller
 *
 * @property Behaveiorevaluation $Behaveiorevaluation
 */
class BehaveiorevaluationsController extends AppController {
public $helpers = array('Js');
/**
 * index method
 *
 * @return void
 */
	public function activateByOffice(){
	if ($this->request->is('post')) {
			$this->Behaveiorevaluation->create();
			$this->request->data['Behaveiorevaluation']['office_id']=$this->UserAuth->getUserOfficeId();
			if ($this->Behaveiorevaluation->save($this->request->data)) {
				$this->Session->setFlash(__('The behaveiorevaluation has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The behaveiorevaluation could not be saved. Please, try again.'));
			}
		}
		 $years=array();
           for($i=6;$i<11;$i++){
              $years[date('Y')-$i]=date('Y')-$i;
             }
  	$year = $years;
		//$offices = $this->Behaveiorevaluation->Office->find('list');
		$users = $this->Behaveiorevaluation->User->find('list', array(
			'conditions' => array('User.office_id' => $this->UserAuth->getUserOfficeId()),
			'recursive' => -1
			));
		$periods = $this->Behaveiorevaluation->Period->find('list');
		$this->set(compact('offices', 'users', 'periods','year'));
	}
	public function index() {
	}
	public function show() {
		$behaveiorevaluations=$this->Behaveiorevaluation->find('all', 
				array(
                
		 'conditions' => array(
                    'Behaveiorevaluation.office_id =' => $this->UserAuth->getUserOfficeId(),
                )
                ));
		
		
		$this->set('behaveiorevaluations',$behaveiorevaluations, $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Behaveiorevaluation->id = $id;
		if (!$this->Behaveiorevaluation->exists()) {
			throw new NotFoundException(__('Invalid behaveiorevaluation'));
		}
		$this->set('behaveiorevaluation', $this->Behaveiorevaluation->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$don =0;
			$indicators=$this->Behaveiorevaluation->query('select i.id from indicators as i');
			
			foreach($indicators as $indicat):
				$this->Behaveiorevaluation->create();
				$this->request->data['Behaveiorevaluation']['indicator_id'] = $indicat['i']['id'];
			if ($this->Behaveiorevaluation->save($this->request->data)) {
				$don =1;
			} else {
				$don = -1;
				break;
				$this->Session->setFlash(__('The behaveiorevaluation could not be saved. Please, try again.'));
			}
			endforeach;
			if($don == 1){
			$this->Session->setFlash(__('The behaveiorevaluation has been saved'));
			$this->redirect(array('action' => 'index'));
			}
		}
		 $years=array();
           for($i=6;$i<11;$i++){
              $years[date('Y')-$i]=date('Y')-$i;
             }
  	$year = $years;
		$offices = $this->Behaveiorevaluation->Office->find('list', 
				array(
                'fields' => array(
                    'Office.id',
                    'Office.office_name',
		    
                ),
		 'conditions' => array(
                    'Office.id = ' => $this->UserAuth->getUserOfficeId(),
                )
                ));
		$user = $this->Behaveiorevaluation->query('SELECT u.id, u.first_name, u.last_name FROM users as u WHERE u.office_id = '.$this->UserAuth->getUserOfficeId());
		$users = array();
		foreach($user as $us):
			$users[$us['u']['id']]=$us['u']['first_name'].' '.$us['u']['last_name'];
		endforeach;
		$periods = $this->Behaveiorevaluation->Period->find('list');
		$this->set(compact('offices', 'users', 'periods','year'));
	}

	function addself($id = null, $value) {
		if (!empty($id)) {
			$behaveiorevaluation=array();
			$behaveiorevaluation['Behaveiorevaluation']['id']=$id;
			$behaveiorevaluation['Behaveiorevaluation']['self']=$value;
			$this->Behaveiorevaluation->save($behaveiorevaluation,false);
			
		}
		$this->redirect('self');
	
        }
	function addpear($id = null, $value) {
		if (!empty($id)) {
			$behaveiorevaluation=array();
			$behaveiorevaluation['Behaveiorevaluation']['id']=$id;
			$behaveiorevaluation['Behaveiorevaluation']['pear']=$value;
			$this->Behaveiorevaluation->save($behaveiorevaluation,false);
			
		}
		$this->redirect('pear');
	
        }
	function addhead($id = null, $value) {
		if (!empty($id)) {
			$behaveiorevaluation=array();
			$behaveiorevaluation['Behaveiorevaluation']['id']=$id;
			$behaveiorevaluation['Behaveiorevaluation']['head']=$value;
			$this->Behaveiorevaluation->save($behaveiorevaluation,false);
			
		}
		$this->redirect('head');
	
        }
	function addstudent($id = null, $value) {
		if (!empty($id)) {
			$behaveiorevaluation=array();
			$behaveiorevaluation['Behaveiorevaluation']['id']=$id;
			$behaveiorevaluation['Behaveiorevaluation']['student']=$value;
			$this->Behaveiorevaluation->save($behaveiorevaluation,false);
			
		}
		$this->redirect('student');
	
        }
	public function self(){
		$behaveiorevaluation=$this->Behaveiorevaluation->find('all', 
				array(
                
		 'conditions' => array(
                    'Behaveiorevaluation.user_id =' => $this->UserAuth->getUserId(),
                )
                ));
		
		$this->set('behaveiorevaluation',$behaveiorevaluation, $this->paginate());
	}
	public function pear(){
		$behaveiorevaluation=$this->Behaveiorevaluation->find('all', 
				array(
                
		 'conditions' => array(
                    'Behaveiorevaluation.user_id =' => $this->UserAuth->getUserId(),
                )
                ));
		
		$this->set('behaveiorevaluation',$behaveiorevaluation, $this->paginate());
	}
	public function head(){
		$behaveiorevaluation=$this->Behaveiorevaluation->find('all', 
				array(
                
		 'conditions' => array(
                    'Behaveiorevaluation.user_id =' => $this->UserAuth->getUserId(),
                )
                ));
		
		$this->set('behaveiorevaluation',$behaveiorevaluation, $this->paginate());
	}
	public function student(){
		$this->Behaveiorevaluation->recursive = 0;
		$this->set('behaveiorevaluation', $this->paginate());
	}


/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Behaveiorevaluation->id = $id;
		if (!$this->Behaveiorevaluation->exists()) {
			throw new NotFoundException(__('Invalid behaveiorevaluation'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Behaveiorevaluation->save($this->request->data)) {
				$this->Session->setFlash(__('The behaveiorevaluation has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The behaveiorevaluation could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Behaveiorevaluation->read(null, $id);
		}
		$offices = $this->Behaveiorevaluation->Office->find('list');
		$users = $this->Behaveiorevaluation->User->find('list');
		$periods = $this->Behaveiorevaluation->Period->find('list');
		$this->set(compact('offices', 'users', 'periods'));
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
		$this->Behaveiorevaluation->id = $id;
		if (!$this->Behaveiorevaluation->exists()) {
			throw new NotFoundException(__('Invalid behaveiorevaluation'));
		}
		if ($this->Behaveiorevaluation->delete()) {
			$this->Session->setFlash(__('Behaveiorevaluation deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Behaveiorevaluation was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
