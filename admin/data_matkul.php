<!--  
    Link     : https://github.com/arieginulur/nilaimahasiswa
    NIM      : 10918020
    Nama     : Ari Dwi Ginulur
    Kelas    : MI-1
-->
<?php
    $page = "matkul";
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
                include "mk_add.php";
            } else if(isset($_GET["edit"])){
                include "mk_edit.php";
            } else if(isset($_GET["delete"])){
                include "mk_del.php";
            } else {
        ?>
            <h4>Data Mata Kuliah</h4>
            <div class="card">
                <div class="card-body">
                    <a href="data_matkul?add" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah</a>
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
                                <th>KODE MATKUL</th>
                                <th>MATA KULIAH</th>
                                <th>#</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $no = 1;
                                $sql = $connect->query("SELECT * FROM tbl_matakuliah");
                                while ($data = $sql->fetch_array()){
                            ?>
                            <tr>
                                <td><?php echo $no; $no++ ?></td>
                                <td><?php echo $data["kode_matkul"]; ?></td>
                                <td><?php echo $data["nama_matkul"]; ?></td>
                                <td>
                                    <a href="data_matkul?edit&id=<?php echo $data["kode_matkul"]; ?>" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                                    <a href="data_matkul?delete&id=<?php echo $data["kode_matkul"]; ?>" class="btn btn-danger"><i class="fas fa-trash"></i></a>
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