<!--  
    Link     : https://github.com/arieginulur/nilaimahasiswa
    NIM      : 10918020
    Nama     : Ari Dwi Ginulur
    Kelas    : MI-1
-->
<h4>Tambah Mahasiswa</h4>
<div class="card">
    <form action="module/mahasiswa_add" method="post">
        <div class="card-body">
            <div class="form-group">
                <label>NIM</label>
                <input type="text" class="form-control" name="nim" placeholder="Nomor Induk Mahasiswa" autocomplete="off" required>
            </div>
            <div class="form-group">
                <label>Nama Lengkap</label>
                <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap" autocomplete="off" required>
            </div>
            <div class="form-group">
                <label>Jenis Kelamin</label>
                <select name="jk" class="form-control">
                    <option value="">-- Pilih --</option>
                    <option value="Laki-laki">Laki-laki</option>    
                    <option value="Perempuan">Perempuan</option>
                <select>
            </div>
            <div class="form-group">
                <label>Jurusan</label>
                <input type="text" class="form-control" name="jur" placeholder="Jurusan" autocomplete="off" required>
            </div>
        </div>
        <div class="card-footer">
            <a href="data_mahasiswa" class="btn btn-secondary">Kembali</a>
            <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Simpan</button>
        </div>
    </form>
</div>