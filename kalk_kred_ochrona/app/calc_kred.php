<?php
require_once dirname(__FILE__).'\..\config.php';
include _ROOT_PATH.'/app/security/check.php';

$kwota=$_REQUEST['kwota'];
$lat=$_REQUEST['lat'];
$oprocentowanie=$_REQUEST['oprocentowanie'];

if( !(isset($kwota) && isset($lat) && isset($oprocentowanie))) {
	$messages[]="Błędne wywołanie aplikacji. Brak jednego z parametrów.";
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

if(empty($messages)){
	if(!is_numeric($kwota)){
		$messages[]="Kwota kredytu nie jest liczbą całkowita";
	}
	
	if(!is_numeric($lat)){
		$messages[]="Ilość lat kredytu nie jest liczbą całkowita";
	}
	
	if(!is_numeric($oprocentowanie)){
		$messages[]="Oprocentowanie nie jest liczbą całkowita";
	}
}

if(empty($messages)){
	
	$kwota=intval($kwota);
	$lat=intval($lat);
	$oprocentowanie=intval($oprocentowanie);
	
	$result=($kwota/($lat*12))*(($oprocentowanie*0.01)+1);
}	

include 'calc_kred_view.php';