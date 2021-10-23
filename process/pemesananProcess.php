<?php

    if(isset($_POST['order'])){
        include('../db.php');
        $nama = $_POST['nama'];
        $notelp = $_POST['no_telp'];
        $alamat = $_POST['alamat'];
        $paket = $_POST['pilihanPaket'];
        $harga = $_POST['hargaPaket'];
        $status = 0;
        $query = mysqli_query($con, "INSERT INTO pesanan(nama, no_telp, alamat, paket, harga, status)
            VALUES
            ('$nama', '$notelp', '$alamat', '$paket', '$harga', '$status')") or die(mysqli_error($con));
        
        if($query){
            echo
            '<script>
             alert("Pesanan Berhasil Dibuat, Mohon Menunggu"); window.location = "../index.php"
             </script>';
        }else{
            echo
            '<script>
            alert("Pesanan Gagal Dibuat");
            </script>';
        }
    }else{
        echo
            '<script>
            window.history.back()
            </script>';
    }

?>