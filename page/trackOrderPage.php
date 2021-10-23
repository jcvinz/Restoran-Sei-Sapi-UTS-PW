<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home Page</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />

    <link rel="stylesheet" href="../indexStyles.css" />
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-xxl">
        <a class="navbar-brand" href="../index.php">RESTORAN SEI SAPI</a>
        <div
          class="collapse navbar-collapse justify-content-end"
          id="navbarNavAltMarkup"
        >
          <div class="navbar-nav">
            <?php
              session_start();
              if(!isset($_SESSION['isLogin'])){
                echo '<a class="nav-link" href="./loginPage.php">LOGIN</a>';
              } else {
                include('../db.php');
                $user = isset($_SESSION['user']) ? $_SESSION['user'] : die('ERROR: User not found.');
                $id = $user['id'];
                $query = mysqli_query($con, "SELECT * FROM users WHERE id = $id")or die(mysqli_error($con));
                $data =  mysqli_fetch_assoc($query);
                echo '<a class="nav-link" href="./profilePage.php">Hi, '; echo $data['nama']; echo '</a>';
              }
            ?>
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
        <div
          class="card text-dark bg-light ma-5 shadow"
          style="min-width: 25rem"
        >
          <div class="card-header fw-bold">Track Your Order Here</div>
          <div class="card-body">
            <form action="../process/trackOrderProcess.php" method="post">
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label"
                  >Masukkan Nama Pemesan :</label
                >
                <input
                  type="text"
                  class="form-control"
                  id="nama"
                  name="nama"
                  aria-describedby="emailHelp"
                />
              </div>
              <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary" name="search">
                  Search
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
