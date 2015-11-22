<?php

class connDO{
static $connObject = NULL;
private $username;
private $password;
private $domain;
private function connDO(){
	$this->username = "learnmyw_root";
	$this->password = "Clock@1234";
	$this->domain = "localhost";
	}

static function getInstance(){
	echo "DO called";
	if($this->connObject == NULL)
	{
	$this->connObject =new connDO();	
	}
	return $this->connObject ;
	}
}
