<?php


class page_banking extends Page {

    public $title='Take a Loan';

    function init() {
        parent::init();

        $this->app->stickyGET('user_id');
    }

    // function page_index(){
    // 	$this->app->redirect('./1');
    // }

}
