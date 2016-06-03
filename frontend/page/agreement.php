<?php
class page_agreement extends Page{
	function init(){
		parent::init();

		$this->add('CRUD')->setModel('Agreement');
	}
}