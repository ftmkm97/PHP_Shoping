<?php

function connectToDatabase(){
	global $_config, $_mysqlConnection;

	$_mysqlConnection = mysqli_connect($_config['db']['servername'], $_config['db']['username'], $_config['db']['password'], $_config['db']['dbname']);

	
	if (!$_mysqlConnection) {
		die("Connection failed: ");
	}
	$_mysqlConnection->query("set names 'utf8';");
}


function isaCustomer($inputUsername,$inputPassword){

	global $_mysqlConnection;
	$sql="select * from customer  where username='$inputUsername' and password = '$inputPassword';" ;    
  $result = $_mysqlConnection->query($sql);
  if (!$result)
     return 0;
  
  if ($result->num_rows>0)
     return 1;
  else 
     return 0;
}

function isaAdmin($inputUsername,$inputPassword){

	global $_mysqlConnection;
	$sql="select * from admin  where username='$inputUsername' and password = '$inputPassword';" ;    
  $result = $_mysqlConnection->query($sql);
  if (!$result)
     return 0;
  
  if ($result->num_rows>0)
   { 
		$_mysqlConnection = mysqli_connect($_config['db']['servername'], $_config['admin']['username'], $_config['admin']['password'], $_config['db']['dbname']);
   return 1;}
  else 
     return 0;
}


function newCustomer($inputUsername,$inputPassword,$inputrPassword,$inputFirstname,$inputLastname,$inputEmail,$inputCustomeraddr,$inputCity,$inputTel){
    
	global $_mysqlConnection;
	$sql="insert into customer   (username,password,Firstname,Lastname,Email,Customeraddr,City,Tel) values ('$inputUsername','$inputPassword','$inputFirstname','$inputLastname','$inputEmail','$inputCustomeraddr','$inputCity',$inputTel); ";    
	mysqli_query($_mysqlConnection, $sql);
    
	return true;

    
}





function addNewProduct($productID,$name,$number,$price,$factory,$product,$expirat,$wight,$discount=0){
global $_mysqlConnection;
	
	$p=$price;
	$D=$discount;
	$offPrice=$p *( (100-$D)/100);
	
	
	$sql="INSERT INTO product (productID, name, number,firstPrice,factoryname,productionDate,expirationDate, weight, discountPercent,price) VALUES ( $productID,'$name',$number,$price,'$factory','$product','$expirat',$wight,$discount,$offPrice) ; " ;
	//var_dump($_mysqlConnection);
	
mysqli_query($_mysqlConnection, $sql);

return true;

}


function addToManagement($productID,$username,$status,$date){

global $_mysqlConnection;
	
	
	$sql="INSERT INTO management (username,productID,stat,date) VALUES ('$username',$productID,$status,'$date')  ; " ;
	//var_dump($_mysqlConnection);
	
mysqli_query($_mysqlConnection, $sql);

return true;
}



function delProduct($productID){
global $_mysqlConnection;
	
	
	$sql="delete from  product where $productID=productID ; " ;
	
	
mysqli_query($_mysqlConnection, $sql);

return true;

}


function editProduct($productID,$oldname,$name,$number,$price,$factory,$product,$expirat,$wight,$discount=0){
global $_mysqlConnection;
	
	$ID=$productID;	
	$p=$price;
	$d=$discount;
	$hasel=$p *( (100-$d)/100);
	
	$sql="update product set productID = $ID, name = '$name', number = $number ,firstPrice = $price ,factoryname ='$factory' ,productionDate ='$product' ,expirationDate ='$expirat' , weight =$wight , discountPercent =$discount,price=$hasel  where  productID =$productID and name ='$oldname' ; " ;
	var_dump($_mysqlConnection);
	
mysqli_query($_mysqlConnection, $sql);

return true;

}



function addToDiscount($username,$ID){
global $_mysqlConnection;
	

	$sql="INSERT INTO adddiscount (username	,discountID) VALUES ('$username',$ID ) ;";

	
mysqli_query($_mysqlConnection, $sql);

return true;

}

