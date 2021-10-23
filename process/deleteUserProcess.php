<?php
    if(isset($_GET['id'])){
        include('../db.php');

        $id = $_GET['id'];

        $queryDelete = mysqli_query($con, "DELETE FROM users WHERE id = '$id'") or die(mysqli_error($con));

        if($queryDelete) {
            ob_start();
            session_start();
            session_destroy();
            echo
                '<script>
                alert("Delete Success"); window.location = "../page/loginPage.php"
                </script>';
        } else {
            echo
                '<script>
                alert("Delete Failed"); window.location = "../page/profilePage.php"
                </script>';
        }

    } else {
        '<script>
        window.history.back()
        </script>';
    }
?>