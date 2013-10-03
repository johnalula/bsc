<?php
App::uses('AppController', 'Controller');
/**
 * Frequencies Controller
 *
 * @property Frequency $Frequency
 */
class FrequenciesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Frequency->recursive = 0;
		$this->set('frequencies', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Frequency->id = $id;
		if (!$this->Frequency->exists()) {
			throw new NotFoundException(__('Invalid frequency'));
		}
		$this->set('frequency', $this->Frequency->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Frequency->create();
			if ($this->Frequency->save($this->request->data)) {
				$this->Session->setFlash(__('The frequency has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The frequency could not be saved. Please, try again.'));
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
		$this->Frequency->id = $id;
		if (!$this->Frequency->exists()) {
			throw new NotFoundException(__('Invalid frequency'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Frequency->save($this->request->data)) {
				$this->Session->setFlash(__('The frequency has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The frequency could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Frequency->read(null, $id);
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
		$this->Frequency->id = $id;
		if (!$this->Frequency->exists()) {
			throw new NotFoundException(__('Invalid frequency'));
		}
		if ($this->Frequency->delete()) {
			$this->Session->setFlash(__('Frequency deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Frequency was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
