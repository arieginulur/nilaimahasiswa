<?php 

require_once "../../config/database.php";
$data1 = $_POST["nip"];
$data2 = $_POST["nama"];
$data3 = $_POST["kode_matkul"];

$update = $connect->query("UPDATE tbl_dosen SET nama='$data2', kode_matkul='$data3' WHERE nip = '$data1'") 
or die ("Terdapat kesalahan : ".$connect->error);;

if($update){
    header("Location: ../data_dosen?updated");
    exit();
} else {
    header("Location: ../data_dosen?error");
    exit();
}
$connect->close();
?>