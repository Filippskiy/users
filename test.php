<?php
require_once "autoload.php";
$user = new User("A","123");
$user1=new User("B","1234");
echo $user->isValid("A","123");
echo "<br/>";
echo $user1->isValid("A","123");