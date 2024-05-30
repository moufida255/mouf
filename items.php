<?php

include_once "db/connection.php";
if (isset($_SESSION['Email_Ens'])) {
  $Email_Ens = $_SESSION['Email_Ens'];
}

if (isset($_GET['id'])) {
  $id = $_GET['id'];

  $_SESSION['get_id'] = $_GET['id'];


  $select = mysqli_query($conn, "SELECT * FROM `université` WHERE  `Id_Univ` = '$id'");

  while ($data = mysqli_fetch_assoc($select)) {

    $Nom_Univ = $data['Nom_Univ'];
    $Logo_Univ  = $data['Logo_Univ'];
  }
}


?>





<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Bienvenue sur le portail d'apprentissage </title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/css/main.css" rel="stylesheet">
  <script src="js/jquery.js"></script>


</head>
<style>
  body {

    /* تغير لون خلفية الموقع */

  }

  #card {
    height: 225px;
    overflow: hidden;


    /* تغير لون البطاقات  */




  }



  #card:hover {
    transition: 0.6s;
    cursor: pointer;
    box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
  }
</style>


<?php include_once "db/header.php"; ?>



<div class="container mt-5">

  <center>

    <h1 class="h2">Bienvenue sur le portail d'apprentissage à distance de <?= $Nom_Univ; ?>
    </h1>
  </center>



  <div class="row">
    <?php


    $select = mysqli_query($conn, "SELECT faculté.Id_Univ,faculté.Id_Fac,faculté.Nom_Fac,
 faculté.Id_Univ,université.Logo_Univ,université.Id_Univ, université.Nom_Univ 
  FROM faculté INNER JOIN université WHERE (faculté.Id_Univ  = '$id' AND université.Id_Univ = '$id')");

    while ($row = mysqli_fetch_assoc($select)) : ?>


      <div class="col-sm-4">
        <div class="card m-1" id="card">

          <center>
            <img src="images/logos/<?= $row['Logo_Univ']; ?>" alt="" width="120" height="120">
          </center>
          <a href="departement.php?id=<?= $row['Id_Univ']; ?>">

            <div class="card-body text-center">

              <a href="departement.php?id=<?= $row['Id_Fac']; ?>&name=<?= $row['Nom_Fac']; ?>">
                <h5 class="card-title text-dark"><?= $row['Nom_Fac']; ?></h5>

              </a>
            </div>
        </div>
        </a>
      </div>
    <?php endwhile; ?>
  </div>













  <!-- container -->
</div>


<footer id="footer" class="footer position-relative">
  <?php
  $id_get =  $_SESSION['get_id'];


  $select = mysqli_query($conn, "SELECT * FROM `université` WHERE  `Id_Univ` = '$id_get'");

  while ($data = mysqli_fetch_assoc($select)) {


  ?>
    <div class="container footer-top">
      <div class="row gy-4">
        <center>
          <div class="col-lg-4 col-md-6 footer-about">
            <a href="#" class="logo d-flex align-items-center">
              <span class=""><?= $data['Nom_Univ']; ?></span>
            </a>
            <div class="footer-contact pt-3">
              <p><?= $data['Adresse_Univ']; ?></p>

              <p class="mt-3"><strong>Phone:</strong> <span><?= $data['Fax_Univ']; ?></span></p>
              <p><strong>Email:</strong> <span><?= $data['Email_Univ']; ?></span></p>
            </div>

          </div>
        <?php } ?>



        <div class="col-lg-2 col-md-3 footer-links">

        </div>

        <div class="col-lg-4 col-md-12 footer-newsletter">

        </div>

      </div>
      </center>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1">Site Universitaire</strong> <span>All Rights Reserved</span></p>

    </div>

</footer>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>

</body>

</html>