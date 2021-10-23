<?php

    if(isset($_POST['update'])){
        include('../db.php');
        $id = $_GET['id'];
        $nama = $_POST['nama'];
        $notelp = $_POST['no_telp'];
        $alamat = $_POST['alamat'];
        $email = $_POST['email'];
        
        $queryUpdate = mysqli_query($con, "UPDATE users SET nama = '$nama', no_telp = '$notelp', alamat = '$alamat', email = '$email' WHERE id = '$id'")
            or die(mysqli_error($con));

        if($queryUpdate){
            echo
                '<script>
                alert("Edit Data Success"); window.location = "../page/profilePage.php"
                </script>';
        }else{
            echo
                '<script>
                alert("Edit Data Failed");
                </script>';
            }
    }
?>