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
                include "nl_add.php";
            } else if(isset($_GET["edit"])){
                include "nl_edit.php";
            } else if(isset($_GET["delete"])){
                include "nl_del.php";
            } else {
        ?>
            <h4>Data Nilai</h4>
            <div class="card">
                <div class="card-body">
                    <a href="data_nilai?add" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah</a>
                    <?php 
                    if(isset($_GET["success"])){ 
                        echo '<p><div class="alert alert-success" role="alert">Berhasil menambahkan data!</div></p>';
                    } else if(isset($_GET["updated"])){
                        echo '<p><div class="alert alert-success" role="alert">Berhasil memperbarui data!</div></p>';
                    } else if(isset($_GET["deleted"])){
                        echo '<p><div class="alert alert-success" role="alert">Berhasil menghapus data!</div></p>';
                    } else if(isset($_GET["error"])){
                        echo '<p><div class="alert alert-danger" role="alert">Terjadi kesalahan !</div></p>';
                    }?>
                    <hr>
                    <table id="table" class="table table-bordered" style="width:100%">
                        <thead>
                            <tr align="center">
                                <th>NO</th>
                                <th>NIM</th>
                                <th>NAMA</th>
                                <th>TUGAS</th>
                                <th>UTS</th>
                                <th>UAS</th>
                                <th>NILAI AKHIR</th>
                                <th>MATA KULIAH</th>
                                <th>DOSEN</th>
                                <th>#</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $no = 1;
                                $sql = $connect->query("SELECT tbl_nilai.*, tbl_mahasiswa.nama, tbl_dosen.nama dosen, tbl_matakuliah.nama_matkul FROM tbl_nilai
                                LEFT JOIN tbl_mahasiswa ON tbl_nilai.nim = tbl_mahasiswa.nim
                                LEFT JOIN tbl_dosen ON tbl_nilai.nip = tbl_dosen.nip
                                LEFT JOIN tbl_matakuliah ON tbl_dosen.kode_matkul = tbl_matakuliah.kode_matkul");
                                while ($data = $sql->fetch_array()){
                            ?>
                            <tr>
                                <td><?php echo $no; $no++ ?></td>
                                <td><?php echo $data["nim"]; ?></td>
                                <td><?php echo $data["nama"]; ?></td>
                                <td><?php echo $data["nl_tugas"]; ?></td>
                                <td><?php echo $data["nl_uts"]; ?></td>
                                <td><?php echo $data["nl_uas"]; ?></td>
                                <td><?php echo $data["nilai_akhir"]; ?></td>
                                <td><?php echo $data["nama_matkul"]; ?></td>
                                <td><?php echo $data["dosen"]; ?></td>
                                <td>
                                    <a href="data_nilai?edit&id=<?php echo $data["id"] ?>" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                                    <a href="data_nilai?delete&id=<?php echo $data["id"] ?>" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                </td>

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