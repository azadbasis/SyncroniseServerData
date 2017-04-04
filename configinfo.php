<?php

$user_name = "root";
$password = "";
$server = "localhost";
$db_name = "contactsdb";

$connection = mysqli_connect($server,$user_name,$password,$db_name);

if($connection && isset($_POST['name']))
{

//if (isset($_POST['name'])) {
    $Name = $_POST['name'];
//}

	//$Name = $_POST['name'];

	$query = "insert into contacts(name) values('$Name');";


//mysqli_query($query) 


	$result = mysqli_query($connection,$query)or die('Error, query failed');

	if($result)
	{
		$status = "ok";
	}else{

		$status = "FAILED";
	}
}else
{
	$status = "FAILED";
}
echo json_encode(array("response" =>$status ));
mysqli_close($connection);

 ?>