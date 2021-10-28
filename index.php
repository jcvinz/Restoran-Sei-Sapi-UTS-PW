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

    <link rel="stylesheet" href="indexStyles.css" />
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-xxl"> 
        <a class="navbar-brand" href="./index.php">RESTORAN SEI SAPI</a>
        <div
          class="collapse navbar-collapse justify-content-end"
          id="navbarNavAltMarkup"
        >
          <div class="navbar-nav">
            <a class="nav-link" href="#homeSection">HOME</a>
            <a class="nav-link" href="#menuSection">MENU</a>
            <a class="nav-link" href="#aboutSection">ABOUT</a>
            <?php
              session_start();
              if(!isset($_SESSION['isLogin'])){
                echo '<a class="nav-link" href="./page/loginPage.php">LOGIN</a>';
              } else {
                include('db.php');
                $user = isset($_SESSION['user']) ? $_SESSION['user'] : die('ERROR: User not found.');
                $id = $user['id'];
                $query = mysqli_query($con, "SELECT * FROM users WHERE id = $id")or die(mysqli_error($con));
                $data =  mysqli_fetch_assoc($query);
                echo '<a class="nav-link" href="./page/profilePage.php">Hi, '; echo $data['nama']; echo '</a>'; 
              }
            ?>
          </div>
        </div>
      </div>
    </nav>

    <div class="container-fluid" id="homeSection">
      <h1 id="taglineText">BEST SEI SAPI IN TOWN</h1>
      <div class="row justify-content-center">
        <img id="gambarOutlet" src="assets/nyapiioutlet.jpg" />
      </div>
    </div>

    <div class="container-fluid" id="menuSection">
      <div class="row justify-content-center">
        <div class="row justify-content-center m-5" id="containLets">
          <h2 id="subJudul">
            Let's Take A Look <br />
            To Some Of Our Menu !
          </h2>
        </div>
        <div
          id="carouselExampleCaptions"
          class="carousel slide"
          data-bs-ride="carousel"
        >
          <div class="carousel-indicators">
            <button
              type="button"
              data-bs-target="#carouselExampleCaptions"
              data-bs-slide-to="0"
              class="active"
              aria-current="true"
              aria-label="Slide 1"
            ></button>
            <button
              type="button"
              data-bs-target="#carouselExampleCaptions"
              data-bs-slide-to="1"
              aria-label="Slide 2"
            ></button>
            <button
              type="button"
              data-bs-target="#carouselExampleCaptions"
              data-bs-slide-to="2"
              aria-label="Slide 3"
            ></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="assets/carousel1.jpg" class="d-block w-100" alt="..." />
              <div class="carousel-caption d-none d-md-block">
                <h5>First slide label</h5>
                <p>
                  Some representative placeholder content for the first slide.
                </p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="assets/carousel2.jpg" class="d-block w-100" alt="..." />
              <div class="carousel-caption d-none d-md-block">
                <h5>Second slide label</h5>
                <p>
                  Some representative placeholder content for the second slide.
                </p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="assets/carousel3.jpg" class="d-block w-100" alt="..." />
              <div class="carousel-caption d-none d-md-block">
                <h5>Third slide label</h5>
                <p>
                  Some representative placeholder content for the third slide.
                </p>
              </div>
            </div>
          </div>
          <button
            class="carousel-control-prev"
            type="button"
            data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev"
          >
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button
            class="carousel-control-next"
            type="button"
            data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next"
          >
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="row justify-content-center m-1" id="containBtnOrder">
          <a href="page/orderPage.php" class="btn"id="btnOrder">ORDER NOW</a>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="row justify-content-center" id="containBtnOrder">
          <a href="page/trackOrderPage.php" class="btn" id="btnOrder">TRACK MY ORDER</a>
        </div>
      </div>
    </div>

    <div class="container-fluid" id="aboutSection">
      <div class="row justify-content-center">
        <div class="row justify-content-center m-5" id="containAbout">
          <h2 id="subJudul">
            About Our Resto :
            <h4>
              <p style="margin-top: 20px">
                Our resto open since world war 2 ends. We only deviler the most
                delicious Sapi to our customers.
              </p>
            </h4>
            <h4>
              <p>
                The chef himself is a Sapi Master, so he knows what to do with
                the ingredients the flavour always top notch.
              </p>
            </h4>
            <h4>
              <p>
                We breed our Sapi by our own farm in secret area where only few
                people can enter. We pick and cut the meat right in front of
                their friends.
              </p>
            </h4>
            <h4>
              <p>
                And we always open from 8 A.M to 11 P.M every Monday to
                Saturday. On Sunday we milk our Sapi.
              </p>
            </h4>
            <h6>
              <p>
                Email : SapiPerang@gmail.com | Phone : (021) 19181945 | Address
                : Jl.Merdeka Raya No.45, Kota Rahasia, Indonesia
              </p>
            </h6>
          </h2>
        </div>
      </div>
    </div>

    <footer class="text-center text-white" style="background-color: #ce453d">
      <!-- Grid container -->
      <div class="container p-4"></div>
      <!-- Grid container -->

      <!-- Copyright -->
      <div class="text-center p-3" style="background-color: #ce453d">
        © 2021 Copyright:
        <a class="text-white" href="#">Restoran Sei Sapi</a>
        <a href="#" class="fa fa-instagram"></a>
        <a href="#" class="fa fa-facebook"></a>
        <a href="#" class="fa fa-youtube"></a>
      </div>
      <!-- Copyright -->
    </footer>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
