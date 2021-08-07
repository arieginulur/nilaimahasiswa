<!--  
    Link     : https://github.com/arieginulur/nilaimahasiswa
    NIM      : 10918020
    Nama     : Ari Dwi Ginulur
    Kelas    : MI-1
-->
<?php
    $page = "nilai";
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
        <?php 
            if(isset($_GET["add"])){ 
                include "mhs_add.php";
            } else if(isset($_GET["edit"])){
                include "mhs_edit.php";
            } else if(isset($_GET["delete"])){
                include "mhs_del.php";
            } else {
        ?>
            <h4>Nilai Mahasiswa</h4>
            <div class="card">
                <div class="card-body">
                    <?php 
                        $nip = $_SESSION["nip"];
                        $dosen = $connect->query("SELECT * FROM tbl_dosen LEFT JOIN tbl_matakuliah ON tbl_dosen.kode_matkul = tbl_matakuliah.kode_matkul WHERE nip = '$nip'");
                        while($dsn = $dosen->fetch_array()){
                    ?>
                    <table class="table table-bordered">
                        <tr>
                            <th>NOMOR INDUK PEGAWAI</th>
                            <td><?php echo $dsn["nip"]; ?></td>
                        </tr>
                        <tr>
                            <th>NAMA</th>
                            <td><?php echo $dsn["nama"]; ?></td>
                        </tr>
                        <tr>
                            <th>MATA KULIAH</th>
                            <td><?php echo $dsn["nama_matkul"]; ?></td>
                        </tr>
                    </table>
                    <?php } ?>
                    <table id="table" class="table table-bordered" style="width:100%">
                        <thead>
                            <tr align="center">
                                <th width="50">NO</th>
                                <th width="110">NIM</th>
                                <th width="250">NAMA</th>
                                <th>NILAI TUGAS</th>
                                <th>NILAI UTS</th>
                                <th>NILAI AKHIR</th>
                                <th>RATA - RATA</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $no = 1;
                                $sql = $connect->query("SELECT tbl_mahasiswa.nama, tbl_mahasiswa.nim nimm, tbl_nilai.* FROM tbl_mahasiswa
                                LEFT JOIN tbl_nilai ON tbl_mahasiswa.nim = tbl_nilai.nim AND '$nip' = tbl_nilai.nip");
                                while ($data = $sql->fetch_array()){
                            ?>
                            <tr>
                                <td><?php echo $no; $no++ ?></td>
                                <td><?php echo $data["nimm"]; ?></td>
                                <td><?php echo $data["nama"]; ?></td>
                                <td><?php echo $data["nl_tugas"]; ?></td>
                                <td><?php echo $data["nl_uts"]; ?></td>
                                <td><?php echo $data["nl_uas"]; ?></td>
                                <td><?php echo $data["nilai_akhir"]; ?></td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        <?php } ?>
        </div>       
    </section>
    <?php include "dashboard/footer.php"; ?>
</div>
    <?php include "dashboard/script.php"; ?>
</body>
</html>