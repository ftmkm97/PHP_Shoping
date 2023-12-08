<?php

include 'config.php';
include 'lib/db.php';


connectToDatabase();
//var_dump($_GET);

//if(count($_POST)){
	// ($productID,$username) 
	//addToShoppingListById(1,1,'mobina','1',1,11000,11000);  /////////////////$_POST khaliye  $_POST['productID']
	$pr=$_GET['productID'];
	$user=$_GET['username'];
	addToShoppingListById($_GET['productID'],$_GET['username'],$_GET['name'],$_GET['price']); 
	$us="__$_GET[username]";
	AddToAdd($us,$pr,$user);
	//var_dump($_POST);
		
		$locat="location: dashboard.php?username=$_GET[username] " ;  
		header($locat);
	
//echo  "inserted.";



//}

?>
