<?php


class page_contact extends Page {

    public $title='Contacts';

    function init() {
        parent::init();
		$contact = $this->add('CRUD');
		$contact->setModel($this->app->auth->model->ref('Contact'));
		$contact->grid->addColumn('link','banking',['descr'=>'Banking','id_field'=>'contact_id','page'=>'banking']);
		
    }

}
