<?php
class View_qcatagory extends Lister{
	function init(){
		parent::init();
		
		//throw new Exception("Error Processing Request", 1);	
		//throw new Exception("Error Processing Request", 1);	
		
     	$button=$this->add('Button',null,'cat1')->set('name');	
     	$button->link($this->app->url('quizuser'.['id'=>$this->app->id]));
     


	}
	function defaultTemplate(){
		return ['qcatagory'];
	}
}
