<?php
    session_start();
    if (!$_SESSION['isLogin']) {
        header("location: loginPage.php");
        exit;
    }else {
      if($_SESSION['user']!="admin") {
        header("location: ../index.php");
        exit;
      } else {
        include('../db.php');
      }
      echo'
      <!DOCTYPE html>
        <html lang="en">
        <head>
            <!-- Required meta tags -->
            <meta charset="utf-8" />
            <meta name="viewport" content="width=device-width, initial-scale=1" />
            <!-- Bootstrap CSS -->
            <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
            crossorigin="anonymous"
            />
            <link rel="stylesheet" href="../components/sidebarStyle.css" />
            <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
            />
            <title>Dashboard!</title>
        </head>
        <body>
            <aside>
            <div class="d-flex">
                <div class="side-bar">
                <h2 class="text-light pt-2 m-4">ADMIN</h2>
                <hr />
                <div class="menu">
                    <div class="content-menu">
                    <i class="fa fa-columns"></i>
                    <a href="./adminPage.php" style="font-weight: 600"
                        >Dashboard</a
                    >
                    </div>
                    <div class="content-menu">
                    <i class="fa fa-list"></i>
                    <a href="./listPesananPage.php" style="font-weight: 600"
                        >List Pesananan</a
                    >
                    </div>
                    <div class="content-menu">
                    <i class="fa fa-plus-square"></i>
                    <a href="./addPesananPage.php" style="font-weight: 600"
                        >Add Pesananan</a
                    >
                    </div>
                    <div class="content-menu">
                    <i class="fa fa-sign-out"></i>
                    <a href="../process/logoutProcess.php" style="font-weight: 600"
                        >Logout</a
                    >
                    </div>
                    <hr />
                </div>
                </div>
      ';
    }
?>
