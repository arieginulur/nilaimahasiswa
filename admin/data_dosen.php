<!--  
    Link     : https://github.com/arieginulur/nilaimahasiswa
    NIM      : 10918020
    Nama     : Ari Dwi Ginulur
    Kelas    : MI-1
-->
<?php
    $page = "dosen";
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
                include "dsn_add.php";
            } else if(isset($_GET["edit"])){
                include "dsn_edit.php";
            } else if(isset($_GET["delete"])){
                include "dsn_del.php";
            } else {
        ?>
            <h4>Data Dosen</h4>
            <div class="card">
                <div class="card-body">
                    <a href="data_dosen?add" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah</a>
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
                                <th>NIP</th>
                                <th>NAMA</th>
                                <th>MATA KULIAH</th>
                                <th>#</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $no = 1;
                                $sql = $connect->query("SELECT tbl_dosen.nip,tbl_dosen.nama,tbl_matakuliah.nama_matkul FROM tbl_dosen 
                                LEFT JOIN tbl_matakuliah ON tbl_dosen.kode_matkul = tbl_matakuliah.kode_matkul");
                                while ($data = $sql->fetch_array()){
                            ?>
                            <tr>
                                <td><?php echo $no; $no++ ?></td>
                                <td><?php echo $data["nip"]; ?></td>
                                <td><?php echo $data["nama"]; ?></td>
                                <td><?php echo $data["nama_matkul"]; ?></td>
                                <td>
                                    <a href="data_dosen?edit&nip=<?php echo $data["nip"]; ?>" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                                    <a href="data_dosen?delete&nip=<?php echo $data["nip"]; ?>" class="btn btn-danger"><i class="fas fa-trash"></i></a>
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