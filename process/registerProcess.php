<?php

if(isset($_POST['register'])){
    include('../sendVerif.php');
    include('../db.php');
    $nama = $_POST['nama'];
    $notelp = $_POST['no_telp'];
    $alamat = $_POST['alamat'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $code = md5(time().$notelp);    

    $cekEmail = mysqli_query($con, "SELECT email FROM users WHERE email = '$email'");

    if(mysqli_fetch_assoc($cekEmail)) {
        echo
        '<script>
            alert("Email sudah terdaftar!");
            window.history.back();
        </script>';
    } else {
            $query = mysqli_query($con,
            "INSERT INTO users(nama, no_telp, alamat, email, password, code, verif)
                VALUES
            ('$nama', '$notelp', '$alamat', '$email', '$password', '$code', 0)")
                or die(mysqli_error($con));
                sendVerif($email, $code);
            if($query){
                echo
                '<script>
                alert("Register Success"); window.location = "../page/loginPage.php"
                </script>';
            }else{
                echo
                '<script>
                alert("Register Failed");
                </script>';
            }
        }
    }else{
        echo
            '<script>
            window.history.back()
            </script>';
    }
?>