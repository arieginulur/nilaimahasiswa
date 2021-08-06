<!--  
    Link     : https://github.com/arieginulur/nilaimahasiswa
    NIM             : 10918020
    Nama            : Ari Dwi Ginulur
    Kelas           : MI-1
-->
<?php
    date_default_timezone_set("ASIA/JAKARTA");
    $DB_USER        = 'root';
    $DB_PASSWORD    = '';
    $DB_DATABASE    = 'db_siapgri';
    $DB_HOST        = 'localhost';
    $connect = mysqli_connect($DB_HOST, $DB_USER, $DB_PASSWORD,$DB_DATABASE);
	if(mysqli_connect_errno()){
		printf("Koneksi error : ".mysqli_connect_error());
		exit();
	}
?>