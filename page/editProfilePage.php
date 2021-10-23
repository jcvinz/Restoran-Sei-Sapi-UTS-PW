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
    <title>Profile</title>
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
            <div class="navbar-nav">
                <a class="nav-link" href="../process/logoutProcess.php">LOGOUT</a>
            </div>
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
          <div class="card-header fw-bold">Profile User</div>
          <div class="card-body">
            <form action="<?php echo '../process/updateUserProcess.php?id='.$data['id'].'' ?>" method="post">

                <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                    <img class="rounded-circle mt-5" width="150px" src="https://cdn3.iconfinder.com/data/icons/avatars-15/64/_Ninja-2-512.png">
                </div>

                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Nama</label>
                  <input
                    class="form-control"
                    id="nama"
                    name="nama"
                    aria-describedby="emailHelp"
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
                    value="<?php echo $data['no_telp'] ?>"
                    
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
                    value="<?php echo $data['alamat'] ?>"
                    
                  />
                </div>

                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label"
                    >Email</label
                  >
                  <input
                    class="form-control"
                    id="email"
                    name="email"
                    aria-describedby="emailHelp"
                    value="<?php echo $data['email'] ?>"
                    
                  />
                </div>

                <div class="d-grid gap-2">
                  <button type="submit" class="btn btn-primary" name="update" onclick="return confirm ('Data Sudah Sesuai ?')">
                    Apply
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