<?php

class Admin extends App_Admin {

    function init() {
        parent::init();

        $this->dbconnect();
        $this->auth = $this->add('Auth');
        $this->auth->setModel('User','name');
        $this->auth->check();
        $this->api->menu->addItem('Dashboard', '/');
        $this->api->menu->addItem('Contacts', 'contact');
        $this->api->menu->addMenuItem('/logout', 'Logout');

        // $m=$this->app->layout->add('Menu_Horizontal',null,'Top_Menu');
        // $user=$m->addMenu('User');
    }
}
