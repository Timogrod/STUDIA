<?php

//require_once $conf->root_path.'/lib/smarty/Smarty.class.php';
//require_once $conf->root_path.'/lib/Messages.class.php';
//require_once 'CalcForm.class.php';
//require_once 'CalcResult.class.php';


namespace app\controllers;

use app\forms\CalcForm;
use app\transfer\CalcResult;


class CalcCtrl {
    //private $msgs;
    private $form;
    private $result;

    public function __construct(){
        //$this->msgs = new Messages();
		$this->form = new CalcForm();
		$this->result = new CalcResult();
	}

    public function getParams(){
		$this->form->x = getFromRequest('x');
		$this->form->y = getFromRequest('y');
		$this->form->op = getFromRequest('op');
	}

    public function validate() {
		if (! (isset ( $this->form->x ) && isset ( $this->form->y ) && isset ( $this->form->op ))) {
			return false; 
		}
		
		if ($this->form->x == "") {
			getMessages()->addError('Nie podano kwoty kredytu');
		}
		if ($this->form->y == "") {
			getMessages()->addError('Nie podano lat kredytu');
		}
		if ($this->form->op == "") {
			getMessages()->addError('Nie podano oprocentowania kredytu');
		}
		
		if (! getMessages()->isError()) {
			
			if (! is_numeric ( $this->form->x )) {
				getMessages()->addError('Kwota kredytu nie jest liczba calkowita');
			}
			
			if (! is_numeric ( $this->form->y )) {
				getMessages()->addError('Lata kredytu nie sa liczba calkowita');
			}
		}
		
		return ! getMessages()->isError();
	}

    public function action_calcCompute(){

		$this->getparams();
		
		if ($this->validate()) {
				
			$this->form->x = intval($this->form->x);
			$this->form->y = intval($this->form->y);
			$this->form->op = intval($this->form->op);
			getMessages()->addInfo('Parametry poprawne.');
				
			switch ($this->form->op) {
				case '5' :
					$this->result->result = ($this->form->x/(($this->form->y)*12))*((($this->form->op)*0.01)+1);
					$this->result->op_name = '5%';
					break;
				case '10' :
					$this->result->result = ($this->form->x/(($this->form->y)*12))*((($this->form->op)*0.01)+1);
					$this->result->op_name = '10%';
					break;
				case '15' :
					$this->result->result = ($this->form->x/(($this->form->y)*12))*((($this->form->op)*0.01)+1);
					$this->result->op_name = '15%';
					break;
				default :
					$this->result->result = ($this->form->x/(($this->form->y)*12))*((($this->form->op)*0.01)+1);
					$this->result->op_name = '20%';
					break;
			}
	
			getMessages()->addInfo('Wykonano obliczenia.');
		}
		
		$this->generateView();
	}
	
	public function action_CalcShow(){
		getMessages()->addInfo('Witaj w kalkulatorze');
		$this->generateView();
	}

	
	public function generateView(){
		//global $conf;
		
		//$smarty = new Smarty();
		//$smarty->assign('conf',$conf);
		
		getSmarty()->assign('user',unserialize($_SESSION['user']));

		getSmarty()->assign('page_title','Kalkulator Kredytowy');
		getSmarty()->assign('page_description','Kalkulator kredytowy do obliczenia miesiecznej raty kredytu');
		getSmarty()->assign('page_header','Kalkulator kredytowy');
		
		//$smarty->assign('msgs',$this->msgs);
		getSmarty()->assign('form',$this->form);
		getSmarty()->assign('res',$this->result);
		
		getSmarty()->display('CalcView.tpl');
	}
}