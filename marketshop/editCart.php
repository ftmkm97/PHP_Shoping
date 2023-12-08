<?php

include 'config.php';
include 'lib/db.php';


connectToDatabase();
//var_dump($_GET);
//echo"ppppp";
//var_dump($_POST);


	$num=$_POST['quantity'];
	$ID=$_GET['productID'];
	$ID2=$_GET['productID'];
	 ////number nmiggire
		//	editShoppingList($_GET['productID'],$_GET['username'],20);  //ino miggire
	$numProduct=getNumberOfProduct($ID);
	
//	var_dump($numProduct);
	$num3=$numProduct[0]['number'];
//	var_dump($num3);
	
	
	$num2=$num3-$num ;
	
	//var_dump($num2);
if($num2 >= 0){
	editShoppingList($_GET['productID'],$_GET['username'],$_POST['quantity']);
	changeNumberProducts($num2,$ID2);
}	
		$locat="location: cart.php?username=$_GET[username] " ;  
		header($locat);
	



//}

?>
