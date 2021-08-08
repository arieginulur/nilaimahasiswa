<!--  
    Link     : https://github.com/arieginulur/nilaimahasiswa 
    NIM      : 10918020
    Nama     : Ari Dwi Ginulur
    Kelas    : MI-1
-->
<?php
    $page = "home";
    include "../config/auth.php";
    include "../config/database.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "dashboard/head.php"; ?>
</head>
<body >
<div class="wrapper">
    <?php include "dashboard/navbar.php"; ?>
    <section class="container">
        <div class="content">
            <div class="row">
                <div class="col-md-4">
                    <div class="card text-white bg-info mb-3" style="max-width: 18rem;">
                        <div class="card-header">Data Mahasiswa</div>
                        <div class="card-body">
                            <h1 align="center">
                                <?php 
                                    $mahasiswa = $connect->query("SELECT COUNT(*) jumlah  FROM tbl_mahasiswa");
                                    while ($mhs = $mahasiswa->fetch_array()){
                                        echo $mhs["jumlah"];
                                    }
                                ?>
                            </h1>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-white bg-warning mb-3" style="max-width: 18rem;">
                        <div class="card-header">Data Dosen</div>
                        <div class="card-body">
                            <h1 align="center">
                                <?php 
                                    $dosen = $connect->query("SELECT COUNT(*) jumlah FROM tbl_dosen");
                                    while ($dsn = $dosen->fetch_array()){
                                        echo $dsn["jumlah"];
                                    }
                                ?>
                            </h1>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
                        <div class="card-header">Data Mata Kuliah</div>
                        <div class="card-body">
                            <h1 align="center">
                                <?php 
                                    $matakuliah = $connect->query("SELECT COUNT(*) jumlah FROM tbl_matakuliah");
                                    while ($matkul = $matakuliah->fetch_array()){
                                        echo $matkul["jumlah"];
                                    }
                                ?>
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>     
    </section>
    <?php include "dashboard/footer.php"; ?>
</div>
    <?php include "dashboard/script.php"; ?>
</body>
</html>