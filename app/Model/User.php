<?php
App::uses('AppModel', 'Model');
/**
 * Majoractivity Model
 *
 * @property Measure $Measure
 */
class User extends AppModel {
   var $displayField='first_name';
 function displayField(){
   return User.first_name;
  }

}
