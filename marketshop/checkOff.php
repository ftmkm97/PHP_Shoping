<?php 
include 'config.php';
include 'lib/db.php';

connectToDatabase();
//var_dump($_POST);
$off=ischeckOFF($_POST['offID']);
$darsad=$off['discountPercent'];
if (!ischeckOFF($_POST['offID'])){
$locat="location: factor2.php?username=$_GET[username]&discountID=$_POST[offID]" ;  
header($locat);

}else
{


	$locat="location: factor2.php?username=$_GET[username]&discountID=$_POST[offID]" ;  
header($locat);


}

exit;