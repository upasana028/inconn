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

$conndao = new connDAO(new connDO("a","b","c"));
$conndao->testMe();