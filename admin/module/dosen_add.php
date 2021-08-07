<?php 

require_once "../../config/database.php";
$data1 = $_POST["nip"];
$data2 = $_POST["nama"];
$data3 = $_POST["kode_matkul"];
$data4 = password_hash("1234", PASSWORD_DEFAULT);

$add = $connect->query("INSERT INTO tbl_dosen (nip,nama,kode_matkul,password)
VALUES ('$data1','$data2','$data3','$data4')") 
or die ("Terdapat kesalahan : ".$connect->error);;

if($add){
    header("Location: ../data_dosen?success");
    exit();
} else {
    header("Location: ../data_dosen?error");
    exit();
}
$connect->close();
?>