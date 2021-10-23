<?php
    session_start();
    if(!$_SESSION['isLogin']){
        header("location: ../page/loginPage.php");
      exit;
    } else {
        if($_SESSION['user']=="admin") {
            header("location: adminPage.php");
            exit;
          } else {
            include('../db.php');
            $user = isset($_SESSION['user']) ? $_SESSION['user'] : die('ERROR: User not found.');
            $id = $user['id'];
            $query = mysqli_query($con, "SELECT * FROM users WHERE id = $id")or die(mysqli_error($con));
            $data =  mysqli_fetch_assoc($query);
          }
        }
?>

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

    <link rel="stylesheet" href="../indexStyles.css" />
    <title>Order</title>
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
        </div>
      </div>
    </nav>

    <div class="bg bg-light text-dark">
      <div
        class="
          container
          min-vh-100
          d-flex
          align-items-center
          justify-content-center
        "
      >
        <div class="card text-dark bg-light shadow" style="min-width: 50rem">
          <div class="card-header fw-bold">Order Makanan</div>
          <div class="card-body">
            <form action="../process/pemesananProcess.php" method="post">
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Nama</label>
                  <input
                    class="form-control"
                    id="nama"
                    name="nama"
                    aria-describedby="emailHelp"
                    readonly
                    value="<?php echo $data['nama'] ?>"
                  />
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label"
                    >Nomor Telepon</label
                  >
                  <input
                    class="form-control"
                    id="no_telp"
                    name="no_telp"
                    aria-describedby="emailHelp"
                    pattern="[0]{1}[8]{1}[0-9].{7,9}"
                    required
                  />
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label"
                    >Alamat</label
                  >
                  <input
                    class="form-control"
                    id="alamat"
                    name="alamat"
                    aria-describedby="emailHelp"
                    placeholder="Alamat Lengkap"
                  />
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label"
                      >Paket Pilihan</label
                    >
                    <select class="form-select" aria-label="Default select" name="pilihanPaket" id="pilihanPaket" onchange="changeHarga()" required>
                      <option disabled selected value="">--Pilih Paket Makanan--</option>
                      <option value="Paket Murah">Paket Murah [1 Porsi Sei Sapi + Nasi + Es Teh]</option>
                      <option value="Paket Kenyang">Paket Kenyang [3 Porsi Sei Sapi + Nasi + 3 Es Teh]</option>
                      <option value="Paket Keluarga">Paket Keluarga [5 Porsi Sei Sapi + Nasi + 5 Es Teh]</option>
                    </select>
                </div>
                <script type="text/javascript">
                    function changeHarga(){
                        var select = document.getElementById("pilihanPaket").value;
                        if(select == "Paket Murah"){
                            document.getElementById("hargaPaket").value = 37000;
                        }else if(select == "Paket Kenyang"){
                            document.getElementById("hargaPaket").value = 95000;
                        }else if(select == "Paket Keluarga"){
                            document.getElementById("hargaPaket").value = 160000;
                        }
                    }
                </script>
                <div class="mb-3">
                    <label for="harga" class="form-label">Harga Paket</label>
                    <input type="text" class="form-control" name="hargaPaket" id="hargaPaket" readonly/>
                </div>
                <div class="d-grid gap-2">
                  <button type="submit" class="btn btn-primary" name="order" onclick="return confirm ('Pesanan Sudah Sesuai ?')">
                    Order Now!
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    
  </body>
</html>