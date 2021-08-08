<!--  
    Link     : https://github.com/arieginulur/nilaimahasiswa 
    NIM      : 10918020
    Nama     : Ari Dwi Ginulur
    Kelas    : MI-1
-->
<?php
    $page = "input";
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
            <h4>Input Nilai Mahasiswa</h4>
            <div class="card">
                <div class="card-body">
                    <form action="module/nilai_add" method="post">
                        <table id="table" class="table table-bordered" style="width:100%">
                            <thead>
                                <tr align="center">
                                    <th width="50">NO</th>
                                    <th width="110">NIM</th>
                                    <th width="250">NAMA</th>
                                    <th>NILAI TUGAS</th>
                                    <th>NILAI UTS</th>
                                    <th>NILAI AKHIR</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $nip = $_SESSION["nip"];
                                    $no = 1;
                                    $sql = $connect->query("SELECT tbl_mahasiswa.nama, tbl_mahasiswa.nim nimm, tbl_nilai.* FROM tbl_mahasiswa
                                    LEFT JOIN tbl_nilai ON tbl_mahasiswa.nim = tbl_nilai.nim AND '$nip' = tbl_nilai.nip");
                                    while ($data = $sql->fetch_array()){
                                ?>
                                <tr>
                                    <td><input type="hidden" name="id[]" value="<?php echo $data["id"]; ?>"><?php echo $no; $no++ ?></td>
                                    <td><input type="hidden" name="nim[]" value="<?php echo $data["nimm"]; ?>"><?php echo $data["nimm"]; ?></td>
                                    <td><?php echo $data["nama"]; ?></td>
                                    <td><input type="number" name="nl_tugas[]" value="<?php echo $data["nl_tugas"] ?>" class="form-control"></td>
                                    <td><input type="number" name="nl_uts[]" value="<?php echo $data["nl_uts"] ?>" class="form-control"></td>
                                    <td><input type="number" name="nl_uas[]" value="<?php echo $data["nl_uas"] ?>" class="form-control"></td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                        <input type="hidden" name="nip" value="<?php echo $nip; ?>">
                        <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Simpan</button>
                    </form>
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