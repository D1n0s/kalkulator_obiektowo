<?php
// KONTROLER strony kalkulatora
require_once dirname(__FILE__).'/../config.php';
require_once $conf->root_path.'/lib/smarty/Smarty.class.php';
require_once $conf->root_path.'/lib/Messages.class.php';
require_once $conf->root_path.'/app/CalcForm.class.php';
require_once $conf->root_path.'/app/CalcResult.class.php';


class CalcCtrl {

	private $msgs;   //wiadomości dla widoku
	private $form;   //dane formularza (do obliczeń i dla widoku)
	private $result; //inne dane dla widoku

	public function __construct(){
		//stworzenie potrzebnych obiektów
		$this->msgs = new Messages();
		$this->form = new CalcForm();
		$this->result = new CalcResult();
	}
//pobranie parametrów
public function getParams(){
	$this->form->x = isset($_REQUEST ['kw']) ? $_REQUEST ['kw'] : null;
	$this->form->y = isset($_REQUEST ['rt']) ? $_REQUEST ['rt'] : null;
	$this->form->op = isset($_REQUEST ['op']) ? $_REQUEST ['op'] : null;

}

/** 
* @return true jeśli brak błedów, false w przeciwnym wypadku 
*/

//walidacja parametrów z przygotowaniem zmiennych dla widoku
function validate(){

	//sprawdzenie, czy parametry zostały przekazane - jeśli nie to zakończ walidację
	if ( ! (isset($this->form->x) && isset($this->form->y) && isset($this->form->op) ))	return false;	
	
	//parametry przekazane zatem
	//nie pokazuj wstępu strony gdy tryb obliczeń (aby nie trzeba było przesuwać)
	// - ta zmienna zostanie użyta w widoku aby nie wyświetlać całego bloku itro z tłem 



	// sprawdzenie, czy potrzebne wartości zostały przekazane
	if ( $this->form->x == "") $this->msgs->addError('Nie podano liczby 1 ');
	if ( $this->form->y == "") $this->msgs->addError('Nie podano liczby 2 ');
	if ( $this->form->op == "") $this->msgs->addError('Nie podano liczby 3 ');

	//nie ma sensu walidować dalej gdy brak parametrów
	if (! $this->msgs->isError() ) {
			// sprawdzenie, czy $x i $y są liczbami całkowitymi
			if (! is_numeric ( $this->form->x )) {
				$this->msgs->addError('Pierwsza wartość nie jest liczbą całkowitą');
			}
			
			if (! is_numeric ( $this->form->y )) {
				$this->msgs->addError('Druga wartość nie jest liczbą całkowitą');
			}
			if (! is_numeric ( $this->form->op )) {
				$this->msgs->addError('Trzeco=ia wartość nie jest liczbą całkowitą');
			}
	}
	
	return ! $this->msgs->isError();
}
	
// wykonaj obliczenia
public function process(){

	$this->getparams();
	if ($this->validate()) {
	
				//konwersja parametrów na int
			$this->form->x = intval($this->form->x);
			$this->form->y = intval($this->form->y);
			$this->form->op = intval($this->form->op);
			$this->msgs->addInfo('Parametry poprawne.');


	$proc = $this->form->op;
	$kwota = $this->form->x; 
    $raty = $this->form->y;
	//wykonanie operacji
	$procend = $proc / 100;
	$this->result->prowizja = $kwota * $procend;
	$this->result->kwotaend = $kwota +  	$this->result->prowizja;
  $result = $this->result->kwotaend/ $raty;
$this->result->result= round($result,2);

$this->msgs->addInfo('Wykonano obliczenia.');
}
$this->generateView();
}


public function generateView(){
	global $conf;
	
	$smarty = new Smarty();
	$smarty->assign('conf',$conf);
	
	$smarty->assign('page_title','Uś bank');
	$smarty->assign('page_description','Już teraz pożycz na warunek i studiuj dalej ;) tylko że obiektowo');
	$smarty->assign('page_header','Kalkulator rat');
			
	$smarty->assign('msgs',$this->msgs);
	$smarty->assign('form',$this->form);
	$smarty->assign('res',$this->result);
	
	$smarty->display($conf->root_path.'/app/CalcView.html');
  	}
}