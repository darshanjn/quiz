<?php
class Model_question extends SQL_Model{
	public $table='question';
	function init(){
		parent::init();
		$this->hasOne('catagory');
		$this->hasMany('answer');
		$this->addField('name');
		$this->addField('A');
		$this->addField('B');
		$this->addField('C');
		$this->addField('D');
		$this->addField('answer1')->enum(['a','b','c','d']);
		$this->addField('correct_answer');

		$this->add('dynamic_model/Controller_AutoCreator');
	}
}