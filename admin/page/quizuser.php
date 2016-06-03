<?php
class page_quizuser extends Page{
	public $title='Quiz';
	function init(){
		parent::init();
		$this->add('CRUD')->setModel('quizuser');
		$this->add('CRUD')->setModel('catagory');
		
		$this->add('CRUD')->setModel('question');
		$this->add('CRUD')->setModel('answer');
	}
}