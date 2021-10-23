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
    <title>Register</title>
  </head>

  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-xxl">
        <a class="navbar-brand" href="./index.php">RESTORAN SEI SAPI</a>
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
          <div class="card-header fw-bold">Register</div>
          <div class="card-body">
            <form action="../process/registerProcess.php" method="post">
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Name</label>
                  <input
                    class="form-control"
                    id="nama"
                    name="nama"
                    aria-describedby="emailHelp"
                    placeholder="Nama Lengkap"
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
                    placeholder="Nomor Telepon"
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
                  <label for="exampleInputEmail1" class="form-label">Email</label>
                  <input
                    type="email"
                    class="form-control"
                    id="email"
                    name="email"
                    aria-describedby="emailHelp"
                    placeholder="Email@gmail.com"
                  />
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label"
                    >Password</label
                  >
                  <input
                    type="password"
                    class="form-control"
                    id="password"
                    name="password"
                    placeholder="Password"
                  />
                </div>
  
                <div class="d-grid gap-2">
                  <button type="register" class="btn btn-primary" name="register">
                    Register
                  </button>
                </div>
              </form>
              <p class="mt-2 mb-0">Sudah punya akun ? <a href="./loginPage.php" class="text-primary">Login Disini!</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
