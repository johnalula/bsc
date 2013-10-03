<?php
App::uses('AppController', 'Controller');
/**
 * Perspectives Controller
 *
 * @property Perspective $Perspective
 */
class PerspectivesController extends AppController {

var $components = array('FusionCharts');
	var $helpers = array('FusionCharts','Js');
	var $uses = array();
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Perspective->recursive = 0;
		$this->set('perspectives', $this->paginate());
	}
	public function show() {
		$this->Perspective->recursive = 0;
		$this->set('perspectives', $this->paginate());
	}
      function exportxls() {
               
		$this->recursive = 1;
		$data = $this->Perspective->find('all');
		
		$this->set('rows',$data);
		

	}
   function createg(){
       		
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
		$perspectivesc=$this->Perspective->query("SELECT p.perspective_name, p.perspective_weight from perspectives p ");
		$i=0;
		foreach($perspectivesc as $persp):
			$perspectivec[$i]=array('value'=>$persp['p']['perspective_weight'],'params'=>array('name'=>$persp['p']['perspective_name']));
		$i++;
			endforeach;
		$this->FusionCharts->addChartData
			(
				'Pie3D Chart',
				$perspectivec
			);
	}

  function createxml(){
$my_file = WWW_ROOT . 'files/sample.xml';
$handle = fopen($my_file, 'w') or die('Cannot open file:  '.$my_file); //open file for writing ('w','r','a')...


//which chart to process
$id =  $_POST['chart_id'];
$this->set('id',$id);
$this->set('handle',$handle);

}
/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Perspective->id = $id;
		if (!$this->Perspective->exists()) {
			throw new NotFoundException(__('Invalid perspective'));
		}
		$this->set('perspective', $this->Perspective->read(null, $id));
	}
	public function showrelated($id = null) {
		$this->Perspective->id = $id;
		if (!$this->Perspective->exists()) {
			throw new NotFoundException(__('Invalid perspective'));
		}
		$this->set('perspective', $this->Perspective->read(null, $id));
	}

	public function downview($id = null) {
		$this->Perspective->id = $id;
		if (!$this->Perspective->exists()) {
			throw new NotFoundException(__('Invalid perspective'));
		}
		$this->set('perspective', $this->Perspective->read(null, $id));
	}
	
/**
 * add method
 *
 * @return void
 *///$this->Session->setFlash(__($this->request->data('Perspective.perspective_weight')));
	public function add() {
		if ($this->request->is('post')) {
			$this->Perspective->create();
                        $weight = $this->request->data('Perspective.perspective_weight');
                        if($weight <= 40 & $weight >= 10){
			      if($this->Perspective->calculateTheWeight($weight)){
			          if ($this->Perspective->save($this->request->data)) {
					$this->Session->setFlash(__('The perspective has been saved'));
					$this->redirect(array('action' => 'index'));
				} else {$this->Session->setFlash(__('The perspective could not be saved. Please, try again.'));}
			}else{$this->Session->setFlash(__('The perspective could not be grater than 100. Please, try again.'));}
		}else{$this->Session->setFlash(__('The perspective could not be grater than 40 or could not be less than 20'));}
                     
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
		$this->Perspective->id = $id;
		if (!$this->Perspective->exists()) {
			throw new NotFoundException(__('Invalid perspective'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			 $weight = $this->request->data('Perspective.perspective_weight');
                        if($weight <= 40 & $weight >= 10){
				if($this->Perspective->calculateTheEditWeight($weight,$id)){
					if ($this->Perspective->save($this->request->data)) {
					$this->Session->setFlash(__('The perspective has been saved'));
					$this->redirect(array('action' => 'index'));
					} else {$this->Session->setFlash(__('The perspective could not be saved. Please, try again.'));}
				}else{$this->Session->setFlash(__('The perspective could not be grater than 100. Please, try again.'));}
			}else{$this->Session->setFlash(__('The perspective could not be grater than 40 or could not be less than 20'));}
		} else {$this->request->data = $this->Perspective->read(null, $id);}
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
		$this->Perspective->id = $id;
		if (!$this->Perspective->exists()) {
			throw new NotFoundException(__('Invalid perspective'));
		}
		if ($this->Perspective->delete()) {
			$this->Session->setFlash(__('Perspective deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Perspective was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
