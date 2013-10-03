<?php
App::uses('AppController', 'Controller');
/**
 * Objectives Controller
 *
 * @property Objective $Objective
 */
class ObjectivesController extends AppController {
var $components = array('FusionCharts');
	var $helpers = array('FusionCharts','Js','PhpExcel.PhpExcel');
	var $uses = array();
//public $helpers = array('PhpExcel.PhpExcel'); 
var $paginate = array(
              'limit' => 6); 
/**
 * index method
 *
 * @return void
 */
	public function getByPerspective() {
		$perspective_id = $this->request->data['Activity']['perspective_id'];
 
		$objectives = $this->Objective->find('list', array(
			'conditions' => array('Objective.perspective_id' => $perspective_id),
			'recursive' => -1
			));
 
		$this->set('objectives',$objectives);
		$this->layout = 'ajax';
	}
	public function getObjectiveReportByOfficeId(){
	$objectivess = $this->Objective->query('SELECT o.id, o.objective_name, t.objective_id from objectives o, targets t where o.id = t.objective_id and t.year = '.$this->request->data['Report']['year_id'].' and t.period_id = '.$this->request->data['Report']['period_id'].' and t.office_id = '.$this->UserAuth->getUserOfficeId());
		$objectives = array();
 		foreach( $objectivess as $objective ):
                  $objectives[$objective['o']['id']]= $objective['o']['objective_name'];
		endforeach;
		$this->set('objectives',$objectives);
		$this->layout = 'ajax';
	}
	public function index() {
		$this->Objective->recursive = 0;
		$this->set('objectives', $this->paginate());
	}
	public function show() {
		$this->Objective->recursive = 0;
		$this->set('objectives', $this->paginate());
	}
       public function exportxls() {
                $this->recursive = 1;
		$data = $this->Objective->find('all');
		$this->set('rows',$data);
	}
/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	function getRelatedMeasures($id = null){    

        $RelatedMeasures = $this->Objective->Measure->find(
            'all',
            array(
                'fields' => array(
		    'Measure.id',
		    'Measure.measure_name'
                ),
                'conditions' => array(
                    'Measure.objective_id =' => $id,
                )
                
               // 'order' => 'Activitievaluation.id DESC'            
            )
        );
        if (!empty($this->params['requested'])) {
            return $RelatedMeasures;
        }else{
            $this->set('RelatedMeasures');
        }
    }

	public function view($id = null) {
		$this->Objective->id = $id;
		if (!$this->Objective->exists()) {
			throw new NotFoundException(__('Invalid objective'));
		}
		$this->set('objective', $this->Objective->read(null, $id));
	}
	public function showrelated($id = null) {
		$this->Objective->id = $id;
		if (!$this->Objective->exists()) {
			throw new NotFoundException(__('Invalid objective'));
		}
		$this->set('objective', $this->Objective->read(null, $id));
	}
	public function downview($id = null) {
		$this->Objective->id = $id;
		if (!$this->Objective->exists()) {
			throw new NotFoundException(__('Invalid objective'));
		}
		$this->set('objective', $this->Objective->read(null, $id));
	}
	
	function pie3d()
	{
	if ($this->request->is('post')) {
$piechart = $_POST['chart_id'];
		$this->FusionCharts->create
			(
				'Pie3D Chart',
				array
				(
					'type' => $piechart,
					'width' => 900,
					'height' => 400,
					'id' => 'pchart'
				)
			);
}else{
$this->FusionCharts->create
			(
				'Pie3D Chart',
				array
				(
					'type' => 'pie3d',
					'width' => 900,
					'height' => 400,
					'id' => 'pchart'
				)
			);
}
		$this->FusionCharts->setChartParams
			(
				'Pie3D Chart',
				array
				(
					'decimalPrecision' => '0',
					'showNames'	   => '1'
				)
			);
		$perspectivec=array();
		$perspectivesc=$this->Objective->query("SELECT o.objective_name, o.objective_weight from objectives o ");
		$i=0;
		foreach($perspectivesc as $persp):
			$perspectivec[$i]=array('value'=>$persp['o']['objective_weight'],'params'=>array('name'=>$persp['o']['objective_name']));
		$i++;
			endforeach;
		$this->FusionCharts->addChartData
			(
				'Pie3D Chart',
				$perspectivec
			);
	}
/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
		$this->Objective->create();
                $perpectiveweiht=$this->Objective->findPerspectiveWeight($this->request->data('Objective.perspective_id'));
                $objectiveweiht=$this->request->data('Objective.objective_weight');
			if($objectiveweiht <= $perpectiveweiht){
               			if($this->Objective->isTheTotalWeightOk($objectiveweiht,$perpectiveweiht,$this->request->data('Objective.perspective_id'))){
					if ($this->Objective->save($this->request->data)) {
					$this->Session->setFlash(__('The objective has been saved'));
					$this->redirect(array('action' => 'index'));
					} else {$this->Session->setFlash(__('The objective could not be saved. Please, try again.'));}
                     		}else{$this->Session->setFlash(__('The total Objective weight could not be grater than related perspective weight. Please, try again.'));}
			}else{$this->Session->setFlash(__('The objective weght '.$objectiveweiht.' cold not be greter than the perspective weiht '.$perpectiveweiht));}
		}
		$perspectives = $this->Objective->Perspective->find('list');
		$organizations = $this->Objective->Organization->find('list');
		$themes = $this->Objective->Theme->find('list');
		$offices = $this->Objective->Office->find('list');
		$this->set(compact('perspectives', 'organizations', 'themes', 'offices'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Objective->id = $id;
		if (!$this->Objective->exists()) {
			throw new NotFoundException(__('Invalid objective'));
		}
               
		if ($this->request->is('post') || $this->request->is('put')) {
		 $perpectiveweiht=$this->Objective->findPerspectiveWeight($this->request->data('Objective.perspective_id'));
                 $objectiveweiht=$this->request->data('Objective.objective_weight'); 
			if($objectiveweiht <= $perpectiveweiht){
               			if($this->Objective->isTheTotalWeightEditOk($objectiveweiht,$perpectiveweiht,$this->request->data('Objective.perspective_id'),$id)){                     
					if ($this->Objective->save($this->request->data)) {
					$this->Session->setFlash(__('The objective has been saved'));
					$this->redirect(array('action' => 'index'));
					} else {$this->Session->setFlash(__('The objective could not be saved. Please, try again.'));}
				}else{$this->Session->setFlash(__('The total Objective weight could not be grater than related perspective weight. Please, try again.'));}
			}else{$this->Session->setFlash(__('The objective weght '.$objectiveweiht.' cold not be greter than the perspective weiht '.$perpectiveweiht));}                    
		} else {
			$this->request->data = $this->Objective->read(null, $id);
		}
		$perspectives = $this->Objective->Perspective->find('list');
		$organizations = $this->Objective->Organization->find('list');
		$themes = $this->Objective->Theme->find('list');
		$offices = $this->Objective->Office->find('list');
		$this->set(compact('perspectives', 'organizations', 'themes', 'offices'));
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
		$this->Objective->id = $id;
		if (!$this->Objective->exists()) {
			throw new NotFoundException(__('Invalid objective'));
		}
		if ($this->Objective->delete()) {
			$this->Session->setFlash(__('Objective deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Objective was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
