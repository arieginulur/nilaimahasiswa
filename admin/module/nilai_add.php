<?php 

require_once "../../config/database.php";
$data1 = $_POST["nim"];
$data2 = $_POST["nip"];
$data3 = $_POST["nl_tugas"];
$data4 = $_POST["nl_uts"];
$data5 = $_POST["nl_uas"];
$data6 = (0.2 * $data3) + (0.4 * $data4) + (0.4 * $data5);

$add = $connect->query("INSERT INTO tbl_nilai (nim,nip,nl_tugas,nl_uts,nl_uas,nilai_akhir)
VALUES ('$data1','$data2','$data3','$data4','$data5','$data6')") 
or die ("Terdapat kesalahan : ".$connect->error);;

if($add){
    header("Location: ../data_nilai?success");
    exit();
} else {
    header("Location: ../data_nilai?error");
    exit();
}
$connect->close();
?>