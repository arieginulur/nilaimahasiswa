<?php 

require_once "../../config/database.php";

// Cek matkul
$sql = $connect->query("SELECT MAX(kode_matkul) kode_matkul FROM tbl_matakuliah");
                while ($data = $sql->fetch_array()){
                    $kode =  $data["kode_matkul"];
                }
$max = substr($kode,2);
$kode_otomatis = (int)$max + 1;
$getcode = str_pad($kode_otomatis, 3, '0', STR_PAD_LEFT);

$data1 = "MK".$getcode;
$data2 = $_POST["nama_matkul"];

$add = $connect->query("INSERT INTO tbl_matakuliah (kode_matkul,nama_matkul)
VALUES ('$data1','$data2')") 
or die ("Terdapat kesalahan : ".$connect->error);;

if($add){
    header("Location: ../data_matkul?success");
    exit();
} else {
    header("Location: ../data_matkul?error");
    exit();
}
$connect->close();
?>