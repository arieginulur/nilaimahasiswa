<h4>Edit Mata Kuliah</h4>
<div class="card">
    <form action="module/matkul_delete" method="post">
        <?php 
            $id = $_GET["id"];
            $matkul = $connect->query("SELECT * FROM tbl_matakuliah WHERE kode_matkul = '$id'");
            while ($mk = $matkul->fetch_array()){
        ?>
        <div class="card-body">
            <div class="form-group">
                <label>Kode Matkul</label>
                <input type="text" class="form-control" name="kode_matkul" value="<?php echo $mk["kode_matkul"];?>" readonly>
            </div>
            <div class="form-group">
                <label>Nama Mata Kuliah</label>
                <input type="text" class="form-control" name="nama_matkul" value="<?php echo $mk["nama_matkul"];?>" readonly>
            </div>
        </div>
        <?php } ?>
        <div class="card-footer">
            <a href="data_matkul" class="btn btn-secondary">Kembali</a>
            <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i> Hapus</button>
        </div>
    </form>
</div>