<h4>Tambah Nilai</h4>
<div class="card">
    <form action="module/nilai_add" method="post">
        <div class="card-body">
            <div class="form-group">
                <label>Mahasiswa</label>
                <select name="nim" class="form-control">
                    <option value="">-- Pilih --</option>
                    <?php 
                        $mahasiswa = $connect->query("SELECT * FROM tbl_mahasiswa");
                        while($mhs = $mahasiswa->fetch_array()){
                            echo '<option value="'.$mhs["nim"].'">'.$mhs["nim"].' - '.$mhs["nama"].'</option>';
                        }
                    ?>
                <select>
            </div>
            <div class="form-group">
                <label>Dosen</label>
                <select name="nip" class="form-control">
                    <option value="">-- Pilih --</option>
                    <?php 
                        $dosen = $connect->query("SELECT * FROM tbl_dosen LEFT JOIN tbl_matakuliah ON tbl_dosen.kode_matkul = tbl_matakuliah.kode_matkul");
                        while($dsn = $dosen->fetch_array()){
                            echo '<option value="'.$dsn["nip"].'">'.$dsn["nama_matkul"].' - '.$dsn["nama"].'</option>';
                        }
                    ?>
                <select>
            </div>
            <div class="form-group">
                <label>Nilai Tugas</label>
                <input type="number" class="form-control" name="nl_tugas" placeholder="0" autocomplete="off" required>
            </div>
            <div class="form-group">
                <label>Nilai UTS</label>
                <input type="number" class="form-control" name="nl_uts" placeholder="0" autocomplete="off" required>
            </div>
            <div class="form-group">
                <label>Nilai UAS</label>
                <input type="number" class="form-control" name="nl_uas" placeholder="0" autocomplete="off" required>
            </div>
        </div>
        <div class="card-footer">
            <a href="data_nilai" class="btn btn-secondary">Kembali</a>
            <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Simpan</button>
        </div>
    </form>
</div>