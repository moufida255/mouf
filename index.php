<?php
require_once "db/connection.php";



if (isset($_POST['submit'])) {

  if (isset($_POST['email'])) {
    $email = $_POST['email'];
  }

  if (isset($_POST['mot_de_passe'])) {
    $mot_de_passe = $_POST['mot_de_passe'];
  }

  $sql = "SELECT * FROM enseignant WHERE Email_Ens='$email' AND Password='$mot_de_passe'";
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result) === 1) {
    $row = mysqli_fetch_assoc($result);
    if ($row['Email_Ens'] === $email && $row['Password'] === $mot_de_passe) {
      $_SESSION['Email_Ens'] = $email;
      $_SESSION['id'] = $row['Id_Ens'];
      header('location:home.php');
    }
  } else {
    $_SESSION['error'] = "Mot de passe ou email incorrect";
  }
}

?>



<!doctype html>
<html lang="fr">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="css/owl.carousel.min.css">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">

  <!-- Style -->
  <link rel="stylesheet" href="css/style.css">

  <title>Se Connecter</title>
</head>

<body>



  <div class="content">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <img src="images/undraw_remotely_2j6y.svg" alt="Image" class="img-fluid">
        </div>
        <div class="col-md-6 contents">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="mb-4">
                <h3>Se Connecter</h3>

                <?php if (isset($_SESSION['error']) && $_SESSION['error'] != "") : ?>
                  <div class="alert alert-danger" role="alert">
                    <?= $_SESSION['error']; ?>
                  </div>
                <?php endif; ?>

              </div>
              <form action="" method="POST">
                <div class="form-group first">
                  <label for="email">E-mail</label>
                  <input type="text" name="email" class="form-control" id="email">

                </div>

                <br>
                <div class="form-group last mb-4">
                  <label for="mot_de_passe">Mot de passe</label>
                  <input type="password" name="mot_de_passe" class="form-control" id="mot_de_passe">

                </div>

                <!-- <div class="d-flex mb-5 align-items-center">

                  <span class="ml-auto"><a href="#" class="forgot-pass">Forgot Password</a></span>
                </div> -->

                <input type="submit" name="submit" value="Se Connecter" class="btn btn-block btn-primary">

                <span class="d-block text-left my-4 text-muted">&mdash; OU &mdash;</span>

                <div class="">




              </form>
            </div>
            <a href="créer.php" class="text-dark">créer un compte ?</a>
          </div>

        </div>

      </div>
    </div>
  </div>


  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
</body>

</html>