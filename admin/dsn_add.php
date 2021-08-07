<h4>Tambah Dosen</h4>
<div class="card">
    <form action="module/mahasiswa_add" method="post">
        <div class="card-body">
            <div class="form-group">
                <label>NIP</label>
                <input type="text" class="form-control" name="nim" placeholder="Nomor Induk Pegawai" autocomplete="off" required>
            </div>
            <div class="form-group">
                <label>Nama Lengkap</label>
                <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap" autocomplete="off" required>
            </div>
            <div class="form-group">
                <label>Mata Kuliah</label>
                <select name="kode_matkul" class="form-control">
                    <option value="">-- Pilih --</option>
                    <?php 
                        $matakuliah = $connect->query("SELECT * FROM tbl_matakuliah");
                        while($matkul = $matakuliah->fetch_array()){
                            echo '<option value="'.$matkul["kode_matkul"].'">'.$matkul["nama_matkul"].'</option>';
                        }
                    ?>
                <select>
            </div>
        </div>
        <div class="card-footer">
            <a href="data_dosen" class="btn btn-secondary">Kembali</a>
            <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Simpan</button>
        </div>
    </form>
</div>