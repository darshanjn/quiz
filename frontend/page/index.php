<?php

class page_index extends Page {

    public $title='Dashboard';

    function init() {
        parent::init();
        // $this->add('View_Box')
        //     ->setHTML('Welcome to your new Web App Project. Get started by opening '.
        //         '<b>admin/page/index.php</b> file in your text editor and '.
        //         '<a href="http://book.agiletoolkit.org/" target="_blank">Reading '.
        //         'the documentation</a>.');

        $this->add('CRUD')->setModel('User');
        $this->add('View')->set('dragfj');
        // $gd = $this->add('Grid');
        // $gd->setModel($this->app->auth->model->ref('Agreement'),['contact','amount','next_due_date']);
        // $gd->addColumn('Pay');
        // if($_GET['pay']){
        //     return $this->js()->univ()->dialogURL('Pay');
        // }
    }
}
