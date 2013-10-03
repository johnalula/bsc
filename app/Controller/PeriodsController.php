<?php
App::uses('AppController', 'Controller');
/**
 * Periods Controller
 *
 * @property Period $Period
 */
class PeriodsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Period->recursive = 0;
		$this->set('periods', $this->paginate());
	}
	public function getFromTargetByYearAndByOfficeId() {
		
		$periodss = $this->Period->query('SELECT p.id, p.period_name, t.period_id from periods p, targets t where p.id = t.period_id and t.year = '.$this->request->data['Report']['year_id'].' and t.office_id = '.$this->UserAuth->getUserOfficeId());
		$periods = array();
 		foreach( $periodss as $period ):
                  $periods[$period['p']['id']]= $period['p']['period_name'];
		endforeach;
		$this->set('periods',$periods);
		$this->layout = 'ajax';
  
	}
	
/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Period->id = $id;
		if (!$this->Period->exists()) {
			throw new NotFoundException(__('Invalid period'));
		}
		$this->set('period', $this->Period->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Period->create();
			if ($this->Period->save($this->request->data)) {
				$this->Session->setFlash(__('The period has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The period could not be saved. Please, try again.'));
			}
		}
		$frequencies = $this->Period->Frequency->find('list');
		$this->set(compact('frequencies'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Period->id = $id;
		if (!$this->Period->exists()) {
			throw new NotFoundException(__('Invalid period'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Period->save($this->request->data)) {
				$this->Session->setFlash(__('The period has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The period could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Period->read(null, $id);
		}
		$frequencies = $this->Period->Frequency->find('list');
		$this->set(compact('frequencies'));
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
		$this->Period->id = $id;
		if (!$this->Period->exists()) {
			throw new NotFoundException(__('Invalid period'));
		}
		if ($this->Period->delete()) {
			$this->Session->setFlash(__('Period deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Period was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
