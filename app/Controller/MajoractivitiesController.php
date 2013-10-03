<?php
App::uses('AppController', 'Controller');
/**
 * Majoractivities Controller
 *
 * @property Majoractivity $Majoractivity
 */
class MajoractivitiesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Majoractivity->recursive = 0;
		$this->set('majoractivities', $this->paginate());
	}
       function exportxls() {
               
		$this->recursive = 1;
		$data = $this->Majoractivity->find('all');
		
		$this->set('rows',$data);
		}
/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Majoractivity->id = $id;
		if (!$this->Majoractivity->exists()) {
			throw new NotFoundException(__('Invalid majoractivity'));
		}
		$this->set('majoractivity', $this->Majoractivity->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Majoractivity->create();
			$measureweight = $this->Majoractivity->findMeasureWeiht($this->request->data('Majoractivity.measure_id'));
			$activityweiht = $this->request->data('Majoractivity.activity_weight');
				if($activityweiht <= 100){
					if($this->Majoractivity->isTotalActivityWeigtAtOfficeOk($activityweiht,$this->request->data('Majoractivity.measure_id'),$this->UserAuth->getUserOfficeId())){
                        		$this->request->data['Majoractivity']['office_id']=$this->UserAuth->getUserOfficeId();
                        		$this->request->data['Majoractivity']['user_id']=$this->UserAuth->getUserId();
                        		$this->Session->setFlash(__($this->UserAuth->getUserOfficeId()));
						if ($this->Majoractivity->save($this->request->data)) {
						$this->Session->setFlash(__('The majoractivity has been saved'));
						$this->redirect(array('action' => 'index'));
						} else {$this->Session->setFlash(__('The majoractivity could not be saved. Please, try again.'));}
					}else{$this->Session->setFlash(__('The total Majoractivity weight could not be grater than 100. Please, try again.'));}
				}else{$this->Session->setFlash(__('The Majoractivity weight could not be grater than 100. Please, try again.'));}
		}
		$measures = $this->Majoractivity->Measure->find('list');
                $objectives = $this->Majoractivity->Objective->find('list');
                $users = $this->Majoractivity->User->find('list');
                $periods = $this->Majoractivity->Period->find('list');
                $years=array();
                  for($i=6;$i<11;$i++){
                       $years[date('Y')-$i]=date('Y')-$i;
                       }
  	          $year = $years;
		$this->set(compact('measures','objectives','users','year','periods'));
	}
        
     function approve(){
                $this->Majoractivity->recursive = 0;
		$this->set('majoractivities', $this->paginate());
		$this->Majoractivity->Objective->find('all',
                 array(
                  'fields' => array(
                      'Objective.id',
                      'Objective.objective_id'
                       ),
                  'order' => 'Objective.id DESC',
                  'recursive' => 0
                  ));

              $this->set('objectives');

        }
       function makeAproveDisAprove($id = null, $is_approved=0) {
		if (!empty($id)) {
			$majoractivity=array();
			$majoractivity['Majoractivity']['id']=$id;
			$majoractivity['Majoractivity']['is_approved']=($is_approved) ? 1 : 00;
			$this->Majoractivity->save($majoractivity,false);
			if($is_approved) {
				$this->Session->setFlash(__('Activity is successfully approved'));
			} else {
				$this->Session->setFlash(__('Activity is successfully dis approver'));
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
			$majoractivity=array();
			$majoractivity['Majoractivity']['id']=$id;
			$majoractivity['Majoractivity']['remark']=$this->request->data('Majoractivity.remark');
			$this->Activity->save($majoractivity,false);
			
		$this->redirect('approve');
         }}
       function getRelatedSubactivities($id = null){    

        $RelatedSubactivities = $this->Majoractivity->Subactivity->find(
            'all',
            array(
                'fields' => array(
                    'Subactivity.id',
                    'Subactivity.subactivity_name ',
                  
                    'Subactivity.starting_date',
                    'Subactivity.ending_date',
                    'Subactivity.is_approved'
                ),
                'conditions' => array(
                    'Subactivity.majoractivity_id =' => $id,'Subactivity.office_id =' => $this->UserAuth->getUserOfficeId()
                ),
                'limit' => 6,
                'order' => 'Subactivity.id DESC'            
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
		$this->Majoractivity->id = $id;
		if (!$this->Majoractivity->exists()) {
			throw new NotFoundException(__('Invalid majoractivity'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			$measureweight = $this->Majoractivity->findMeasureWeiht($this->request->data('Majoractivity.measure_id'));
			$activityweiht = $this->request->data('Majoractivity.activity_weight');
				if($activityweiht <= 100){
					if($this->Majoractivity->isTotalActivityWeigtAtOfficeEditOk($activityweiht,$this->request->data('Majoractivity.measure_id'),$this->UserAuth->getUserOfficeId(),$id)){
						if ($this->Majoractivity->save($this->request->data)) {
						$this->Session->setFlash(__('The majoractivity has been saved'.$activityweiht));
						$this->redirect(array('action' => 'index'));
						} else {$this->Session->setFlash(__('The majoractivity could not be saved. Please, try again.'));}
					}else{$this->Session->setFlash(__('The total Majoractivity weight could not be grater than 100. Please, try again.'));}
				}else{$this->Session->setFlash(__('The Majoractivity weight could not be grater than 100. Please, try again.'));}
		} else {
			$this->request->data = $this->Majoractivity->read(null, $id);
		}
		$measures = $this->Majoractivity->Measure->find('list');
                $objectives = $this->Majoractivity->Objective->find('list');
                $periods = $this->Majoractivity->Period->find('list');
                $users = $this->Majoractivity->User->find('list');
                $years=array();
                  for($i=6;$i<11;$i++){
                       $years[date('Y')-$i]=date('Y')-$i;
                       }
  	          $year = $years;
		$this->set(compact('measures','objectives','users','year','periods'));
	}
  function accomplishment($id = null ){
          if(!$id){ throw new NotFoundException(__('Invalid Activity')); }
           $accomplish = $this->Majoractivity->findById($id);
           if (!$accomplish) { throw new NotFoundException(__('Invalid Activity')); }

         if ($this->request->is('post') || $this->request->is('put')) {
                $this->Majoractivity->id = $id;
                $this->request->data['Majoractivity']['acomplishment']=$this->Majoractivity->findAccomplishment($id,$this->request->data('Majoractivity.ac_in_quntity'),$this->request->data('Majoractivity.ac_in_quality'),$this->request->data('Majoractivity.ac_in_cost'),$this->request->data('Majoractivity.ac_in_time'));
                if ($this->Majoractivity->save($this->request->data)) {
                  $this->Session->setFlash('Your Activity has been updated.');
                  $this->redirect(array('action' => 'index'));
                } else {
                $this->Session->setFlash('Unable to update your Activity.');
                }
             }
        if (!$this->request->data) {
           $this->request->data = $accomplish;
           }
          
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
		$this->Majoractivity->id = $id;
		if (!$this->Majoractivity->exists()) {
			throw new NotFoundException(__('Invalid majoractivity'));
		}
		if ($this->Majoractivity->delete()) {
			$this->Session->setFlash(__('Majoractivity deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Majoractivity was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
