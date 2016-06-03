<?php
class View_fquestion extends View{
	public $catid=1;
	function init(){
		parent::init();
		//$m=$this->add('View_fquestion');
		//$m->setModel('question');
		
		 $score=0;
        $qquestions=$this->add('Model_question')->addCondition('catagory_id',$this->catid);
        $qquestions->tryLoadAny();
    
        $form=$this->add('Form',null,null,['form/stacked']);
        foreach ($qquestions as $qmodel)
        {
           $form->addField('Radio',$qmodel->id,$qmodel['name'])->setValueList(['1'=>$qmodel['A'],
            '2'=>$qmodel['B'],
            '3'=>$qmodel['C'],
            '4'=>$qmodel['D']]);
        }
        
		
        $btnobj=$form->addSubmit('Submit',null,'btn');
        $btnobj->addClass('atk-swatch-green');
        $form->onSubmit(function () use ($form,$btnobj,$qquestions,$score){
            foreach ($qquestions as $question) {
           
           // if($form[$question->id]==$question['correct_answer'])
            if($question['id']==$question['correct_answer'])
            {
           throw new Exception("Error Processing Request", 1);
           
            $score=$score+1;

            }
           
        }
            return $this->js()->univ()->alert('correct answers => '.$score);
    });

    } 
    function defaultTemplate()
    {
        return (['question']);
    }
}