<?php
    include ('../db.php');
    $id = $_GET['id'];
    $querySelect = mysqli_query($con, "SELECT * FROM pesanan WHERE id='$id'") or die(mysqli_error($con));
    $data = mysqli_fetch_assoc($querySelect);
    include '../components/sidebar.php'
?>

    <div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px solid #17337A; 
    boxshadow:0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
        <h4>EDIT PESANAN</h4>
        <hr>
        <form action="<?php echo '../process/updatePesananProcess.php?id='.$data['id'].'' ?>" method="post">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nama</label>
                <input class="form-control" id="nama" name="nama" aria-describedby="emailHelp" value="<?php echo $data['nama'];?>" readonly>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">No Telp</label>
                <input class="form-control" id="notelp" name="notelp" aria-describedby="emailHelp" value="<?php echo $data['no_telp'];?>" readonly>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Alamat</label>
                <input class="form-control" id="alamat" name="alamat" aria-describedby="emailHelp" value="<?php echo $data['alamat'];?>" readonly>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Paket</label>
                <input class="form-control" id="paket" name="paket" aria-describedby="emailHelp" value="<?php echo $data['paket'];?>" readonly>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Status</label>
                <select class="form-select" aria-label="Default select example" name="status" id="status">
                <?php
                    if($data['status'] == '0'){
                        echo '<option selected="selected" value="Belum ada">Belum Ada Status</option>';
                    }else{
                        echo '<option value="Belum ada">Belum Ada Status</option>';
                    }
                    if($data['status'] == '1'){
                        echo '<option selected="selected" value="Diproses">Diproses</option>';
                    }else{
                        echo '<option value="Diproses">Diproses</option>';
                    }
                    if($data['status'] == '2'){
                        echo '<option selected="selected" value="Diantar">Diantar</option>';
                    }else{
                        echo '<option value="Diantar">Diantar</option>';
                    }
                    if($data['status'] == '3'){
                        echo '<option selected="selected" value="Selesai">Selesai</option>';
                    }else{
                        echo '<option value="Selesai">Selesai</option>';
                    }
                ?>
                </select>
            </div>
            <div class="d-grid gap-2">
                  <button type="submit" class="btn btn-primary" name="update" onclick="return confirm ('Data Sudah Sesuai ?')">
                    Apply
                  </button>
                </div>
        </form>
    </div>

    </aside>
    <!-- Option 1:Bootstrap Bundle with Popper -->
    <script 
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" 
        crossorigin="anonymous"></script>
</body>
</html>