<?php
include_once "connDO.php";

class connDAO{

function connDAO($connDo){
	$this->connDO = $connDo;
	}

function testMe(){
	echo "Inside DAO";
	$this->connDO->testMe();
	}
}

$username = "learnmyw_root";
$password = "Clock@1234";
$hostname = "localhost"; 
$conndao = new connDAO(new connDO($hostname,$username,$password));
$conndao->testMe();