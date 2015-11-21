<?php
$username = "learnmywq1_root";
$password = "Clock!@1234!";
$hostname = "local2host$"; 

//connection to the database
$dbhandle = mysql_connect($hostname, $username, $password) 
  or die("Unable to connect to MySQL");
echo "Connected to MySQL<br>";

