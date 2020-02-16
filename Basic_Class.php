<?php
Class User{
	var $firstname;
	var $lastname;
	
	function hello(){
		return "hello!!";
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
echo $user->firstname . " ";
echo $user->lastname . ",";

echo $hello1 . " ";
echo $user1->firstname . " ";
echo $user1->lastname;
?>
