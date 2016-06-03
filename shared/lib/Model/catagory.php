<?php
class Model_catagory extends SQL_Model{
	public $table='catagory';
	function init(){
		parent::init();
		$this->hasMany('question');
		$this->addField('s_no')->type('int');
		$this->addField('name');
		$this->addField('No_of_question')->type('int');
		$this->addField('duration');
		$this->add('dynamic_model/Controller_AutoCreator');
	}
}