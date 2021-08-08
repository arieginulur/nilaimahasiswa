<!--  
    Link     : https://github.com/arieginulur/nilaimahasiswa
    NIM      : 10918020
    Nama     : Ari Dwi Ginulur
    Kelas    : MI-1
-->
<?php 

require_once "../../config/database.php";
$data1 = $_POST["nip"];

$delete = $connect->query("DELETE FROM tbl_dosen WHERE nip = '$data1'") 
or die ("Terdapat kesalahan : ".$connect->error);;

if($delete){
    header("Location: ../data_dosen?deleted");
    exit();
} else {
    header("Location: ../data_dosen?error");
    exit();
}
$connect->close();
?>