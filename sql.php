<?php
$server = "mssql000.umbler.com:5003";  

$user = "usuario";     

$pass = "senha";   

$mydb = "database"; 

$con = mssql_connect($server, $user, $pass) or die("Couldn't connect to MSSQL Server on $server");
$db =  mssql_select_db($mydb, $con) or die("Couldn't open database $mydb");
?>
