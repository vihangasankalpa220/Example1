<?php

$dbServername="localhost";
$dbUsername="root";
$dbPassword="";

$conn=mysql_connect($dbServername,$dbUsername,$dbPassword,$dbName) or die("unable to connect to the host");
$sql=mysql_select_db('loginsystem',conn ) or die("unable connect to the database"); 



?>