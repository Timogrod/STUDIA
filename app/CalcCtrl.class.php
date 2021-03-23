<?php

require_once $conf->root_path.'/lib/smarty/Smarty.class.php';
require_once $conf->root_path.'/lib/Messages.class.php';
require_once $conf->root_path.'/app/CalcForm.class.php';
require_once $conf->root_path.'/app/CalcResult.class.php';

class CalcCtrl {
    private $msgs;
    private $form;
    private $result;

    public function __construct(){
        $this->msgs = new Messages();
		$this->form = new CalcForm();
		$this->result = new CalcResult();
	}

    public function getParams(){
		$this->form->x = isset($_REQUEST ['x']) ? $_REQUEST ['x'] : null;
		$this->form->y = isset($_REQUEST ['y']) ? $_REQUEST ['y'] : null;
		$this->form->op = isset($_REQUEST ['op']) ? $_REQUEST ['op'] : null;
	}

    public function validate() {
		if (! (isset ( $this->form->x ) && isset ( $this->form->y ) && isset ( $this->form->op ))) {
			return false; 
		} else { 
			$this->hide_intro = true; 
		}
		
		if ($this->form->x == "") {
			$this->msgs->addError('Nie podano kwoty kredytu');
		}
		if ($this->form->y == "") {
			$this->msgs->addError('Nie podano lat kredytu');
		}
		if ($this->form->op == "") {
			$this->msgs->addError('Nie podano oprocentowania kredytu');
		}
		
		if (! $this->msgs->isError()) {
			
			if (! is_numeric ( $this->form->x )) {
				$this->msgs->addError('Kwota kredytu nie jest liczba calkowita');
			}
			
			if (! is_numeric ( $this->form->y )) {
				$this->msgs->addError('Lata kredytu nie sa liczba calkowita');
			}

			if (! is_numeric ( $this->form->op )) {
				$this->msgs->addError('Oprocentowanie kredytu nie jest liczbą całkowitą');
			}
		}
		
		return ! $this->msgs->isError();
	}

    public function process(){

		$this->getparams();
		
		if ($this->validate()) {
				
			$this->form->x = intval($this->form->x);
			$this->form->y = intval($this->form->y);
			$this->form->op = intval($this->form->op);
			$this->msgs->addInfo('Parametry poprawne.');
				
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
	
			$this->msgs->addInfo('Wykonano obliczenia.');
		}
		
		$this->generateView();
	}
	
	
	public function generateView(){
		global $conf;
		
		$smarty = new Smarty();
		$smarty->assign('conf',$conf);
		
		$smarty->assign('page_title','Kalkulator Kredytowy');
		$smarty->assign('page_description','Kalkulator do liczenia rat kredytu');
		$smarty->assign('page_header','Kalkulator kredytowy');
		
		$smarty->assign('msgs',$this->msgs);
		$smarty->assign('form',$this->form);
		$smarty->assign('res',$this->result);
		
		$smarty->display($conf->root_path.'/app/CalcView.html');
	}
}