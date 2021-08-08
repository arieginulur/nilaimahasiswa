<!--  
    Link     : https://github.com/arieginulur/nilaimahasiswa
    NIM      : 10918020
    Nama     : Ari Dwi Ginulur
    Kelas    : MI-1
-->
<h4>Hapus Mahasiswa</h4>
<div class="card">
    <form action="module/mahasiswa_delete" method="post">
        <?php 
            $nim = $_GET["nim"];
            $mahasiswa = $connect->query("SELECT * FROM tbl_mahasiswa WHERE nim = '$nim'");
            while ($mhs = $mahasiswa->fetch_array()){
        ?>
        <div class="card-body">
            <h5>Apakah yakin akan menghapus data ini ?</h5>
            <hr>
            <div class="form-group">
                <label>NIM</label>
                <input type="text" class="form-control" name="nim" value="<?php echo $mhs["nim"];?>" readonly>
            </div>
            <div class="form-group">
                <label>Nama Lengkap</label>
                <input type="text" class="form-control" name="nama" value="<?php echo $mhs["nama"];?>" readonly>
            </div>
            <div class="form-group">
                <label>Nama Lengkap</label>
                <input type="text" class="form-control" name="jk" value="<?php echo $mhs["jk"];?>" readonly>
            </div>
            <div class="form-group">
                <label>Jurusan</label>
                <input type="text" class="form-control" name="jur" value="<?php echo $mhs["jur"];?>" readonly>
            </div>
        </div>
        <?php } ?>
        <div class="card-footer">
            <a href="data_mahasiswa" class="btn btn-secondary">Kembali</a>
            <button type="submit" class="btn btn-danger"><i class="fas fa-save"></i> Hapus</button>
        </div>
    </form>
</div>