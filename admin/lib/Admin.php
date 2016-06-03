<?php

class Admin extends App_Admin {

    function init() {
        parent::init();

        $this->dbconnect();
        $auth = $this->add('Auth');
        $auth->setModel('quizuser','name','password');
        //$auth->setModel('Contact','name',);
        $auth->allowPage(['quizuser']);
        $auth->check();
        
        $this->api->menu->addItem('Dashboard', '/');
        $this->api->menu->addItem('Contact', 'contact');
        $this->api->menu->addMenuItem('/logout', 'Logout');

        // $m=$this->app->layout->add('Menu_Horizontal',null,'Top_Menu');
        // $user=$m->addMenu('User');
    }
}
