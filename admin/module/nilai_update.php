<!--  
    Link     : https://github.com/arieginulur/nilaimahasiswa
    NIM      : 10918020
    Nama     : Ari Dwi Ginulur
    Kelas    : MI-1
-->
<?php 

require_once "../../config/database.php";
$data1 = $_POST["id"];
$data2 = $_POST["nl_tugas"];
$data3 = $_POST["nl_uts"];
$data4 = $_POST["nl_uas"];
$data5 = (0.2 * $data2) + (0.4 * $data3) + (0.4 * $data4);

$update = $connect->query("UPDATE tbl_nilai SET nl_tugas='$data2', nl_uts='$data3', nl_uas='$data4', nilai_akhir = '$data5' WHERE id = '$data1'") 
or die ("Terdapat kesalahan : ".$connect->error);;

if($update){
    header("Location: ../data_nilai?updated");
    exit();
} else {
    header("Location: ../data_nilai?error");
    exit();
}
$connect->close();
?>