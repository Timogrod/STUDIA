<?php
require_once dirname(__FILE__).'\..\config.php';

include _ROOT_PATH.'\app\security\check.php';

function getParams(&$kwota, &$lat, &$oprocentowanie){
	
	$kwota=isset($_REQUEST['kwota']) ? $_REQUEST['kwota'] : null;
	$lat=isset($_REQUEST['lat']) ? $_REQUEST['lat'] : null;
	$oprocentowanie=isset($_REQUEST['oprocentowanie']) ? $_REQUEST['oprocentowanie'] : null;

}

function validate(&$kwota, &$lat, &$oprocentowanie, &$messages){
		
	if( !(isset($kwota) && isset($lat) && isset($oprocentowanie))) {
		//$messages[]="Błędne wywołanie aplikacji. Brak jednego z parametrów.";
		return false;
	}

	if($kwota==""){
		$messages[]="Nie podano kwoty kredytu";
	}

	if($lat==""){
		$messages[]="Nie podano lat kredytu";
	}

	if($oprocentowanie==""){
		$messages[]="Nie podano oprocentowanie kredytu";
	}
	
	if(count($messages)!=0) return false;
	
	if(!is_numeric($kwota)){
		$messages[]="Kwota kredytu nie jest liczbą całkowita";
	}
	
	if(!is_numeric($lat)){
		$messages[]="Ilość lat kredytu nie jest liczbą całkowita";
	}
	
	if(!is_numeric($oprocentowanie)){
		$messages[]="Oprocentowanie nie jest liczbą całkowita";
	}

	if(count($messages)!=0) return false;
	else return true;
}

function process(&$kwota, &$lat, &$oprocentowanie, &$messages, &$result){	
	global $role;
	
	if($role=='admin'){
		$kwota=intval($kwota);
		$lat=intval($lat);
		$oprocentowanie=intval($oprocentowanie);
	
		$result=($kwota/($lat*12))*(($oprocentowanie*0.01)+1);
	}
	else{
		$messages[]="Nie posiadasz uprawnien admina";
	}
}	

$kwota=null;
$lat=null;
$oprocentowanie=null;
$result=null;
$messages=Array();
$hide_intro=true;

getParams($kwota,$lat,$oprocentowanie);
if(validate($kwota,$lat,$oprocentowanie,$messages)){
	process($kwota,$lat,$oprocentowanie,$messages,$result);
}

$page_title="Kalkulator";
$page_description="Chcesz policzyć rate?";
$page_header="Nasz kalkulator Ci to umożliwia w jednym kliknięciu";
$page_footer="Treść stopki";

include 'calc_kred_view.php';