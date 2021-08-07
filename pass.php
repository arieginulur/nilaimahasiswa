<?php 
$pass = "1234";
$pasword = password_hash($pass, PASSWORD_DEFAULT);
echo $pasword;
?>