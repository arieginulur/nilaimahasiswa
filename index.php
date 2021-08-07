<!--  
    Link     : https://github.com/arieginulur/nilaimahasiswa
    NIM      : 10918020
    Nama     : Ari Dwi Ginulur
    Kelas    : MI-1
-->
<?php 
    // Notifikasi
    if(isset($_GET["Err"]) && !empty($_GET["Err"])){
        switch($_GET["Err"]){
            case 1:
                $Err = "Terjadi Kesalahan";
            break;
            case 2:
                $Err = "Username dan Password Kosong";
            break;
            case 3:
                $Err = "Password Kosong";
            break;
            case 4:
                $Err = "Password Salah";
            break;
            case 5:
                $Err = "Username Kosong";
            break;
            case 6:
                $Err = "Username atau Password salah";
            break;
            
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masuk - SINMA</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="shortcut icon" href="https://www.unikom.ac.id/img/logo_unikom_kuning.png" type="image/x-icon">
    <style>
        body{
            padding: 0 !important;
            margin: 0 !important;
            background: url("assets/img/pattern.svg") repeat scroll 0 0;
            position: relative;
        }
        #workspace{
            margin: 0 auto;
            max-width: 450px;
            z-index: 1000;
        }
        #wrapper{
            margin-top: 50px;
            position: relative;
        }
        .panel{
            border: none;
            box-shadow: none;
            padding: 20px;
            box-shadow: 2px 2px 5px #c0c0c0;
        }
        .logo{
            display: block;
            margin: 0 auto;
        }
        .title{
            color: #9D9E9F;
            margin: 10px;
            text-align: center;
        }
        #formLogin{
            border-bottom: 1px dotted #BFBFBF;
            margin-bottom: 7px;
            padding-bottom: 15px;
        }
        .input-group{
            margin-bottom: 15px;
        }
        .text-red{
            color: red;
            text-align: center;
        }
    </style>
</head>
<body>
    <div id="wrapper">
        <div id="workspace">
            <div class="panel">
                <div class="row">
                    <img width="100" height="100" class="logo" src="https://www.unikom.ac.id/img/logo_unikom_kuning.png">
                    <div class="title">
                        <h3>Sistem Informasi Nilai Mahasiswa</h3>
                        <h1>SINMA</h1>
                    </div>
                </div>
                <form class="form-horizontal" id="formLogin" action="validation" method="post">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input id="username" name="username" class="form-control input-lg" placeholder="Username" type="text" autocomplete="off">
                    </div>
                    <div class="input-group mb-2">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        <input id="password" name="password" class="form-control input-lg" placeholder="Kata sandi" type="password" autocomplete="off">
                        <span toggle="#password-field" class="input-group-addon"><i class="glyphicon glyphicon-eye-open toggle-password"></i></span>
                    </div>
                    <button type="submit" class="masuk btn btn-primary btn-lg btn-block">MASUK</button>
                </form>
                <?php if(isset($_GET["Err"])){ ?>
                    <p class="text-red"><?php echo $Err ?></p>
                <?php } ?>
            </div>
        </div>
    </div>
</body>
</html>