function addNewOff($discountID,$date,$percent ){
	global $_mysqlConnection;
	
	
	$sql="INSERT INTO discount (discountID, discountPercent, expirationData) VALUES ($discountID,$percent,'$date') ; " ;
	
	
mysqli_query($_mysqlConnection, $sql);

return true;
}
	
	
	function newAdmin($inputUsername,$inputPassword,$inputFirstname,$inputLastname,$inputCity){
    
	global $_mysqlConnection;
	
	
	$sql="insert into admin   (username,password,Firstname,Lastname,City) values ('$inputUsername', '$inputPassword', '$inputFirstname', '$inputLastname', '$inputCity'); ";    
	
	mysqli_query($_mysqlConnection, $sql);
    
	return true;

    
}


function getallproducts(){
	global $_mysqlConnection;

	$sql = "SELECT * FROM product order by productID";
	$result = mysqli_query($_mysqlConnection, $sql);
	
	$ret = array();

	while($row = mysqli_fetch_assoc($result)){
		$ret[] = $row;
	}
	return $ret;
}



function getSingleProductById($id){
	global $_mysqlConnection;

	$sql = "SELECT * fROM product where productID=$id";
$result = mysqli_query($_mysqlConnection, $sql);
	
	$row = mysqli_fetch_assoc($result);
//	var_dump($row);
	return $row;
}



function getallproductsByName($name){
	global $_mysqlConnection;

	$sql = "SELECT * FROM product where name='$name' order by productID";
	$result = mysqli_query($_mysqlConnection, $sql);
	
	$ret = array();

	while($row = mysqli_fetch_assoc($result)){
		$ret[] = $row;
	}
	
	//var_dump($ret);
	return $ret;
}


function getNumberOfProduct($ID){
	global $_mysqlConnection;

	$sql = "SELECT number FROM product where productID=$ID ;";
	$result = mysqli_query($_mysqlConnection, $sql);
	
	$ret = array();

	while($row = mysqli_fetch_assoc($result)){
		$ret[] = $row;
	}
	
	//var_dump($ret);
	return $ret;
}


function changeNumberProducts($num2,$ID)
{
global $_mysqlConnection;
	
	
	$sql="update  product set number=$num2 where productID=$ID  ; " ;
	
	mysqli_query($_mysqlConnection, $sql);
	setTotalPrice();
    
	return true;
}





function addToShoppingListById($productID,$username,$name,$price)
{
global $_mysqlConnection;
	//$shoppingID =0 ;  
	//$sql2=" SELECT  DISTINCT shoppingID  FROM shoppinglist  WHERE username ='$username' ";
	//$shoppingid= mysqli_query($_mysqlConnection, $sql2);
	$us="__$_GET[username]";
	
	//if (shoppingID ==0 ) 
	//{
	$sql="INSERT INTO shoppinglist (shoppingID,productID,username,productName,price) VALUES ('$us',$productID,'$username','$name',$price) " ;
	//}//else{
	//$sql="INSERT INTO shoppinglist (shoppingID,productID,username,productName,price) VALUES ($shoppingid,$productID,'$username','$name',$price) " ;
	//}
	mysqli_query($_mysqlConnection, $sql);
    setTotalPrice();

	return true;
}


function AddToAdd($us,$productID,$username){

global $_mysqlConnection;
$sql="INSERT INTO `add1` (shoppingID,productID,username) VALUES ('$us',$productID,'$username'); " ;
mysqli_query($_mysqlConnection, $sql);
return true;
}



function getShoppinglistByUsername($inputUsername)
{
	global $_mysqlConnection;

	$sql ="SELECT *  FROM shoppinglist WHERE username='$inputUsername'";
	$result = mysqli_query($_mysqlConnection, $sql);
	
	$ret = array();

	while($row = mysqli_fetch_assoc($result)){
		$ret[] = $row;
	}
	
	//var_dump($ret);
	return $ret;

}

	//editShoppingList($_GET['productID'],$_GET['username'],$_POST['quantity']);
function editShoppingList($productID,$username,$number)
{
global $_mysqlConnection;
	
	
	$sql="update  shoppinglist set number=$number where productID=$productID  and username='$username'; " ;
	
	mysqli_query($_mysqlConnection, $sql);
	setTotalPrice();
    
	return true;
}

		


