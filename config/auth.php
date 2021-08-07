<!--  
    Link     : https://github.com/arieginulur/nilaimahasiswa
    NIM      : 10918020
    Nama     : Ari Dwi Ginulur
    Kelas    : MI-1
-->
<?php
session_start();
if (!isset ($_SESSION["Login"]) || $_SESSION ["Login"] != true){
	header ("Location: ../404");
}
else if ($_SESSION["admin"] = true){
	$_SESSION ["Login"] = true;
}
else if ($_SESSION["dosen"] = true){
	$_SESSION ["Login"] = true;
}
else if ($_SESSION["mahasiswa"] = true){
	$_SESSION ["Login"] = true;
}
else{
	header ("Location: ../404");
}

?>