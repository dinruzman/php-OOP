<?php
//$this is refering to the current object object
Class User{
	var $firstname;
	var $lastname;
	
	function hello(){
		return "hello!!" . $this->firstname ."". $this->lastname;
	}
}

$user = new User;
$user->firstname = "John";
$user->lastname = "Doe";
$hello = $user->hello();

$user1 = new User;
$user1->firstname = "Ronnie";
$user1->lastname = "Coleman";
$hello1 = $user1->hello();

echo $hello . " ";
echo $hello1 . " ";
?>
