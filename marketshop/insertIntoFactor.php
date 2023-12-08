<?php

include 'config.php';
include 'lib/db.php';


connectToDatabase();

//var_dump($_POST);

//if(count($_POST)){


	
	addToFactor($_GET['username'], $_GET['discountID']);
	
	$us="__$_GET[username]";
	$F=getLastFactorID($us);
	$factorID=$F['factorID'];
	

	


	
	inssertIntoMake($username,$factorID);
	


	deleteItemsFromShoppinglistByUsername($_GET['username']);
	//var_dump($_GET);
	
	deleteDiscountByDiscountID($_GET['discountID']);
	header('location:finish.php');
	//exit;
	
//echo  "inserted.";



//}

?>
