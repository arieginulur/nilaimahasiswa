<h4>Tambah Nilai</h4>
<div class="card">
    <form action="module/nilai_update" method="post">
        <div class="card-body">
            <div class="form-group">
                <?php 
                    $id = $_GET["id"];
                    $sql = $connect->query("SELECT tbl_nilai.*, tbl_mahasiswa.nama, tbl_dosen.nama dosen, tbl_matakuliah.nama_matkul FROM tbl_nilai
                    LEFT JOIN tbl_mahasiswa ON tbl_nilai.nim = tbl_mahasiswa.nim
                    LEFT JOIN tbl_dosen ON tbl_nilai.nip = tbl_dosen.nip
                    LEFT JOIN tbl_matakuliah ON tbl_dosen.kode_matkul = tbl_matakuliah.kode_matkul
                    WHERE id = '$id'");
                    while ($data = $sql->fetch_array()){
                ?>
                <div class="form-group">
                    <label>Mahasiswa</label>
                    <input type="text" value="<?php echo $data["nim"]." - ".$data["nama"] ?>" class="form-control" readonly>
                </div>
                <div class="form-group">
                    <label>Dosen</label>
                    <input type="text" value="<?php echo $data["nip"]." - ".$data["dosen"] ?>" class="form-control" readonly>
                </div>
                <div class="form-group">
                    <label>Nilai Tugas</label>
                    <input type="number" class="form-control" name="nl_tugas" value="<?php echo $data["nl_tugas"] ?>" placeholder="0" autocomplete="off" required>
                </div>
                <div class="form-group">
                    <label>Nilai UTS</label>
                    <input type="number" class="form-control" name="nl_uts" value="<?php echo $data["nl_uts"] ?>" placeholder="0" autocomplete="off" required>
                </div>
                <div class="form-group">
                    <label>Nilai UAS</label>
                    <input type="number" class="form-control" name="nl_uas" value="<?php echo $data["nl_uas"] ?>" placeholder="0" autocomplete="off" required>
                </div>
                <input type="hidden" name="id" value="<?php echo $data["id"]?>">
            <?php } ?>
        </div>
        <div class="card-footer">
            <a href="data_nilai" class="btn btn-secondary">Kembali</a>
            <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Simpan</button>
        </div>
    </form>
</div>