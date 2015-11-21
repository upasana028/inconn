<?php
$username = "learnmyw_root";
$password = "Clock@1234";
$hostname = "localhost"; 

//connection to the database
$dbhandle = mysql_connect($hostname, $username, $password) 
  or die("Unable to connect to MySQL");
echo "Connected to MySQL<br>";

$selected = mysql_select_db("learnmyw_userdata",$dbhandle) 
  or die("Could not select examples");

