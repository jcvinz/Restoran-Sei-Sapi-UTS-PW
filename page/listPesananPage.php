<?php
    include '../components/sidebar.php'
?>

    <div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px solid #ce453d; 
    boxshadow:0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
        <h3 style="color: #ce453d; font-weight: 600">List Pesanan</h3>
        <hr>
            <table class="table">
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
                <tbody style="font-weight: 400">
                    <?php
                    $query = mysqli_query($con, "SELECT * FROM pesanan") or die(mysqli_error($con));

                    if(mysqli_num_rows($query) == 0){
                        echo '<tr> <td colspan="7"> Tidak ada data </td> </tr>';
                    }else{
                        $no = 1;
                        while($data = mysqli_fetch_assoc($query)){
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
                                <td>
                                
                                    <a href="./editPesananPage.php?id='.$data['id'].'"><i style="color: green" class="fa fa-edit"></i></a>
                                    <a href="../process/deletePesananProcess.php?id='.$data['id'].'"
                                        onClick="return confirm ( \'Yakin?\')">
                                        <i style="color: red" class="fa fa-trash"></i>
                                    </a>
                                </td>
                            </tr>';
                        $no++;
                        }
                    }
                ?>
                </tbody>
            </table>
    </div>
    </aside>
    <!-- Option 1:Bootstrap Bundle with Popper -->
    <script 
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" 
        crossorigin="anonymous"></script>
</body>
</html>