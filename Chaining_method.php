<?php
//$this is refering to the current object object
Class User{
	var $firstname;
	var $lastname;
	
	function hello($ten){
		echo "hello!!" . $this->firstname ."". $this->lastname;
		return $this;
	}
	
	// A method to register the user.
	function register(){
		echo " >> registered";
		return $this;
	}
	
	// A method to send the welcome email.
	function mail(){
    echo " >> email sent";
  }
}

$user1 = new User;
$user1->firstname = "John";
$user1->lastname = "Doe";
$user1->hello()->register()->mail();

