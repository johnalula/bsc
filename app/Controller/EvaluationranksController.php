<?php
App::uses('AppController', 'Controller');
/**
 * Evaluationranks Controller
 *
 * @property Evaluationrank $Evaluationrank
 */
class EvaluationranksController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Evaluationrank->recursive = 0;
		$this->set('evaluationranks', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Evaluationrank->id = $id;
		if (!$this->Evaluationrank->exists()) {
			throw new NotFoundException(__('Invalid evaluationrank'));
		}
		$this->set('evaluationrank', $this->Evaluationrank->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Evaluationrank->create();
			if ($this->Evaluationrank->save($this->request->data)) {
				$this->Session->setFlash(__('The evaluationrank has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The evaluationrank could not be saved. Please, try again.'));
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
		$this->Evaluationrank->id = $id;
		if (!$this->Evaluationrank->exists()) {
			throw new NotFoundException(__('Invalid evaluationrank'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Evaluationrank->save($this->request->data)) {
				$this->Session->setFlash(__('The evaluationrank has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The evaluationrank could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Evaluationrank->read(null, $id);
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
		$this->Evaluationrank->id = $id;
		if (!$this->Evaluationrank->exists()) {
			throw new NotFoundException(__('Invalid evaluationrank'));
		}
		if ($this->Evaluationrank->delete()) {
			$this->Session->setFlash(__('Evaluationrank deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Evaluationrank was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
