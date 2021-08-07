<?php
/*  
Link     : https://github.com/arieginulur/nilaimahasiswa
NIM      : 10918020
Nama     : Ari Dwi Ginulur
Kelas    : MI-1
*/
    if($_SERVER["REQUEST_METHOD"] === "POST"){
        session_start();
        require_once "config/database.php";
        $username = $_POST["username"];
        $password = $_POST["password"];
        //Cek User Jika Tidak Ada Pilihan Level
        $ckadmin = mysqli_query($connect, "SELECT * FROM tbl_users WHERE username = '$username'");
        if(mysqli_num_rows($ckadmin) == 0){
            $ckdosen = mysqli_query($connect, "SELECT * FROM tbl_dosen WHERE nip = '$username'");
            if(mysqli_num_rows($ckdosen) == 0){
                $ckmahasiswa = mysqli_query($connect, "SELECT * FROM tbl_mahasiswa WHERE nim = '$username'");
                if(mysqli_num_rows($ckmahasiswa) == 0){
                    $user = "";
                } else {
                    $user = mysqli_fetch_array($ckmahasiswa);
                    $role = "mahasiswa";
                }
            } else {
                $user = mysqli_fetch_array($ckdosen);
                $role = "dosen";
            }
        } else {
            $user = mysqli_fetch_array($ckadmin);
            $role = "admin";
        }

        if($user){
            if(password_verify($password, $user["password"])){
                if($role == "admin"){
                    $_SESSION["username"] = $user["username"];
                    $_SESSION["password"] = $user["password"];
                    $_SESSION ["Login"] = true; // Beri izin
                    $_SESSION["admin"] = true; // Role admin
                    header("Location: admin");
                    exit();
                } else if($role == "dosen"){
                    $_SESSION["nip"] = $user["nip"];
                    $_SESSION["password"] = $user["password"];
                    $_SESSION ["Login"] = true; // Beri izin
                    $_SESSION["dosen"] = true; // Role dosen
                    header("Location: dosen");
                    exit();
                    echo "Sukses Dosen";
                } else if($role == "mahasiswa"){
                    $_SESSION["nim"] = $user["nim"];
                    $_SESSION["password"] = $user["password"];
                    $_SESSION ["Login"] = true; // Beri izin
                    $_SESSION["mahasiswa"] = true; // Role mahasiswa
                    header("Location: mahasiswa");
                    exit();
                } else {
                    header("Location: index?Err=1");
                    exit();
                }
            } else {
                header("Location: index?Err=4");
            }
        } else if (empty ($username) && empty ($password)){
			header ("Location: index?Err=2");
			exit();
		}
		else if(empty ($username)){
			header ("Location: index?Err=5");
			exit();
		}
		else if(empty ($password)){
			header ("Location: index?Err=3");
			exit();
		}
		else{
			header ("Location: index?Err=6");
			exit();
			}

    } else {
        header("Location: 404");
        exit();
    }
    mysqli_close($connect);

?>