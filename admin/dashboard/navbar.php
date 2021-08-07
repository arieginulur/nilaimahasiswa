    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="index">
            <img src="https://www.unikom.ac.id/img/logo_unikom_kuning.png" width="30" height="30" class="d-inline-block align-top" alt="Unikom">
            Sistem Informasi Nilai Mahasiswa
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item <?php if($page == "home"){ echo "active"; } ?>">
                    <a class="nav-link" href="index">Home</a>
                </li>
                <li class="nav-item <?php if($page == "mahasiswa"){ echo "active"; } ?>">
                    <a class="nav-link" href="data_mahasiswa">Data Mahasiswa</a>
                </li>
                <li class="nav-item <?php if($page == "dosen"){ echo "active"; } ?>">
                    <a class="nav-link" href="data_dosen">Data Dosen</a>
                </li>
                <li class="nav-item <?php if($page == "matkul"){ echo "active"; } ?>">
                    <a class="nav-link" href="data_matkul">Data Matkul</a>
                </li>
                <li class="nav-item <?php if($page == "nilai"){ echo "active"; } ?>">
                    <a class="nav-link" href="data_nilai">Data Nilai</a>
                </li>
            </ul>
        </div>
        <div class="form-inline">
            <a href="../config/logout" class="btn btn-danger my-2 my-sm-0"><i class="fas fa-sign-out-alt"></i> Logout</a>
        </div>
    </nav>