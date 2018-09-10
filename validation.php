<?php
/**
 * cashmachine
 * @filename: validation.php
 *
 *
 * @author: gregory.staimphon@gmail.com
 *
 * @date: 2019-09-10
 */

include 'settings.php';
//Basic validation


if(isset($_POST['withdraw'])){
	$withdraw = intval($_POST['withdraw']);
	 $_SESSION['result'] =$Cashmachine->withdraw($withdraw);
}


//redirect to the main page with the result
header('Location:index.php' );