<?php
//define('_SERVER_NAME', 'localhost');
//define('_SERVER_URL', 'http://'._SERVER_NAME);
//define('_APP_ROOT', '/kalkulator');
//define('_APP_URL', _SERVER_URL._APP_ROOT);
//define('_ROOT_PATH', dirname(__FILE__));

//function out(&$param){
//	if(isset($param)){
//		echo $param;
//	}
//}

//require_once 'Config.class.php';

//$conf = new Config();

$conf->server_name = 'localhost:80';
$conf->server_url = 'http://'.$conf->server_name;
$conf->app_root = '/kalkulator';
$conf->action_root = $conf->app_root.'/ctrl.php?action=';

$conf->action_url = $conf->server_url.$conf->action_root;
$conf->app_url = $conf->server_url.$conf->app_root;
$conf->root_path = dirname(__FILE__);