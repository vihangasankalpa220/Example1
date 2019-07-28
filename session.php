<?php

$mysql_host = "localhost";
$mysql_user = "root";
$mysql_pass = "";
$db =  "loginsystem";
$con = mysqli_connect($mysql_host,$mysql_user,$mysql_pass,$db);

if(!$con){
	
	die(mysql_error());
}
else{
	
	echo"Successfully connected with loginsystem database";
}



session_start();
$_SESSION ['veiws']=1;
echo  "views".$_SESSION['views'];
if(isset($_SESSION['views']))
	unset($_SESSION['views']);
echo "views".$_SESSION['views'];
session_destroy();

	


	





?>