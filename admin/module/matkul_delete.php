<?php 

require_once "../../config/database.php";
$data1 = $_POST["kode_matkul"];

$delete = $connect->query("DELETE FROM tbl_matakuliah WHERE kode_matkul = '$data1'") 
or die ("Terdapat kesalahan : ".$connect->error);;

if($delete){
    header("Location: ../data_matkul?deleted");
    exit();
} else {
    header("Location: ../data_matkul?error");
    exit();
}
$connect->close();
?>