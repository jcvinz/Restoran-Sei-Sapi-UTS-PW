<?php

    if(isset($_POST['update'])){
        include('../db.php');
        $id = $_GET['id'];
        $status = $_POST['status'];
        
        if($status == "Belum ada"){
            $dataStatus = 0;
        } else if($status == "Diproses"){
            $dataStatus = 1;
        } else if($status == "Diantar"){
            $dataStatus = 2;
        } else if($status == "Selesai"){
            $dataStatus = 3;
        }
        $queryUpdate = mysqli_query($con, "UPDATE pesanan SET status = '$dataStatus' WHERE id = '$id'")
            or die(mysqli_error($con));

        if($queryUpdate){
            echo
                '<script>
                alert("Edit Pesanan Success"); window.location = "../page/listPesananPage.php"
                </script>';
        }else{
            echo
                '<script>
                alert("Edit Data Failed");
                </script>';
            }
    }
?>