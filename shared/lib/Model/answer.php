<?php
class Model_answer extends SQL_Model{
	public $table='answer';
	function init(){
	parent::init();

	$this->hasOne('question');
	$this->addField('correct_answer');

	$this->add('dynamic_model/Controller_AutoCreator');
	}
}