<!--  
    Link     : https://github.com/arieginulur/nilaimahasiswa
    NIM      : 10918020
    Nama     : Ari Dwi Ginulur
    Kelas    : MI-1
-->
<?php 
$pass = "1234";
$pasword = password_hash($pass, PASSWORD_DEFAULT);
echo $pasword;
?>