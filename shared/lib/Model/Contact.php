<?php

class Model_Contact extends SQL_Model {
    public $table='contact';

    function init() {
        parent::init();

        $this->addField('name');
        $this->addField('email');
        $this->addField('address');
        $this->addField('phone');
        $this->hasOne('User');

        $this->add('dynamic_model/Controller_AutoCreator');
    }
}
