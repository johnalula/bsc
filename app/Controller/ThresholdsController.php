<?php
App::uses('AppController', 'Controller');
/**
 * Thresholds Controller
 *
 * @property Threshold $Threshold
 */
class ThresholdsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Threshold->recursive = 0;
		$this->set('thresholds', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Threshold->id = $id;
		if (!$this->Threshold->exists()) {
			throw new NotFoundException(__('Invalid threshold'));
		}
		$this->set('threshold', $this->Threshold->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Threshold->create();
			//$this->Threshold->background = $this->request->data['Threshold']['background_color'];
			$file = $this->data['Threshold']['background_color']; //put the data into a var for easy use

                        $ext = substr(strtolower(strrchr($file['name'], '.')), 1); //get the extension
                        $arr_ext = array('jpg', 'jpeg', 'gif','png'); //set allowed extensions

                        //only process if the extension is valid
                        if(in_array($ext, $arr_ext))
                        {
                                //do the actual uploading of the file. First arg is the tmp name, second arg is 
                                //where we are putting it
				$file_name=time().$file['name'];
                                move_uploaded_file($file['tmp_name'], WWW_ROOT . 'img/thresholds/' . $file_name);

                                //prepare the filename for database entry
                                $this->request->data['Threshold']['background'] = $file_name;
				 
                        }
			if ($this->Threshold->save($this->request->data)) {
				$this->Session->setFlash(__('The threshold has been saved'. $this->Threshold->background));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The threshold could not be saved. Please, try again.'));
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
		$this->Threshold->id = $id;
		if (!$this->Threshold->exists()) {
			throw new NotFoundException(__('Invalid threshold'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			$file = $this->data['Threshold']['background']; //put the data into a var for easy use

                        $ext = substr(strtolower(strrchr($file['name'], '.')), 1); //get the extension
                        $arr_ext = array('jpg', 'jpeg', 'gif','png'); //set allowed extensions

                        //only process if the extension is valid
                        if(in_array($ext, $arr_ext))
                        {
                                //do the actual uploading of the file. First arg is the tmp name, second arg is 
                                //where we are putting it
				$file_name=time().$file['name'];
                                move_uploaded_file($file['tmp_name'], WWW_ROOT . 'img/thresholds/' . $file_name);

                                //prepare the filename for database entry
                                //$this->request->data['Threshold']['background'] = $file_name;
				 
                        }
			if ($this->Threshold->save($this->request->data)) {
				$this->Session->setFlash(__('The threshold has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The threshold could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Threshold->read(null, $id);
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
		$this->Threshold->id = $id;
		if (!$this->Threshold->exists()) {
			throw new NotFoundException(__('Invalid threshold'));
		}
		if ($this->Threshold->delete()) {
			$this->Session->setFlash(__('Threshold deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Threshold was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
