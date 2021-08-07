<h4>Edit Dosen</h4>
<div class="card">
    <form action="module/dosen_update" method="post">
        <?php 
            $nip = $_GET["nip"];
            $dosen = $connect->query("SELECT tbl_dosen.nip,tbl_dosen.nama,tbl_dosen.kode_matkul,tbl_matakuliah.nama_matkul FROM tbl_dosen 
            LEFT JOIN tbl_matakuliah ON tbl_dosen.kode_matkul = tbl_matakuliah.kode_matkul WHERE nip = '$nip'");
            while ($dsn = $dosen->fetch_array()){
        ?>
        <div class="card-body">
            <div class="form-group">
                <label>NIP</label>
                <input type="text" class="form-control" name="nip" value="<?php echo $dsn["nip"];?>" placeholder="Nomor Induk Pegawai" autocomplete="off" readonly>
            </div>
            <div class="form-group">
                <label>Nama Lengkap</label>
                <input type="text" class="form-control" name="nama" value="<?php echo $dsn["nama"];?>" placeholder="Nama Lengkap" autocomplete="off" required>
            </div>
            <div class="form-group">
                <label>Mata Kuliah</label>
                <select name="kode_matkul" class="form-control">
                    <option value="<?php echo $dsn["kode_matkul"];?>"><?php echo $dsn["nama_matkul"];?></option>
                    <?php 
                        $matakuliah = $connect->query("SELECT * FROM tbl_matakuliah");
                        while($matkul = $matakuliah->fetch_array()){
                            echo '<option value="'.$matkul["kode_matkul"].'">'.$matkul["nama_matkul"].'</option>';
                        }
                    ?>
                <select>
            </div>
        </div>
        <?php } ?>
        <div class="card-footer">
            <a href="data_dosen" class="btn btn-secondary">Kembali</a>
            <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Simpan</button>
        </div>
    </form>
</div>