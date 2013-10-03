<?php
App::uses('AppController', 'Controller');
/**
 * InitiativesObjectives Controller
 *
 * @property InitiativesObjective $InitiativesObjective
 */
class InitiativesObjectivesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->InitiativesObjective->recursive = 0;
		$this->set('initiativesObjectives', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->InitiativesObjective->id = $id;
		if (!$this->InitiativesObjective->exists()) {
			throw new NotFoundException(__('Invalid initiatives objective'));
		}
		$this->set('initiativesObjective', $this->InitiativesObjective->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->InitiativesObjective->create();
			if ($this->InitiativesObjective->save($this->request->data)) {
				$this->Session->setFlash(__('The initiatives objective has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The initiatives objective could not be saved. Please, try again.'));
			}
		}
		$initiatives = $this->InitiativesObjective->Initiative->find('list');
		$objectives = $this->InitiativesObjective->Objective->find('list');
		$this->set(compact('initiatives', 'objectives'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->InitiativesObjective->id = $id;
		if (!$this->InitiativesObjective->exists()) {
			throw new NotFoundException(__('Invalid initiatives objective'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->InitiativesObjective->save($this->request->data)) {
				$this->Session->setFlash(__('The initiatives objective has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The initiatives objective could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->InitiativesObjective->read(null, $id);
		}
		$initiatives = $this->InitiativesObjective->Initiative->find('list');
		$objectives = $this->InitiativesObjective->Objective->find('list');
		$this->set(compact('initiatives', 'objectives'));
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
		$this->InitiativesObjective->id = $id;
		if (!$this->InitiativesObjective->exists()) {
			throw new NotFoundException(__('Invalid initiatives objective'));
		}
		if ($this->InitiativesObjective->delete()) {
			$this->Session->setFlash(__('Initiatives objective deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Initiatives objective was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
