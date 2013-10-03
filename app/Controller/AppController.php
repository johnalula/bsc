<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package       app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {
	var $helpers = array('Form', 'Html', 'Session', 'Js', 'Usermgmt.UserAuth', 'MenuBuilder.MenuBuilder');
		public $components = array('Cookie','Session','RequestHandler', 'Usermgmt.UserAuth');
		function beforeFilter(){
			 
			$this->userAuth();
                        $this->_setLanguage();
		}
		private function userAuth(){
			$this->UserAuth->beforeFilter($this);
		}
   private function _setLanguage() {
        //if the cookie was previously set, and Config.language has not been set
        //write the Config.language with the value from the Cookie
            if ($this->Cookie->read('lang') && !$this->Session->check('Config.language')) {
                $this->Session->write('Config.language', $this->Cookie->read('lang'));
            } 
            //if the user clicked the language URL 
            else if (   isset($this->params['language']) && 
                ($this->params['language'] !=  $this->Session->read('Config.language'))
                        ) {
                //then update the value in Session and the one in Cookie
                $this->Session->write('Config.language', $this->params['language']);
                $this->Cookie->write('lang', $this->params['language'], false, '20 days');
            }
        }
        //override redirect
        public function redirect( $url, $status = NULL, $exit = true ) {
                if (!isset($url['language']) && $this->Session->check('Config.language')) {
                        $url['language'] = $this->Session->read('Config.language');
                }
                parent::redirect($url,$status,$exit);
        }


}