function addToFactor($username, $discountID=1000)
{
global $_mysqlConnection;

$row1 =getSumTotalPriceByusername($username) ;
$totalPrice=$row1['sum(totalPrice)'];

$row2=getDiscountPercentbyID($discountID);
$DiscountPercent=$row2['discountPercent'];

$hasel=$totalPrice *( (100-$DiscountPercent)/100);

$finalPrice=$hasel+10000;


$date= date("Y/m/d");
$row3=getShoppingIdByUsername($username);
$shoppingID=$row3['shoppingID'];
		$sql="INSERT INTO factor1 (shoppingID, discountID, finalPrice,date) VALUES ( '$shoppingID', $discountID, $finalPrice,'$date'); ";
	mysqli_query($_mysqlConnection, $sql);
	return true;
}



function inssertIntoMake($username,$factorId){
	global $_mysqlConnection;
	$date=date("y/m/d");
	$sql="INSERT INTO `make`(productID, shoppingID, productName, number, price, totalprice,factorId,date) select productID, shoppingID, productName, number, price, totalprice,$factorId ,'$date' from shoppinglist where username='fateme'";
	$result = mysqli_query($_mysqlConnection, $sql);
	
	
	
	return true;
}

function getLastFactorID($s){

	global $_mysqlConnection;
	$sql = "select factorID from  factor1 where shoppingID='$s' order by factorID DESC limit 1 ; ";
	$result = mysqli_query($_mysqlConnection, $sql);
	
	$row = mysqli_fetch_assoc($result);
	return $row;
	
}


function setTotalPrice(){		
		global $_mysqlConnection;
		$sql="update shoppinglist set totalPrice =number * price ";
	mysqli_query($_mysqlConnection, $sql);
	return true;
}


function getSumTotalPrice($username)
{	
	global $_mysqlConnection;
	$sql = "select sum(totalPrice) from  shoppinglist where username='$username'; ";
	$result = mysqli_query($_mysqlConnection, $sql);
	
	$row = mysqli_fetch_assoc($result);
	return $row;
}

function ischeckOFF($off){
global $_mysqlConnection;

	$sql = "select discountPercent from discount where discountID=$off; ";
	
	 $result = $_mysqlConnection->query($sql);
  if (!$result)
     return 0;
  
  if ($result->num_rows>0)
   { 
   $row = mysqli_fetch_assoc($result);
   return $row ;}
  else 
     return 0;

}



function getShoppingIdByUsername($username){
global $_mysqlConnection;
	$sql = "select shoppingID  from  shoppinglist where username='$username'; ";
	$result = mysqli_query($_mysqlConnection, $sql);
	
	$row = mysqli_fetch_assoc($result);
	return $row;



}




function getSumTotalPriceByusername($username){
global $_mysqlConnection;
	$sql = "select sum(totalPrice) from  shoppinglist where username='$username'; ";
	$result = mysqli_query($_mysqlConnection, $sql);
	$row = mysqli_fetch_assoc($result);
	return $row;



}



function getDiscountPercentbyID($off){
global $_mysqlConnection;

	$sql = "select discountPercent from discount where discountID=$off; ";
	
	 $result = $_mysqlConnection->query($sql);
  if (!$result)
     return 0;
  
  if ($result->num_rows>0)
   { 
   $row = mysqli_fetch_assoc($result);
   return $row ;}
  else 
     return 0;

}



	function deleteItemsFromShoppinglistByUsername($username){
		global $_mysqlConnection;
	$sql = "delete from  shoppinglist where username='$username'; ";
	 mysqli_query($_mysqlConnection, $sql);
	


	
	}
	
	
	function deleteDiscountByDiscountID($discountID){
	
		global $_mysqlConnection;
		$sql = "delete from  discount where discountID=$discountID; ";
		mysqli_query($_mysqlConnection, $sql);
	
	
	}
	
	
	
	function insertIntoSearch($username , $productID ) {
		global $_mysqlConnection;
		$date= date("Y/m/d");
		
		//$Products=getallproductsIDByName($name);
		//foreach($products as $i=>$product){
		//$p=$Product['productID'];
		$sql = "insert into search (username,productID,date) values ('$username',$productID,'$date') ";
		mysqli_query($_mysqlConnection, $sql);
		
	//}
	
	}
	
	
	
	