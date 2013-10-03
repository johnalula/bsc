<?php
App::uses('AppController', 'Controller');
/**
 * Initiatives Controller
 *
 * @property Initiative $Initiative
 */
class InitiativesController extends AppController {
    var $uses= array ('Initiative','Project');
    public $helpers = array('PhpExcel.PhpExcel');
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Initiative->recursive = 0;
		$this->set('initiatives', $this->paginate());
	}
	public function show() {
		$this->Initiative->recursive = 0;
		$this->set('initiatives', $this->paginate());
	}
     
        function exportxls() {
               
		$this->recursive = 1;
		$data = $this->Initiative->find('all');
		
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
		$this->Initiative->id = $id;
		if (!$this->Initiative->exists()) {
			throw new NotFoundException(__('Invalid initiative'));
		}
		$this->set('initiative', $this->Initiative->read(null, $id));
                $this->set('projects', $this->Project->findByInitiativeId($id));
	}
public function showrelated($id = null) {
		$this->Initiative->id = $id;
		if (!$this->Initiative->exists()) {
			throw new NotFoundException(__('Invalid initiative'));
		}
		$this->set('initiative', $this->Initiative->read(null, $id));
                $this->set('projects', $this->Project->findByInitiativeId($id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Initiative->create();
			if ($this->Initiative->save($this->request->data)) {
				$this->Session->setFlash(__('The initiative has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The initiative could not be saved. Please, try again.'));
			}
		}
		$objectives = $this->Initiative->Objective->find('list');
                $implimenters = $this->Initiative->Office->find('list');
                $owners = $this->Initiative->Office->find('list');
		$this->set(compact('objectives','implimenters','owners'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Initiative->id = $id;
		if (!$this->Initiative->exists()) {
			throw new NotFoundException(__('Invalid initiative'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Initiative->save($this->request->data)) {
				$this->Session->setFlash(__('The initiative has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The initiative could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Initiative->read(null, $id);
		}
		$objectives = $this->Initiative->Objective->find('list');
		 $implimenters = $this->Initiative->Office->find('list');
                $offices = $this->Initiative->Office->find('list');
		$this->set(compact('objectives','implimenters','offices'));
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
		$this->Initiative->id = $id;
		if (!$this->Initiative->exists()) {
			throw new NotFoundException(__('Invalid initiative'));
		}
		if ($this->Initiative->delete()) {
			$this->Session->setFlash(__('Initiative deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Initiative was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
