<?php
class page_catagory extends Page{
	public $title='catagory';
	function init(){
		parent::init();
		$this->add('View_Success');
		$m = $this->add('View_qcatagory')->setModel('catagory');
	}
}