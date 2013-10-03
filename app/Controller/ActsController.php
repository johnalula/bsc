<?php
App::uses('AppController', 'Controller');
/**
 * Acts Controller
 *
 * @property Act $Act
 */
class ActsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Act->recursive = 0;
		$this->set('acts', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Act->id = $id;
		if (!$this->Act->exists()) {
			throw new NotFoundException(__('Invalid act'));
		}
		$this->set('act', $this->Act->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Act->create();
			if ($this->Act->save($this->request->data)) {
				$this->Session->setFlash(__('The act has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The act could not be saved. Please, try again.'));
			}
		}
		$perspectives = $this->Act->Perspective->find('list');
		$this->set(compact('perspectives'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Act->id = $id;
		if (!$this->Act->exists()) {
			throw new NotFoundException(__('Invalid act'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Act->save($this->request->data)) {
				$this->Session->setFlash(__('The act has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The act could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Act->read(null, $id);
		}
		$perspectives = $this->Act->Perspective->find('list');
		$this->set(compact('perspectives'));
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
		$this->Act->id = $id;
		if (!$this->Act->exists()) {
			throw new NotFoundException(__('Invalid act'));
		}
		if ($this->Act->delete()) {
			$this->Session->setFlash(__('Act deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Act was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
