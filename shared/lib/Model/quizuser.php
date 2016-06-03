<?php
class Model_quizuser extends SQL_Model{
	Public $table='quizuser';
	function init(){
		parent::init();

		$this->addField('name');
		$this->addField('password')->type('password');


		$this->add('dynamic_model/Controller_AutoCreator');
	}
}