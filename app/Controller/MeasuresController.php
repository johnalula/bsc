<?php
App::uses('AppController', 'Controller');
/**
 * Measures Controller
 *
 * @property Measure $Measure
 */
class MeasuresController extends AppController {
var $components = array('FusionCharts');
	var $helpers = array('FusionCharts','Js');
	var $uses = array();

 var $paginate = array(
              'limit' => 10); 
/**
 * index method
 *
 * @return void
 */
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
		$perspectivesc=$this->Measure->query("SELECT m.measure_name, m.measure_weight from measures m ");
		$i=0;
		foreach($perspectivesc as $persp):
			$perspectivec[$i]=array('value'=>$persp['m']['measure_weight'],'params'=>array('name'=>$persp['m']['measure_name']));
		$i++;
			endforeach;
		$this->FusionCharts->addChartData
			(
				'Pie3D Chart',
				$perspectivec
			);
	}
	public function getByObjective() {
		$objective_id = $this->request->data['Target']['objective_id'];
 
		$measures = $this->Measure->find('list', array(
			'conditions' => array('Measure.objective_id' => $objective_id),
			'recursive' => -1
			));
 
		$this->set('measures',$measures);
		$this->layout = 'ajax';
	}
	public function getByObjectivea() {
		$objective_id = $this->request->data['Activity']['objective_id'];
 
		$measures = $this->Measure->find('list', array(
			'conditions' => array('Measure.objective_id' => $objective_id),
			'recursive' => -1
			));
 
		$this->set('measures',$measures);
		$this->layout = 'ajax';
	}
	public function getMeasurByPeriodId() {

		$measurss = $this->Measure->query('SELECT m.id, m.measure_name, t.measure_id from measures m, targets t where m.id = t.measure_id and t.year = '.$this->request->data['Report']['year_id'].'  and t.office_id = '.$this->UserAuth->getUserOfficeId());
		$measures = array();
 		foreach( $measurss as $measur ):
                  $measures[$measur['m']['id']]= $measur['m']['measure_name'];
		endforeach;
		$this->set('measures',$measures);
		$this->layout = 'ajax';
  
	}
	public function index() {
		$this->Measure->recursive = 0;
		$this->set('measures', $this->paginate());
	}
	public function show() {
		$this->Measure->recursive = 0;
		$this->set('measures', $this->paginate());
	}
       function exportxls() {               
		$this->recursive = 1;
		$data = $this->Measure->find('all');
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
		$this->Measure->id = $id;
		if (!$this->Measure->exists()) {
			throw new NotFoundException(__('Invalid measure'));
		}
		$this->set('measure', $this->Measure->read(null, $id));
	}
	
	public function showrelated($id = null) {
		$this->Measure->id = $id;
		if (!$this->Measure->exists()) {
			throw new NotFoundException(__('Invalid measure'));
		}
		$this->set('measure', $this->Measure->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Measure->create();
		$objectiveweight = $this->Measure->findObjectiveWeight($this->request->data('Measure.objective_id'));
		$measureweiht = $this->request->data('Measure.measure_weight'); 
			if($measureweiht <= $objectiveweight){
				if($this->Measure->isTheTotalMeasureWeightOk($measureweiht,$objectiveweight,$this->request->data('Measure.objective_id'))){
					if ($this->Measure->save($this->request->data)) {
					$this->Session->setFlash(__('The measure has been saved'));
					$this->redirect(array('action' => 'index'));
					} else {$this->Session->setFlash(__('The measure could not be saved. Please, try again.'));}
				}else {$this->Session->setFlash(__('The total Measure weight could not be grater than related Objective weight. Please, try again.'));}
			}else {$this->Session->setFlash(__('The Measure weght '.$measureweiht.' cold not be greter than the Objective weiht '.$objectiveweight));}
		}
		$objectives = $this->Measure->Objective->find('list');
		$units = $this->Measure->Unit->find('list');
		$frequencies = $this->Measure->Frequency->find('list');
		$thresholds = $this->Measure->Threshold->find('list');
		$this->set(compact('objectives', 'units', 'frequencies', 'thresholds'));
	}
  
/**
 * edit method   
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Measure->id = $id;
		if (!$this->Measure->exists()) {
			throw new NotFoundException(__('Invalid measure'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
		$objectiveweight = $this->Measure->findObjectiveWeight($this->request->data('Measure.objective_id'));
		$measureweiht = $this->request->data('Measure.measure_weight'); 
			if($measureweiht <= $objectiveweight){
				if($this->Measure->isTheTotalMeasureWeightEditOk($measureweiht,$objectiveweight,$this->request->data('Measure.objective_id'),$id)){
					if ($this->Measure->save($this->request->data)) {
					$this->Session->setFlash(__('The measure has been saved'));
					$this->redirect(array('action' => 'index'));
					} else {$this->Session->setFlash(__('The measure could not be saved. Please, try again.'));}
				}else {$this->Session->setFlash(__('The total Measure weight could not be grater than related Objective weight. Please, try again.'));}
			}else {$this->Session->setFlash(__('The Measure weght '.$measureweiht.' cold not be greter than the Objective weiht '.$objectiveweight));}
		} else {$this->request->data = $this->Measure->read(null, $id);}
		$objectives = $this->Measure->Objective->find('list');
		$units = $this->Measure->Unit->find('list');
		$frequencies = $this->Measure->Frequency->find('list');
		$thresholds = $this->Measure->Threshold->find('list');
		$this->set(compact('objectives', 'units', 'frequencies', 'thresholds'));
	}
       
        public function report(){
        
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
		$this->Measure->id = $id;
		if (!$this->Measure->exists()) {
			throw new NotFoundException(__('Invalid measure'));
		}
		if ($this->Measure->delete()) {
			$this->Session->setFlash(__('Measure deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Measure was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
