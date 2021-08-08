<!--  
    Link     : https://github.com/arieginulur/nilaimahasiswa
    NIM      : 10918020
    Nama     : Ari Dwi Ginulur
    Kelas    : MI-1
-->
<h4>Tambah Mata Kuliah</h4>
<div class="card">
    <form action="module/matkul_add" method="post">
        <div class="card-body">
            <div class="form-group">
                <label>Nama Mata Kuliah</label>
                <input type="text" class="form-control" name="nama_matkul" placeholder="Nama Mata Kuliah" autocomplete="off" required>
            </div>
        </div>
        <div class="card-footer">
            <a href="data_dosen" class="btn btn-secondary">Kembali</a>
            <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Simpan</button>
        </div>
    </form>
</div>