<?php 

require_once "../../config/database.php";
$data1 = $_POST["nim"];
$data2 = $_POST["nama"];
$data3 = $_POST["jk"];
$data4 = $_POST["jur"];

$update = $connect->query("UPDATE tbl_mahasiswa SET nama='$data2', jk='$data3', jur='$data4' WHERE nim = '$data1'") 
or die ("Terdapat kesalahan : ".$connect->error);;

if($update){
    header("Location: ../data_mahasiswa?updated");
    exit();
} else {
    header("Location: ../data_mahasiswa?error");
    exit();
}
$connect->close();
?>