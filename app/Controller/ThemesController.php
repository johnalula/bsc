<?php
App::uses('AppController', 'Controller');
/**
 * Themes Controller
 *
 * @property Theme $Theme
 */
class ThemesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Theme->recursive = 0;
		$this->set('themes', $this->paginate());
	}
	public function show(){
		$this->Theme->recursive = 0;
		$this->set('themes', $this->paginate());
	}
	public function exportxls() {
                $this->recursive = 1;
		$data = $this->Theme->find('all');
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
		$this->Theme->id = $id;
		if (!$this->Theme->exists()) {
			throw new NotFoundException(__('Invalid theme'));
		}
		$this->set('theme', $this->Theme->read(null, $id));
	}
 	public function showrelated($id = null){
		$this->Theme->id = $id;
		if (!$this->Theme->exists()) {
			throw new NotFoundException(__('Invalid theme'));
		}
		$this->set('theme', $this->Theme->read(null, $id));
	}
	public function downview($id = null) {
		$this->Theme->id = $id;
		if (!$this->Theme->exists()) {
			throw new NotFoundException(__('Invalid theme'));
		}
		$this->set('theme', $this->Theme->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Theme->create();
			if ($this->Theme->save($this->request->data)) {
				$this->Session->setFlash(__('The theme has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The theme could not be saved. Please, try again.'));
			}
		}
		$objectives = $this->Theme->Objective->find('list');
		$this->set(compact('objectives'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Theme->id = $id;
		if (!$this->Theme->exists()) {
			throw new NotFoundException(__('Invalid theme'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Theme->save($this->request->data)) {
				$this->Session->setFlash(__('The theme has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The theme could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Theme->read(null, $id);
		}
		$objectives = $this->Theme->Objective->find('list');
		$this->set(compact('objectives'));
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
		$this->Theme->id = $id;
		if (!$this->Theme->exists()) {
			throw new NotFoundException(__('Invalid theme'));
		}
		if ($this->Theme->delete()) {
			$this->Session->setFlash(__('Theme deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Theme was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
