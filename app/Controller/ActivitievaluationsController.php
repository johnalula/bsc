<?php
App::uses('AppController', 'Controller');
/**
 * Activitievaluations Controller
 *
 * @property Activitievaluation $Activitievaluation
 */
class ActivitievaluationsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$activitievaluations=$this->Activitievaluation->find('all', 
				array(
                'fields' => array(
                    'Activity.id',
                    'Activity.activity',
		    'Activity.office_id',
		    'Activitievaluation.id',
                    'Activitievaluation.rank',
		    'Activitievaluation.in_quality',
		    'Activitievaluation.in_time',
                    'Activitievaluation.in_quntity'
                ),
		 'conditions' => array(
                    'Activity.office_id =' => $this->UserAuth->getUserOfficeId(),
                )
                ));
		
		$this->set('activitievaluations',$activitievaluations, $this->paginate());
	}
	public function show(){
		$activities = $this->Activitievaluation->Activity->find('all',
            	array(
                'fields' => array(
                    'Activity.id',
                    'Activity.activity',
		    'Activity.weight',
                    'Activity.ways_of_evaluation',
		    'Perspective.perspective_name',
                    'Activity.precondition_from_office'
                ),
		 'conditions' => array(
                    'Activity.office_id =' => $this->UserAuth->getUserOfficeId(),
                ),
                'order' => 'Activity.id DESC',
                'recursive' => 1
            )
        );

    	$this->set('activities',$activities);
	$this->set('officename',$this->UserAuth->getUserOfficeName());	
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Activitievaluation->id = $id;
		if (!$this->Activitievaluation->exists()) {
			throw new NotFoundException(__('Invalid activitievaluation'));
		}
		$this->set('activitievaluation', $this->Activitievaluation->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Activitievaluation->create();
			if ($this->Activitievaluation->save($this->request->data)) {
				$this->Session->setFlash(__('The activitievaluation has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The activitievaluation could not be saved. Please, try again.'));
			}
		}
		$activities = $this->Activitievaluation->Activity->find('list', 
				array(
                'fields' => array(
                    'Activity.id',
                    'Activity.activity',
		    
                ),
		 'conditions' => array(
                    'Activity.office_id = ' => $this->UserAuth->getUserOfficeId(),
                )
                ));
		
		$this->set(compact('activities'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Activitievaluation->id = $id;
		if (!$this->Activitievaluation->exists()) {
			throw new NotFoundException(__('Invalid activitievaluation'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Activitievaluation->save($this->request->data)) {
				$this->Session->setFlash(__('The activitievaluation has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The activitievaluation could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Activitievaluation->read(null, $id);
		}
		$activities = $this->Activitievaluation->Activity->find('list');
		$this->set(compact('activities'));
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
		$this->Activitievaluation->id = $id;
		if (!$this->Activitievaluation->exists()) {
			throw new NotFoundException(__('Invalid activitievaluation'));
		}
		if ($this->Activitievaluation->delete()) {
			$this->Session->setFlash(__('Activitievaluation deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Activitievaluation was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
