<?php
class page_quizuser extends Page{
	public $title='Registration';
	function init(){
		parent::init();
		$model=$this->add('Model_quizuser');
		$m=$this->add('Form');
		$m->setModel('quizuser');
		$m->addSubmit('check');
		$m->onSubmit(function(){
			return $this->js()->univ()->Redirect($this->app->url('catagory'));
			
		});		


		// $m->onSubmit(function()use($m)
		// {
		// 	$m->save();
		// 	$user=$this->add('Model_quizuser')->tryLoadAny('username',$m['username']);
		// 	if ($user->loaded())
		// 	return $this->js()->univ()->alert('no no');
		// 	else
		// 	return $this->js()->univ()->alert('saved');
		// });
	}
}