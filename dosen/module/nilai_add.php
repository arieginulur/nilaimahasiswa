<?php 
    require_once "../../config/database.php";
    
    //ID
    $id = $_POST["id"];

    $nim = $_POST["nim"];
    $nip = $_POST["nip"];

    $n1 = $_POST["nl_tugas"];
    $n2 = $_POST["nl_uts"];
    $n3 = $_POST["nl_uas"];
    $jml = COUNT($_POST["nim"]);

    for($i=0;$i<$jml;$i++){
        $n4[$i] = (0.2 * $n1[$i]) + (0.4 * $n2[$i]) + (0.4 * $n3[$i]);
        $process = $connect->query("INSERT INTO tbl_nilai (id, nim,nip,nl_tugas,nl_uts,nl_uas,nilai_akhir) 
        VALUES ('$id[$i]', '$nim[$i]','$nip','$n1[$i]','$n2[$i]','$n3[$i]','$n4[$i]')
        ON DUPLICATE KEY UPDATE
        nim = '$nim[$i]',
        nip = '$nip',
        nl_tugas = '$n1[$i]',
        nl_uts = '$n2[$i]',
        nl_uas = '$n3[$i]',
        nilai_akhir = '$n4[$i]'
        ") or die("Terdapat kesalahan: ".mysqli_error($connect));
    }
    if($process){
        header("Location: ../input?success");
        exit();
    } else {
        header("Location: ../input?success");
        exit();
    }
    $connect->close();
?>