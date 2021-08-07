<h4>Hapus Dosen</h4>
<div class="card">
    <form action="module/dosen_delete" method="post">
        <?php 
            $nip = $_GET["nip"];
            $dosen = $connect->query("SELECT tbl_dosen.nip,tbl_dosen.nama,tbl_dosen.kode_matkul,tbl_matakuliah.nama_matkul FROM tbl_dosen 
            LEFT JOIN tbl_matakuliah ON tbl_dosen.kode_matkul = tbl_matakuliah.kode_matkul WHERE nip = '$nip'");
            while ($dsn = $dosen->fetch_array()){
        ?>
        <div class="card-body">
            <div class="form-group">
                <label>NIP</label>
                <input type="text" class="form-control" name="nip" value="<?php echo $dsn["nip"];?>" readonly>
            </div>
            <div class="form-group">
                <label>Nama Lengkap</label>
                <input type="text" class="form-control" value="<?php echo $dsn["nama"];?>" readonly>
            </div>
            <div class="form-group">
                <label>Mata Kuliah</label>
                <input type="text" class="form-control" value="<?php echo $dsn["nama_matkul"];?>" readonly>
            </div>
        </div>
        <?php } ?>
        <div class="card-footer">
            <a href="data_dosen" class="btn btn-secondary">Kembali</a>
            <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i> Hapus</button>
        </div>
    </form>
</div>