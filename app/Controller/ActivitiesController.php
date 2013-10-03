<?php
App::uses('AppController', 'Controller');
/**
 * Activities Controller
 *
 * @property Activity $Activity
 */
class ActivitiesController extends AppController {
 public $helpers = array('Js');
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$activities=$this->Activity->find('all', 
				array(
                'fields' => array(
                    'Activity.id',
                    'Activity.activity',
		    'Activity.weight',
                    'Activity.ways_of_evaluation',
		    'Perspective.perspective_name',
		    'Perspective.id',
                    'Activity.precondition_from_office'
                ),
		 'conditions' => array(
                    'Activity.office_id =' => $this->UserAuth->getUserOfficeId(),
                )
                ));
		$this->set('activities',$activities, $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Activity->id = $id;
		if (!$this->Activity->exists()) {
			throw new NotFoundException(__('Invalid activity'));
		}
		$this->set('activity', $this->Activity->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Activity->create();
			 $this->request->data['Activity']['office_id'] = $this->UserAuth->getUserOfficeId(); 
			if ($this->Activity->save($this->request->data)) {
				$this->Session->setFlash(__('The activity has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The activity could not be saved. Please, try again.'));
			}
		}
		//$perspectives=array('select perspective'=>'select perspective');
		
		$perspectives = $this->Activity->Perspective->find('list');
		$periods = $this->Activity->Period->find('list');
		$years=array();
           		for($i=6;$i<11;$i++){
             	 $years[date('Y')-$i]=date('Y')-$i;
            	 }
  		$year = $years;
		//$objectives = $this->Activity->Objective->find('list');
		//$measures = $this->Activity->Measure->find('list');
		$this->set(compact('perspectives','periods','year'));
	}
	function getRelatedSubactivities($id = null){    

        $RelatedSubactivities = $this->Activity->Sub->find(
            'all',
            array(
                'fields' => array(
                    'Sub.id',
                    'Sub.sub_activity',
                  
                    'Sub.starting_date',
                    'Sub.ending_date',
                    'Sub.is_approved'
                ),
                'conditions' => array(
                    'Sub.activity_id =' => $id,'Sub.office_id =' => $this->UserAuth->getUserOfficeId()
                ),
                'limit' => 6,
                'order' => 'Sub.id DESC'            
            )
        );
        if (!empty($this->params['requested'])) {
            return $RelatedSubactivities;
        }else{
            $this->set('RelatedSubactivities');
        }
    }

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Activity->id = $id;
		if (!$this->Activity->exists()) {
			throw new NotFoundException(__('Invalid activity'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Activity->save($this->request->data)) {
				$this->Session->setFlash(__('The activity has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The activity could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Activity->read(null, $id);
		}
		
		$periods = $this->Activity->Period->find('list');
		$years=array();
           		for($i=6;$i<11;$i++){
             	 $years[date('Y')-$i]=date('Y')-$i;
            	 }
  		$year = $years;
		$perspectives = $this->Activity->Perspective->find('list');
		$objectives = $this->Activity->Objective->find('list');
		$measures = $this->Activity->Measure->find('list');
		$this->set(compact('perspectives','objectives','measures','periods','year'));
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
		$this->Activity->id = $id;
		if (!$this->Activity->exists()) {
			throw new NotFoundException(__('Invalid activity'));
		}
		if ($this->Activity->delete()) {
			$this->Session->setFlash(__('Activity deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Activity was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
	function getRelatedActivityevaluations($id = null){    

        $RelatedActivitievaluations = $this->Activity->Activitievaluation->find(
            'all',
            array(
                'fields' => array(
		    'Activitievaluation.id',
		    'Activitievaluation.activity_id',
                    'Activitievaluation.rank',
                    'Activitievaluation.in_quality',
		    'Activitievaluation.in_time',
                    'Activitievaluation.in_quntity'
                ),
                'conditions' => array(
                    'Activitievaluation.activity_id =' => $id,
                )
                
               // 'order' => 'Activitievaluation.id DESC'            
            )
        );
        if (!empty($this->params['requested'])) {
            return $RelatedActivitievaluations;
        }else{
            $this->set('RelatedActivitievaluations');
        }
    }
}
