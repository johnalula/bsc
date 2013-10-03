<?php
App::uses('AppController', 'Controller');
/**
 * ObjectivesOffices Controller
 *
 * @property ObjectivesOffice $ObjectivesOffice
 */
class ObjectivesOfficesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->ObjectivesOffice->recursive = 0;
		$this->set('objectivesOffices', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->ObjectivesOffice->id = $id;
		if (!$this->ObjectivesOffice->exists()) {
			throw new NotFoundException(__('Invalid objectives office'));
		}
		$this->set('objectivesOffice', $this->ObjectivesOffice->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ObjectivesOffice->create();
			if ($this->ObjectivesOffice->save($this->request->data)) {
				$this->Session->setFlash(__('The objectives office has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The objectives office could not be saved. Please, try again.'));
			}
		}
		$offices = $this->ObjectivesOffice->Office->find('list');
		$objectives = $this->ObjectivesOffice->Objective->find('list');
		$this->set(compact('offices', 'objectives'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->ObjectivesOffice->id = $id;
		if (!$this->ObjectivesOffice->exists()) {
			throw new NotFoundException(__('Invalid objectives office'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->ObjectivesOffice->save($this->request->data)) {
				$this->Session->setFlash(__('The objectives office has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The objectives office could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->ObjectivesOffice->read(null, $id);
		}
		$offices = $this->ObjectivesOffice->Office->find('list');
		$objectives = $this->ObjectivesOffice->Objective->find('list');
		$this->set(compact('offices', 'objectives'));
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
		$this->ObjectivesOffice->id = $id;
		if (!$this->ObjectivesOffice->exists()) {
			throw new NotFoundException(__('Invalid objectives office'));
		}
		if ($this->ObjectivesOffice->delete()) {
			$this->Session->setFlash(__('Objectives office deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Objectives office was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
