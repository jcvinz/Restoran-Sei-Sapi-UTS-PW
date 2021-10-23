<?php

if(isset($_POST['search'])){
    include('../db.php');
    
    $nama = $_POST['nama'];

    $query = mysqli_query($con, "SELECT * FROM pesanan WHERE nama = '$nama'") or die(mysqli_error($con));

    echo'
    <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8" />
            <meta name="viewport" content="width=device-width, initial-scale=1.0" />
            <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
            crossorigin="anonymous"
            />

            <link rel="stylesheet" href="../registerstyle.css" />
            <title>Login</title>
        </head>
        
        <body>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-xxl">
                <a class="navbar-brand" href="../index.php">RESTORAN SEI SAPI</a>
                <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup"
                aria-expanded="false"
                aria-label="Toggle navigation"
                >
                <span class="navbar-toggler-icon"></span>
                </button>
                <div
                class="collapse navbar-collapse justify-content-end"
                id="navbarNavAltMarkup"
                >
                <a class="nav-link" href="../page/trackOrderPage.php">BACK</a>
                </div>
            </div>
            </nav>

            <div class="container">
    ';
    if(mysqli_num_rows($query)==0){
        echo'
        <table class="table table-bordered">
        <thead>
            <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Telepon</th>
            <th scope="col">Alamat</th>
            <th scope="col">Pesanan</th>
            <th scope="col">Harga</th>
            <th scope="col">Status</th>

            </tr>
        </thead>
        <tbody>
        <tr> <td colspan="7"> Tidak ada data </td> </tr>
        </tbody>
    </table>';
    } else {
        echo'
        <table class="table table-bordered">
        <thead>
            <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Telepon</th>
            <th scope="col">Alamat</th>
            <th scope="col">Pesanan</th>
            <th scope="col">Harga</th>
            <th scope="col">Status</th>

            </tr>
            </thead>
        <tbody>';
        while($data = mysqli_fetch_assoc($query)){
            $no = 1;
            echo'
                <tr>
                    <th scope="row">'.$no.'</th>
                    <td>'.$data['nama'].'</td>
                    <td>'.$data['no_telp'].'</td>
                    <td>'.$data['alamat'].'</td>
                    <td>'.$data['paket'].'</td>
                    <td>'.$data['harga'].'</td>';
                    if($data['status'] == 0){
                        echo'<td>Belum Ada Status</td>';
                    } else if($data['status'] == 1){
                        echo'<td>Diproses</td>';
                    } else if($data['status'] == 2){
                        echo'<td>Diantar</td>';
                    } else if($data['status'] == 3){
                        echo'<td>Selesai</td>';
                    }
                    echo'
                </tr>';
            $no++;
        }
        echo'
            </tbody>
        </table>';
    }
}
    echo'
    <div>
    </body>
    </html>';
?>