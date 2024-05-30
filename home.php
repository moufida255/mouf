<?php 
require_once "db/connection.php";


if(isset($_SESSION['Email_Ens'])){
  $Email_Ens = $_SESSION['Email_Ens'];


}

?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Home</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/" rel="icon">
  <link href="assets/img/" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

</head>

<body>

<?php require "db/header.php"; ?>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>

      <div class="container">
      <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/permu.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block bg-light">
        <h5 class='text-dark'></h5>
        <p class='text-dark'>Gestion de Demande de Permutation En Ligne des enseignants Universitaire.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/permu.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block bg-light">
        <h5 class='text-dark'>Étiquette de la première diapositive</h5>
        <p class='text-dark'>Gestion de Demande de Permutation En Ligne des enseignants Universitaire.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/permu.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block bg-light">
        <h5 class='text-dark'>Étiquette de la première diapositive</h5>
        <p class='text-dark'>Gestion de Demande de Permutation En Ligne des enseignants Universitaire.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </button>
</div>
      </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-up" data-aos-delay="100">
            <img src="assets/img/about.jpg" class="img-fluid" alt="">
          </div>

          <div class="col-lg-6 order-2 order-lg-1 content" data-aos="fade-up" data-aos-delay="200">
            <h3>à propos de nous</h3>
            <h5 style="line-height: 50px;" class="fst-italic">
              la permutation en ligne des enseignantes une solution numérique innovante pour optimiser le processus de permutation des enseignants universitaires en Algérie, offrant ainsi une approche plus efficace et collaborative pour répondre aux besoins de mobilité au sein du corps enseignant
            </h5>


          </div>

        </div>

      </div>

    </section><!-- /About Section -->

    <!-- Counts Section -->
    <section id="counts" class="section counts">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <h1>
            RÉSEAU UNIVERSITAIRE</h1>

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">


              <img src="images/icon-png.png" alt="" width="60" style="background-color: #5fcf80;border-radius: 50%;padding:6px">
              <span data-purecounter-start="0" data-purecounter-end="54" data-purecounter-duration="1" class="purecounter"></span>
              <p class="">Universités</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <img src="images/icon-png.png" alt="" width="60" style="background-color: #5fcf80;border-radius: 50%;padding:6px">
              <span data-purecounter-start="0" data-purecounter-end="9" data-purecounter-duration="1" class="purecounter"></span>
              <p class="">Centes universitaires</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <img src="images/icon-png.png" alt="" width="60" style="background-color: #5fcf80;border-radius: 50%;padding:6px">
              <span data-purecounter-start="0" data-purecounter-end="37" data-purecounter-duration="1" class="purecounter"></span>
              <p class="">Ecoles nationales Supérieures</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <img src="images/icon-png.png" alt="" width="60" style="background-color: #5fcf80;border-radius: 50%;padding:6px">
              <span data-purecounter-start="0" data-purecounter-end="24" data-purecounter-duration="1" class="purecounter"></span>
              <p class="">Ecoles normales Supérieures</p>
            </div>
          </div><!-- End Stats Item -->

        </div>

      </div>

    </section><!-- /Counts Section -->

    <!-- Why Us Section -->

    <center>

      <section id="why-us" class="section why-us">

        <div class="container">

          <div class="row gy-4 text-center">



            <div class="col-lg-12 d-flex align-items-stretch">
              <div class="row gy-4" data-aos="fade-up" data-aos-delay="200">

                <div class="col-xl-4">
                  <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                    <img src="images/greduction.png" alt="" width="100">
                    <br>
                    <h4>CONFÉRENCE
                      RÉGIONALE
                      DES UNIVERSITÉS
                      DE L'EST</h4>

                  </div>
                </div><!-- End Icon Box -->


                <div class="col-xl-4" data-aos="fade-up" data-aos-delay="300">
                  <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                    <img src="images/greduction.png" alt="" width="100">
                    <br>
                    <h4>CONFÉRENCE
                      RÉGIONALE
                      DES UNIVERSITÉS
                      DU CENTRE </h4>
                  </div>
                </div><!-- End Icon Box -->

                <div class="col-xl-4" data-aos="fade-up" data-aos-delay="400">
                  <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                    <img src="images/greduction.png" alt="" width="100">
                    <br>
                    <h4>CONFÉRENCE
                      RÉGIONALE
                      DES UNIVERSITÉS
                      DE L'OUEST</h4>
                  </div>
                </div><!-- End Icon Box -->

              </div>
            </div>

          </div>

        </div>

      </section><!-- /Why Us Section -->
    </center>

  </main>

<?php include "db/footer.php" ;?>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>
</body>

</html>
