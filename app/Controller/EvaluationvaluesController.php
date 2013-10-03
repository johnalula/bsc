<?php
App::uses('AppController', 'Controller');
/**
 * Evaluationvalues Controller
 *
 * @property Evaluationvalue $Evaluationvalue
 */
class EvaluationvaluesController extends AppController {
public $helpers = array('Js');

/**
 * index method
 *
 * @return void
 */
	public function getByCategory() {
		$is_acadamic = $this->request->data['Evaluationvalue']['is_acadamic'];
		$type = array();
		if($is_acadamic == 1){
		$type = array('self'=>'self','pear'=>'pear','head'=>'head','student'=>'student'); 
		}
		else{
			$type = array('self'=>'self','pear'=>'pear','head'=>'head'); 
		}
		$this->set('type',$type);
		$this->layout = 'ajax';
	}
	public function index() {
		$this->Evaluationvalue->recursive = 0;
		$this->set('evaluationvalues', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Evaluationvalue->id = $id;
		if (!$this->Evaluationvalue->exists()) {
			throw new NotFoundException(__('Invalid evaluationvalue'));
		}
		$this->set('evaluationvalue', $this->Evaluationvalue->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Evaluationvalue->create();
			if ($this->Evaluationvalue->save($this->request->data)) {
				$this->Session->setFlash(__('The evaluationvalue has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The evaluationvalue could not be saved. Please, try again.'));
			}
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
		$this->Evaluationvalue->id = $id;
		if (!$this->Evaluationvalue->exists()) {
			throw new NotFoundException(__('Invalid evaluationvalue'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Evaluationvalue->save($this->request->data)) {
				$this->Session->setFlash(__('The evaluationvalue has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The evaluationvalue could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Evaluationvalue->read(null, $id);
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
		$this->Evaluationvalue->id = $id;
		if (!$this->Evaluationvalue->exists()) {
			throw new NotFoundException(__('Invalid evaluationvalue'));
		}
		if ($this->Evaluationvalue->delete()) {
			$this->Session->setFlash(__('Evaluationvalue deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Evaluationvalue was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
