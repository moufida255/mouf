<?php

require_once "db/connection.php";
if (isset($_POST['submit'])) {


    if (isset($_POST['Nom_Ens'])) {
        $Nom_Ens = $_POST['Nom_Ens'];
    }
    if (isset($_POST['Prénom_Ens'])) {
        $Prénom_Ens = $_POST['Prénom_Ens'];
    }

    if (isset($_POST['Email_Ens'])) {
        $Email_Ens = $_POST['Email_Ens'];
    }
    if (isset($_POST['Wilaya'])) {
        $Adresse_Ens = $_POST['Wilaya'];
    }
    if (isset($_POST['Date_Nais_Ens'])) {
        $Date_Nais_Ens = $_POST['Date_Nais_Ens'];
    }
    if (isset($_POST['Password'])) {
        $Password = $_POST['Password'];
    }
    if (isset($_POST['Grade'])) {
        $Grade = $_POST['Grade'];
    }
    if (isset($_POST['Sexe_Ens'])) {
        $Sexe_Ens = $_POST['Sexe_Ens'];
    }

    if (isset($_POST['departement'])) {
        $departement = $_POST['departement'];
    }
    if (isset($_POST['specialite'])) {
        $specialite = $_POST['specialite'];
    }


    if (isset($_POST['faculte'])) {
        $faculte = $_POST['faculte'];
    }


    if (isset($_POST['universitaire'])) {
        $universitaire = $_POST['universitaire'];
    }



    $insert = mysqli_query($conn, "INSERT INTO `enseignant`( `Nom_Ens`, `Prénom_Ens`, `Email_Ens`, `Adresse_Ens`, `Date_Nais_Ens`,  `Password`, `Grade`, `Sexe_Ens`, `departement`, `specialite`, `universitaire`,`faculte`) 
                                                        VALUES ('$Nom_Ens','$Prénom_Ens','$Email_Ens','$Adresse_Ens','$Date_Nais_Ens','$Password','$Grade','$Sexe_Ens','$departement','$specialite','$universitaire','$faculte')");
    header('location:index.php');
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
    <title>Créer un Compte</title>
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
                                <h3>Créer un Compte</h3>
                            </div>
                            <form action="" method="post">
                                <div class="form-group last mb-4">
                                    <label for="nom">Nom</label>
                                    <input name="Nom_Ens" type="text" class="form-control" id="nom" required>
                                </div>
                                <div class="form-group last mb-4">
                                    <label for="nom">Prénom</label>
                                    <input name="Prénom_Ens" type="text" class="form-control" id="nom" required>
                                </div>
                                <div class="form-group">
                                    <label for="email">E-mail</label>
                                    <input name="Email_Ens" type="text" class="form-control" id="email">
                                </div>
                                <br>
                                <div class="form-group last mb-4">
                                    <label for="password">Mot de passe</label>
                                    <input name="Password" type="password" class="form-control" id="password" required>
                                </div>
                                <div class="form-group last mb-4">
                                    <input type="date" name="Date_Nais_Ens" class="form-control" id="Date de naissance" required>
                                </div>
                                <select required id="Wilaya" name="Wilaya" class="form-control" aria-label="Default select example">
                                    <option selected disabled>Wilaya</option>
                                    <?php
                                    $get_Wilaya = mysqli_query($conn, "SELECT * FROM `Wilaya` ORDER BY Id_Wilaya ASC");
                                    while ($row = mysqli_fetch_assoc($get_Wilaya)) {
                                    ?>
                                        <option value="<?= $row['Id_Wilaya']; ?>"><?= $row['Nom_Wilaya']; ?></option>
                                    <?php } ?>
                                </select>
                                <br>
                                <select id="my-select" class="form-control" name="Sexe_Ens" required>
                                    <option value="" selected disabled>Sexe</option>
                                    <option value="male">mâle</option>
                                    <option value="female">femelle</option>
                                </select>
                                <br>
                                <select required id="universitaire" name="universitaire" class="form-control" aria-label="Default select example">
                                    <option selected disabled>Universitaire</option>
                                    <?php
                                    $get_universitaire = mysqli_query($conn, "SELECT * FROM `université` ORDER BY Nom_Univ ASC");
                                    while ($row = mysqli_fetch_assoc($get_universitaire)) {
                                    ?>
                                        <option value="<?= $row['Id_Univ']; ?>"><?= $row['Nom_Univ']; ?></option>
                                    <?php } ?>
                                </select>
                                <br>
                                <select id="my-select" class="form-control" name="Grade" required>
                                    <option value="" selected disabled>Grade</option>
                                    <option value="Pr">Pr</option>
                                    <option value="MCA">MCA</option>
                                    <option value="MCB">MCB</option>
                                    <option value="MAA">MAA</option>
                                    <option value="MAB">MAB</option>
                                </select>
                                <br>
                                <select required id="specialite" name="specialite" class="form-control" aria-label="Default select example">
                                    <option selected disabled value="">Specialite</option>
                                    <?php $get_faculté = mysqli_query($conn, "SELECT * FROM `spécialité` ORDER BY Nom_Spés ASC");
                                    while ($row = mysqli_fetch_assoc($get_faculté)) { ?>
                                        <option value="<?= $row['Id_Spés']; ?>"><?= $row['Nom_Spés']; ?></option>
                                    <?php  } ?>
                                </select>
                                <br>
                                <select required id="faculte" name="faculte" class="form-control" aria-label="Default select example">
                                    <option selected disabled value="">Faculté</option>
                                </select>
                                <!--<select required id="faculte" name="faculte" class="form-control" aria-label="Default select example">
                                    <option selected disabled value="">Faculté</option>
                                    <?php /*$get_faculté = mysqli_query($conn, "SELECT * FROM `faculté` ORDER BY Nom_Fac ASC");
                                    while ($row = mysqli_fetch_assoc($get_faculté)) { ?>
                                        <option value="<?= $row['Id_Fac']; ?>"><?= $row['Nom_Fac']; ?></option>
                                    <?php  } */ ?>
                                </select>-->
                                <br>
                                <select required id="departement" name="departement" class="form-control" aria-label="Default select example">
                                    <option selected disabled value="">Departement</option>
                                </select>
                                <!--<select required id="departement" name="departement" class="form-control" aria-label="Default select example">
                                    <option selected disabled value="">Departement</option>
                                    <?php /*$get_département = mysqli_query($conn, "SELECT * FROM departement ORDER BY Nom_Dep ASC");
                                    while ($row = mysqli_fetch_assoc($get_département)) { ?>
                                        <option value="<?= $row['Id_Dep']; ?>">
                                            <?= $row['Nom_Dep']; ?>
                                        </option>
                                    <?php  } */ ?>
                                </select>-->
                                <br>
                                <input type="submit" name="submit" value="Se Connecter" class="btn btn-block btn-primary">
                                <span class="d-block text-left my-4 text-muted">&mdash; OU &mdash;</span>
                                <div class="">
                            </form>
                        </div>
                        <a href="index.php" class="text-dark">Se Connecter</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <script>
        $(document).ready(function() {
            $('#universitaire').change(function() {
                var Id_Univ = $(this).val();
                $.ajax({
                    url: 'get_facultes.php',
                    type: 'POST',
                    data: {
                        Id_Univ: Id_Univ
                    },
                    dataType: 'json',
                    success: function(response) {
                        $('#faculte').empty().append('<option selected disabled value="">Faculté</option>');
                        $.each(response, function(index, data) {
                            $('#faculte').append('<option value="' + data.Id_Fac + '">' + data.Nom_Fac + '</option>');
                        });
                        $('#departement').empty().append('<option selected disabled value="">Departement</option>');
                    }
                });
            });

            $('#faculte').change(function() {
                var Id_Fac = $(this).val();
                $.ajax({
                    url: 'get_departements.php',
                    type: 'POST',
                    data: {
                        Id_Fac: Id_Fac
                    },
                    dataType: 'json',
                    success: function(response) {
                        $('#departement').empty().append('<option selected disabled value="">Departement</option>');
                        $.each(response, function(index, data) {
                            $('#departement').append('<option value="' + data.Id_Dep + '">' + data.Nom_Dep + '</option>');
                        });
                    }
                });
            });
        });
    </script>
</body>

</html>