<?php
    include '../components/sidebar.php'
?>

<div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px solid #ce453d; boxshadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" >
            <h3 style="color: #ce453d;">Admin Pesanan :</h4>
            <hr>
            <h5>Welcome, you can do many changes to our system here !</h5>

            <form action="../process/pemesananProcess.php" method="post">
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Nama</label>
                  <input
                    class="form-control"
                    id="nama"
                    name="nama"
                    aria-describedby="emailHelp"
                    readonly
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
        </aside>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-
        MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>