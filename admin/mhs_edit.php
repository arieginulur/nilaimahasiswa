<!--  
    Link     : https://github.com/arieginulur/nilaimahasiswa
    NIM      : 10918020
    Nama     : Ari Dwi Ginulur
    Kelas    : MI-1
-->
<h4>Edit Mahasiswa</h4>
<div class="card">
    <form action="module/mahasiswa_update" method="post">
        <?php 
            $nim = $_GET["nim"];
            $mahasiswa = $connect->query("SELECT * FROM tbl_mahasiswa WHERE nim = '$nim'");
            while ($mhs = $mahasiswa->fetch_array()){
        ?>
        <div class="card-body">
            <div class="form-group">
                <label>NIM</label>
                <input type="text" class="form-control" name="nim" value="<?php echo $mhs["nim"];?>" placeholder="Nomor Induk Mahasiswa" autocomplete="off" readonly>
            </div>
            <div class="form-group">
                <label>Nama Lengkap</label>
                <input type="text" class="form-control" name="nama" value="<?php echo $mhs["nama"];?>" placeholder="Nama Lengkap" autocomplete="off" required>
            </div>
            <div class="form-group">
                <label>Jenis Kelamin</label>
                <select name="jk" class="form-control">
                    <option value="<?php echo $mhs["jk"];?>"><?php echo $mhs["jk"];?></option>
                    <option value="Laki-laki">Laki-laki</option>    
                    <option value="Perempuan">Perempuan</option>
                <select>
            </div>
            <div class="form-group">
                <label>Jurusan</label>
                <input type="text" class="form-control" name="jur" value="<?php echo $mhs["jur"];?>" placeholder="Jurusan" autocomplete="off" required>
            </div>
        </div>
        <?php } ?>
        <div class="card-footer">
            <a href="data_mahasiswa" class="btn btn-secondary">Kembali</a>
            <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Simpan</button>
        </div>
    </form>
</div>