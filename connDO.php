<?php

class connDO{
private $username;
private $password;
private $domain;
function connDO($usr,$pass,$dom){
	$this->username = $usr;
	$this->password = $pass;
	$this->domain = $dom;
	}

function testMe(){
	echo $this->username ;
	}
}
