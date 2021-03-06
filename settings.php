<?php
define('CLASS_PATH', dirname(__FILE__).'/classes/');
define('FRONT', dirname(__FILE__).'/front/');
define('PROJECT','ciandt/');
define('BASE_URI', (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on' ? 'https' :'http').'://'. $_SERVER['HTTP_HOST'].'/'.PROJECT);
define('ASSETS', BASE_URI.'/assets/');
include CLASS_PATH.'class_cashmachine.php';
session_start();
//var
//Array of notes and coin values:
//let's set everything to 10
$cashin = array(
	'1' => 100,
	'5' => 100,
	'10' => 100,
	'50' => 100,
	'100' => 100,
	'500' => 100,
	'1000' => 100,
	'5000' => 100,
	'10000' => 100,
	);

//KISS principle: no database use for this test
//for further improvement
//$_SESSION['cashmachine'] = (isset($_SESSION['cashmachine']) ? $_SESSION['cashmachine'] : $cashin);
$_SESSION['cashmachine'] = $cashin;

$Cashmachine = new cashmachine($_SESSION['cashmachine']);


$displayResults = isset($_SESSION['result']) ? 'block': 'none';
$results = isset($_SESSION['result']) ? '<tr>'.$_SESSION['result'].'</tr>': '';


$withdraw = isset( $_SESSION['withdraw']) ? $_SESSION['withdraw'] : 0;
