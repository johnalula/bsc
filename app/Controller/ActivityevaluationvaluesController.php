<?php
App::uses('AppController', 'Controller');
/**
 * Activityevaluationvalues Controller
 *
 * @property Activityevaluationvalue $Activityevaluationvalue
 */
class ActivityevaluationvaluesController extends AppController {
public $helpers = array('Js');
/**
 * index method
 *
 * @return void
 */
	public function index() {
		
	}
	public function show(){
	$activityevaluationvalues=$this->Activityevaluationvalue->find('all', 
				array(
                
		 'conditions' => array(
                    'Activityevaluationvalue.office_id =' => $this->UserAuth->getUserOfficeId(),
                )
                ));
		
		$this->set('activityevaluationvalues', $activityevaluationvalues,$this->paginate());
	}
	function addself($id = null, $value) {
		if (!empty($id)) {
			$activityevaluationvalue=array();
			$activityevaluationvalue['Activityevaluationvalue']['id']=$id;
			$activityevaluationvalue['Activityevaluationvalue']['self']=$value;
			$this->Activityevaluationvalue->save($activityevaluationvalue,false);
			
		}
		$this->redirect('approve');
	
        }
	public function approve(){
		$activityevaluationvalues=$this->Activityevaluationvalue->find('all', 
				array(
                
		 'conditions' => array(
                    'Activityevaluationvalue.office_id =' => $this->UserAuth->getUserOfficeId(),
                )
                ));
		
		$this->set('activityevaluationvalues', $activityevaluationvalues,$this->paginate());
	}
	function addpear($id = null, $value) {
		if (!empty($id)) {
			$activityevaluationvalue=array();
			$activityevaluationvalue['Activityevaluationvalue']['id']=$id;
			$activityevaluationvalue['Activityevaluationvalue']['pear']=$value;
			$this->Activityevaluationvalue->save($activityevaluationvalue,false);
			
		}
		$this->redirect('approve');
	
        }
////////////////////////////////////////////////////////////////////

	function selfIntime($id = null, $value) {
		if (!empty($id)) {
			$activityevaluationvalue=array();
			$activityevaluationvalue['Activityevaluationvalue']['id']=$id;
			$activityevaluationvalue['Activityevaluationvalue']['in_time']=$value;
			$this->Activityevaluationvalue->save($activityevaluationvalue,false);
			
		}
		$this->redirect('self');
	
        }
	function pearIntime($id = null, $value) {
		if (!empty($id)) {
			$activityevaluationvalue=array();
			$activityevaluationvalue['Activityevaluationvalue']['id']=$id;
			$activityevaluationvalue['Activityevaluationvalue']['pIn_time']=$value;
			$this->Activityevaluationvalue->save($activityevaluationvalue,false);
			
		}
		$this->redirect('pear');
	
        }
	function headIntime($id = null, $value) {
		if (!empty($id)) {
			$activityevaluationvalue=array();
			$activityevaluationvalue['Activityevaluationvalue']['id']=$id;
			$activityevaluationvalue['Activityevaluationvalue']['hIn_time']=$value;
			$this->Activityevaluationvalue->save($activityevaluationvalue,false);
			
		}
		$this->redirect('head');
	
        }
///////////////////////////////////////////////////////////	
//////////////////////////////////////////////////////////

	function selfInquality($id = null, $value) {
		if (!empty($id)) {
			$activityevaluationvalue=array();
			$activityevaluationvalue['Activityevaluationvalue']['id']=$id;
			$activityevaluationvalue['Activityevaluationvalue']['in_quality']=$value;
			$this->Activityevaluationvalue->save($activityevaluationvalue,false);
			
		}
		$this->redirect('self');
	}
		
	function pearInquality($id = null, $value) {
		if (!empty($id)) {
			$activityevaluationvalue=array();
			$activityevaluationvalue['Activityevaluationvalue']['id']=$id;
			$activityevaluationvalue['Activityevaluationvalue']['pIn_quality']=$value;
			$this->Activityevaluationvalue->save($activityevaluationvalue,false);
			
		}
		$this->redirect('pear');
	
        }
	function headInquality($id = null, $value) {
		if (!empty($id)) {
			$activityevaluationvalue=array();
			$activityevaluationvalue['Activityevaluationvalue']['id']=$id;
			$activityevaluationvalue['Activityevaluationvalue']['hIn_quality']=$value;
			$this->Activityevaluationvalue->save($activityevaluationvalue,false);
			
		}
		$this->redirect('head');
	
        }

////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////

	function selfInquantity($id = null, $value){
		if (!empty($id)) {
			$activityevaluationvalue=array();
			$activityevaluationvalue['Activityevaluationvalue']['id']=$id;
			$activityevaluationvalue['Activityevaluationvalue']['in_quantity']=$value;
			$this->Activityevaluationvalue->save($activityevaluationvalue,false);
			
		}
		$this->redirect('self');
	}
	function pearInquntity($id = null, $value) {
		if (!empty($id)) {
			$activityevaluationvalue=array();
			$activityevaluationvalue['Activityevaluationvalue']['id']=$id;
			$activityevaluationvalue['Activityevaluationvalue']['pIn_quantity']=$value;
			$this->Activityevaluationvalue->save($activityevaluationvalue,false);
			
		}
		$this->redirect('pear');
	
        }
	function headInquntity($id = null, $value) {
		if (!empty($id)) {
			$activityevaluationvalue=array();
			$activityevaluationvalue['Activityevaluationvalue']['id']=$id;
			$activityevaluationvalue['Activityevaluationvalue']['hIn_quntity']=$value;
			$this->Activityevaluationvalue->save($activityevaluationvalue,false);
			
		}
		$this->redirect('head');
	
        }
/////////////////////////////////////////////////

