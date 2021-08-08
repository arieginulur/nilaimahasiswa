<!--  
    Link     : https://github.com/arieginulur/nilaimahasiswa
    NIM      : 10918020
    Nama     : Ari Dwi Ginulur
    Kelas    : MI-1
-->
<?php 

require_once "../../config/database.php";
$data1 = $_POST["nim"];
$data2 = $_POST["nama"];
$data3 = $_POST["jk"];
$data4 = $_POST["jur"];
$data5 = password_hash("1234", PASSWORD_DEFAULT);

$add = $connect->query("INSERT INTO tbl_mahasiswa (nim,nama,jk,jur,password)
VALUES ('$data1','$data2','$data3','$data4','$data5')") 
or die ("Terdapat kesalahan : ".$connect->error);;

if($add){
    header("Location: ../data_mahasiswa?success");
    exit();
} else {
    header("Location: ../data_mahasiswa?error");
    exit();
}
$connect->close();
?>