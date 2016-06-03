<?php


class page_banking extends Page {

    public $title='Loans';

    public $mdl_agreement = null;

    function init() {
        parent::init();
        $this->app->stickyGET('contact_id');
    }

    function page_index(){
    	$this->app->redirect('./1');
    }

     function page_1(){
     	$this->add('View_Info')->set('Loan Available');
     	// $this->add('HelloWorld');
     	$bs = $this->add('ButtonSet');
     	$bs->add('Button')->set('Repay All At Once')->link('../2',['type'=>'single']);
     	$bs->add('Button')->set('Regular Repayments')->link('../2',['type'=>'multiple']);
    }

    function page_2(){
        $mdl = $this->app->auth->model->ref('Agreement');
        $mdl->addCondition('type',$this->app->stickyGET('type')); 

        if($_GET['type'] == 'Single'){
            $mdl->getElement('next_due_date')->editable('false');
            $mdl->getElement('next_due_amount')->editable(false);
            $mdl->getElement('next_due_duration')->editable(false);
        } 
        $mdl->addCondition('contact_id',$_GET['contact_id']);
        $frm = $this->add('Form');
        $frm->setModel($mdl);

        $frm->addSubmit('Sanction');
        $frm->onSubmit(function($frm){
            $frm->save();
            return $frm->js()->redirect('../3',['agreement_id'=>$frm->model->id]);
        });
    }

    function page_3(){
 		$mdl = $this->app->auth->model->ref('Agreement');
        $mdl->load($this->app->stickyGET('agreement_id'));

        if($mdl['is_sanctioned']){
            $this->add('View_Error')->set('Loan have been already sanctioned');
            return;
        }
            $this->add('View_Info')->set('Loan terms have been followed for sanctioned first');

            $bs = $this->add('ButtonSet');

            $bs->add('Button')
            ->set('Already Sanctioned')
            ->onClick(function($b)use($mdl){
                $mdl->accept();
                return $this->js()->redirect('/');
            });

            $bs->add('Button')->set('Email Contact a link');
    }
}
