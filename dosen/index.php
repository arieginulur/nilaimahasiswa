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
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <?php 
                                $nip = $_SESSION["nip"];
                                $sql = $connect->query("SELECT * FROM tbl_dosen LEFT JOIN tbl_matakuliah ON tbl_dosen.kode_matkul = tbl_matakuliah.kode_matkul WHERE nip = '$nip'");
                                while($data = $sql->fetch_array()){
                            ?>
                            <table class="table table-bordered">
                                <tr>
                                    <th>NOMOR INDUK PEGAWAI</th>
                                    <td><?php echo $data["nip"]; ?></td>
                                </tr>
                                <tr>
                                    <th>NAMA</th>
                                    <td><?php echo $data["nama"]; ?></td>
                                </tr>
                                <tr>
                                    <th>MATA KULIAH</th>
                                    <td><?php echo $data["nama_matkul"]; ?></td>
                                </tr>
                            </table>
                            <?php } ?>
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