<?php
include_once "connDO.php";

class connDAO{

function connDAO($connDo){
	$this->connDO = $connDo;
	}

function testMe(){
	echo "Inside DAO";
	}
}

$conndao = new connDAO(connDO::getInstance());
$conndao->testMe();