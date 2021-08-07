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
                        $nim = $_SESSION["nim"];
                        $mahasiswa = $connect->query("SELECT * FROM tbl_mahasiswa WHERE nim = '$nim'");
                        while($mhs = $mahasiswa->fetch_array()){
                    ?>
                    <table class="table table-bordered">
                        <tr>
                            <th>NOMOR INDUK MAHASISWA</th>
                            <td><?php echo $mhs["nim"]; ?></td>
                        </tr>
                        <tr>
                            <th>NAMA</th>
                            <td><?php echo $mhs["nama"]; ?></td>
                        </tr>
                        <tr>
                            <th>JURUSAN</th>
                            <td><?php echo $mhs["jur"]; ?></td>
                        </tr>
                    </table>
                    <?php } ?>
                    <table id="table" class="table table-bordered" style="width:100%">
                        <thead>
                            <tr align="center">
                                <th width="50">NO</th>
                                <th width="250">MATA KULIAH</th>
                                <th width="250">DOSEN</th>
                                <th>NILAI TUGAS</th>
                                <th>NILAI UTS</th>
                                <th>NILAI AKHIR</th>
                                <th>RATA - RATA</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $no = 1;
                                $sql = $connect->query("SELECT tbl_nilai.*, tbl_dosen.*, tbl_matakuliah.nama_matkul FROM tbl_nilai 
                                LEFT JOIN tbl_dosen ON tbl_nilai.nip = tbl_dosen.nip
                                LEFT JOIN tbl_matakuliah ON tbl_dosen.kode_matkul = tbl_matakuliah.kode_matkul
                                WHERE nim = '$nim'");
                                while ($data = $sql->fetch_array()){
                            ?>
                            <tr>
                                <td><?php echo $no; $no++ ?></td>
                                <td><?php echo $data["nama_matkul"]; ?></td>
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