	function addhead($id = null, $value) {
		if (!empty($id)) {
			$activityevaluationvalue=array();
			$activityevaluationvalue['Activityevaluationvalue']['id']=$id;
			$activityevaluationvalue['Activityevaluationvalue']['head']=$value;
			$this->Activityevaluationvalue->save($activityevaluationvalue,false);
			
		}
		$this->redirect('approve');
	
        }
	function addstudent($id = null, $value) {
		if (!empty($id)) {
			$activityevaluationvalue=array();
			$activityevaluationvalue['Activityevaluationvalue']['id']=$id;
			$activityevaluationvalue['Activityevaluationvalue']['student']=$value;
			$this->Activityevaluationvalue->save($activityevaluationvalue,false);
			
		}
		$this->redirect('approve');
	
        }
	public function self(){
		$activityevaluationvalues=$this->Activityevaluationvalue->find('all', 
				array(
                
		 'conditions' => array(
                    'Activityevaluationvalue.user_id =' => $this->UserAuth->getUserId(),
                )
                ));
		
		$this->set('activityevaluationvalues', $activityevaluationvalues,$this->paginate());
	}
	public function pear(){
		$activityevaluationvalues=$this->Activityevaluationvalue->find('all', 
				array(
                
		 'conditions' => array(
                    'Activityevaluationvalue.office_id =' => $this->UserAuth->getUserOfficeId(),
                )
                ));
		
		$this->set('activityevaluationvalues', $activityevaluationvalues,$this->paginate());
	}
	public function head(){
		$activityevaluationvalues=$this->Activityevaluationvalue->find('all', 
				array(
                
		 'conditions' => array(
                    'Activityevaluationvalue.office_id =' => $this->UserAuth->getUserOfficeId(),
                )
                ));
		
		$this->set('activityevaluationvalues', $activityevaluationvalues,$this->paginate());
	}
	public function student(){
		$this->Activityevaluationvalue->recursive = 0;
		$this->set('activityevaluationvalues', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Activityevaluationvalue->id = $id;
		if (!$this->Activityevaluationvalue->exists()) {
			throw new NotFoundException(__('Invalid activityevaluationvalue'));
		}
		$this->set('activityevaluationvalue', $this->Activityevaluationvalue->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Activityevaluationvalue->create();
			if ($this->Activityevaluationvalue->save($this->request->data)) {
				$this->Session->setFlash(__('The activityevaluationvalue has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The activityevaluationvalue could not be saved. Please, try again.'));
			}
		}
		$offices = $this->Activityevaluationvalue->Office->find('list', 
				array(
                'fields' => array(
                    'Office.id',
                    'Office.office_name',
		    
                ),
		 'conditions' => array(
                    'Office.id = ' => $this->UserAuth->getUserOfficeId(),
                )
                ));
		$user = $this->Activityevaluationvalue->query('SELECT u.id, u.first_name, u.last_name FROM users as u WHERE u.office_id = '.$this->UserAuth->getUserOfficeId());
		$users = array();
		foreach($user as $us):
			$users[$us['u']['id']]=$us['u']['first_name'].' '.$us['u']['last_name'];
		endforeach;
		$activities = $this->Activityevaluationvalue->Activity->find('list', 
				array(
                'fields' => array(
                    'Activity.id',
                    'Activity.activity',
		    
                ),
		 'conditions' => array(
                    'Activity.office_id = ' => $this->UserAuth->getUserOfficeId(),
		    
                )
                ));
		$periods = $this->Activityevaluationvalue->Period->find('list');
		$years=array();
           		for($i=6;$i<11;$i++){
             	 $years[date('Y')-$i]=date('Y')-$i;
            	 }
  		$year = $years;
		$this->set(compact('offices', 'users','activities','periods','year'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Activityevaluationvalue->id = $id;
		if (!$this->Activityevaluationvalue->exists()) {
			throw new NotFoundException(__('Invalid activityevaluationvalue'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Activityevaluationvalue->save($this->request->data)) {
				$this->Session->setFlash(__('The activityevaluationvalue has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The activityevaluationvalue could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Activityevaluationvalue->read(null, $id);
		}
		$offices = $this->Activityevaluationvalue->Office->find('list');
		$users = $this->Activityevaluationvalue->User->find('list');
		$this->set(compact('offices', 'users'));
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
		$this->Activityevaluationvalue->id = $id;
		if (!$this->Activityevaluationvalue->exists()) {
			throw new NotFoundException(__('Invalid activityevaluationvalue'));
		}
		if ($this->Activityevaluationvalue->delete()) {
			$this->Session->setFlash(__('Activityevaluationvalue deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Activityevaluationvalue was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
