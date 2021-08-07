<?php 

require_once "../../config/database.php";
$data1 = $_POST["kode_matkul"];
$data2 = $_POST["nama_matkul"];

$update = $connect->query("UPDATE tbl_matakuliah SET nama_matkul='$data2' WHERE kode_matkul = '$data1'") 
or die ("Terdapat kesalahan : ".$connect->error);;

if($update){
    header("Location: ../data_matkul?updated");
    exit();
} else {
    header("Location: ../data_matkul?error");
    exit();
}
$connect->close();
?>