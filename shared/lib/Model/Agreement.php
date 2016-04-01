<?php

class Model_Agreement extends SQL_Model {
    public $table='agreement';

    function init() {
        parent::init();

        $this->hasOne('User');
        $this->hasOne('Contact');

        $this->addField('type')->enum(['Single','Multiple']);
        $this->addField('amount')->type('money');
        $this->addField('date')->type('date')->defaultValue('Y-m-d');
        $this->addField('next_due_date')->type('date')->defaultValue('Y-m-d',strtotime('+1 month'));
        $this->addField('next_due_amount')->type('money');
        $this->addField('next_due_duration')->enum(['monthly','weekly']);
        
        $this->addField('is_sanctioned')->type('boolean')->editable(false);

        $this->add('dynamic_model/Controller_AutoCreator');
    }

    function accept(){
        $this['is_sanctioned']=true;
        $this->save();
    }
}
