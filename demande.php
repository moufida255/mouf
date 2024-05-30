<?php

include_once "db/connection.php";


$_SESSION['error'] = "";

if (isset($_SESSION['Email_Ens']) && isset($_SESSION['id'])) {
  $Email_Ens = $_SESSION['Email_Ens'];
  $id = $_SESSION['id'];
}



if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  if (isset($_POST['wilaya'])) {
    $wilaya = $_POST['wilaya'];
  }
  if (isset($_POST['universitaire'])) {
    $universitaire =  $_POST['universitaire'];
  }
  if (isset($_POST['faculte'])) {
    $faculte =   $_POST['faculte'];
  }
  if (isset($_POST['departement'])) {
    $departement =  $_POST['departement'];
  }
  if (isset($_POST['specialite'])) {
    $specialite = $_POST['specialite'];
  }
  $Date_Demande = date("F j, Y, g:i");
  $Id_Ens = $_SESSION['id'];

  /*$sql1 = "SELECT * FROM enseignant WHERE universitaire='$universitaire' AND departement='$departement'";
  $qry1 = mysqli_query($conn, $sql1) or die(mysqli_error($conn));
  if ($qry1) {
    print('qry1 passed');
    if ($qry1->num_rows > 0) {
      print('num rows of qry1 > 0');
    } else {
      print('num rows of qry1 = 0');
    }
  }else{
    print('qry1 not passed');
  }*/

  /* - Le code vérifie si la requête est une soumission de formulaire via la méthode POST (Méthode POST)
      - Chaque champ du formulaire (wilaya, universitaire, faculte, departement, specialite) est vérifié et 
      échappé pour éviter les injections SQL(Validation et échappement des données)

    */


  /*
  
  $select = mysqli_query($conn,"SELECT * FROM `enseignant` WHERE Email_Ens = '$Email_Ens'");
  while($row = mysqli_fetch_assoc($select)){
    $departement = $row['departement'];
    $specialite = $row['specialite'];
    $universitaire = $row['universitaire'];
    $faculte = $row['faculte'];
  }

*/

  // Check if there's a matching enseignant with a pending request
  $sql = "SELECT d.Id_Ens, e.Grade, e.Nom_Ens, e.Prénom_Ens, e.Email_Ens
FROM demande d
JOIN enseignant e ON d.Id_Ens = e.Id_Ens
WHERE d.Status = 'En attente' 
AND e.universitaire = '$universitaire' 
AND e.departement = '$departement'
LIMIT 1";

  $qry1 = mysqli_query($conn, $sql) or die(mysqli_error($conn));

  if ($qry1->num_rows > 0) {
    //echo "qry1 passed";
    while ($ens1 = mysqli_fetch_assoc($qry1)) {
      $ensId = $ens1['Id_Ens'];

      //Insert a new 'Satisfait' demande
      mysqli_query($conn, "INSERT INTO `demande` (`Date_Demande`, `Id_Ens`, `universitaire`, `faculte`, `departement`, `specialite`, `wilaya`, `Status`) 
        VALUES ('$Date_Demande', '$Id_Ens', '$universitaire', '$faculte', '$departement', '$specialite', '$wilaya', 'Satisfait')");

      //Update the existing demande's status
      mysqli_query($conn, "UPDATE demande SET Status = 'Satisfait' WHERE Id_Ens = '$ensId'");

      //Fetch and display the enseignant details
      $gradeEns2 = $ens1['Grade'];
      $nomEns2 = $ens1['Nom_Ens'];
      $prénomEns2 = $ens1['Prénom_Ens'];
      $emailEns2 = $ens1['Email_Ens'];

      echo "<script>alert('Vous Êtes Satisfait Avec " . $gradeEns2 . ": " . $nomEns2 . " " . $prénomEns2 . " " . $emailEns2 . "')</script>";
    }
  } else {
    echo "qry1 not passed";
    //Insert a new 'En attente' demande if no matching enseignant is found
    mysqli_query($conn, "INSERT INTO `demande` (`Date_Demande`, `Id_Ens`, `universitaire`, `faculte`, `departement`, `specialite`, `wilaya`, `Status`) 
    VALUES ('$Date_Demande', '$Id_Ens', '$universitaire', '$faculte', '$departement', '$specialite', '$wilaya', 'En attente')");
  }



  /*
  $qry1 = mysqli_query($conn, "SELECT Id_Ens FROM demande WHERE Id_Ens != '$Id_Ens' && Status = 'En attente'");
  if ($qry1->num_rows > 0) {
    echo $qry1->num_rows;
    echo "qry1 passed";
    while ($ens1 = mysqli_fetch_assoc($qry1)) {
      $ensId = $ens1['Id_Ens'];
      //$ensUniversitaire = $ens1['universitaire'];
      //$ensDepartement = $ens1['departement'];
      $qry2 = mysqli_query($conn, "SELECT * FROM enseignant WHERE Id_Ens = '$ensId' && universitaire = '$universitaire' && departement = '$departement'") or die(mysqli_error($conn));
      if ($qry2->num_rows > 0) {
        echo $qry2->num_rows;
        echo "qry2 passed";
        mysqli_query($conn, "INSERT INTO `demande`( `Date_Demande`, `Id_Ens`, `universitaire`, `faculte`, `departement`, `specialite`, `wilaya`, `Status`) 
VALUES ('$Date_Demande','$Id_Ens','$universitaire','$faculte','$departement','$specialite','$wilaya', 'Satisfait')");
        mysqli_query($conn, "UPDATE demande SET Status = 'Satisfait' WHERE Id_Ens == '$ensId'");
        while ($ens2 = mysqli_fetch_assoc($qry2)) {
          $gradeEns2 = $ens2['Grade'];
          $nomEns2 = $ens2['Nom_Ens'];
          $prénomEns2 = $ens2['Prénom_Ens'];
          $emailEns2 = $ens2['Email_Ens'];
          echo "<script>alert('Vous Êtes Satisfait Avec ".$gradeEns2.": ".$nomEns2." ".$prénomEns2." ".$emailEns2."')</script>";
        }
      } else {
        echo "qry2 not passed";
        mysqli_query($conn, "INSERT INTO `demande`( `Date_Demande`, `Id_Ens`, `universitaire`, `faculte`, `departement`, `specialite`, `wilaya`, `Status`) 
VALUES ('$Date_Demande','$Id_Ens','$universitaire','$faculte','$departement','$specialite','$wilaya', 'En attente')");
      }
    }
  } else {
    echo "qry1 not passed";
    mysqli_query($conn, "INSERT INTO `demande`( `Date_Demande`, `Id_Ens`, `universitaire`, `faculte`, `departement`, `specialite`, `wilaya`, `Status`) 
VALUES ('$Date_Demande','$Id_Ens','$universitaire','$faculte','$departement','$specialite','$wilaya', 'En attente')");
  }
  */


  //$insert = mysqli_query($conn, "INSERT INTO `demande`( `Date_Demande`, `Id_Ens`, `universitaire`, `faculte`, `departement`, `specialite`, `wilaya`) 
  //VALUES ('$Date_Demande','$Id_Ens','$universitaire','$faculte','$departement','$specialite','$wilaya')");
  $_SESSION['error'] = "Votre demande a été soumise, veuillez patienter";
  header('location:demande.php');
  die();
}
/* Insertion des données dans la base de données(LE CHANGEMENT_ICI )
  Cette ligne exécute une requête SQL pour insérer les données du formulaire dans la table demande */
$selectDemande = mysqli_query($conn, "SELECT departement, wilaya, Date_Demande FROM demande ORDER BY Id_Demande");

if (!$selectDemande) {
  die('Error in demande query: ' . mysqli_error($conn));
}

// Query to fetch data from the 'enseignant' table
$selectEnseignant = mysqli_query($conn, "SELECT departement, Adresse_Ens FROM enseignant");

if (!$selectEnseignant) {
  die('Error in enseignant query: ' . mysqli_error($conn));
}

// Fetch all records from enseignant table
$enseignants = [];
while ($rowEnseignant = mysqli_fetch_assoc($selectEnseignant)) {
  $enseignants[] = $rowEnseignant;
}

// Compare records from demande table with enseignant table
while ($rowDemande = mysqli_fetch_assoc($selectDemande)) {
  foreach ($enseignants as $enseignant) {
    if ($rowDemande['wilaya'] == $enseignant['Adresse_Ens'] && $rowDemande['departement'] == $enseignant['departement']) {

      $departement = mysqli_real_escape_string($conn, $rowDemande['departement']);
      $wilaya = mysqli_real_escape_string($conn, $rowDemande['wilaya']);
      $update = mysqli_query($conn, "UPDATE demande SET status='1'
              WHERE departement = '$departement' AND wilaya = '$wilaya'");
    }
  }
}
?>


<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Demande</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

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

  <script src="js/jquery.js"></script>

</head>

<body>


  <!-- <script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="js/translate.js"></script> -->



  <?php include "db/header.php"; ?>



  <section id="hero" class="hero section">

    <img src="assets/img/hero-bg.jpg" alt="" data-aos="fade-in" class="aos-init aos-animate">

    <div class="container">
      <h1 data-aos="fade-up" data-aos-delay="100" class="aos-init aos-animate"> Demande de permutation <br> en ligne des enseignants</h1>

      <h4>
        Système de Gestion des demandes de permutation <br> en ligne des enseignantes universitaires algériens
      </h4>
      <div class="d-flex mt-4 aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">

      </div>
    </div>
  </section>
  <!-- Ce code JavaScript utilise la bibliothèque jQuery pour réagir aux changements de 
        sélection dans un élément <select> avec l'ID wilaya -->

  <div class="container mt-5 p-5">
    <center>

      <?php if ($_SESSION['error'] != "") : ?>
        <div class="alert alert-danger w-50" role="alert">
          <?= $_SESSION['error']; ?>
        </div>
      <?php endif; ?>

      <form action="" method="POST" style="width:700px" class="bg-success  p-5 " style="border-radius: 15px;">
        <h3 class="text-light">Soumission de Demande de Permutation</h3> <br>
        <select required id="wilaya" name="wilaya" class="form-select" aria-label="Default select example">
          <option selected disabled value="">Wilaya Cible</option>
          <?php
          $get_wilaya = mysqli_query($conn, "SELECT * FROM `wilaya`");
          while ($row = mysqli_fetch_assoc($get_wilaya)) { ?>

            <option value="<?= $row['Id_Wilaya']; ?>"><?= $row['Id_Wilaya'] . " - " . $row['Nom_Wilaya']; ?></option>
          <?php  } ?>

        </select>
        <br>
        <select required id="universitaire" name="universitaire" class="form-select" aria-label="Default select example">
          <option>Universite Cible</option>
          <option></option>
        </select>
        <br>
        <select required id="faculte" name="faculte" class="form-select" aria-label="Default select example">
          <option value="">Faculte</option>
          <option></option>

        </select>


        <br>



        <select required id="departement" name="departement" class="form-select" aria-label="Default select example">
          <option value="">Departement Cible</option>

        </select>
        <br>


        <select required name="specialite" id="specialite" class="form-select" aria-label="Default select example">
          <option value="">Specialite</option>


        </select>






        <br>

        <div class="col-md-12 text-right ml-5">
          <button type="submit" name="submit" class="btn btn-dark p-2 w25">Envoyer</button>

        </div>




      </form>
  </div>

  </center>


  <script src="js/jquery.js"></script>

  <script>
    $('#wilaya').change(function() {
      let wilaya = $("#wilaya").val();
      let universitaire = $("#universitaire");
      $.ajax({
        url: "ajax/action.php",
        type: "POST",
        data: {
          wilaya: wilaya
        },
        cache: false,
        success: function(response) {
          let data = JSON.parse(response);
          console.log(data);
          let html = data.map((item) => {
            return '<option value="' + item.Id_Univ + '">' + item.Nom_Univ + '</option>';
          }).join('');
          universitaire.html(html);
        }
      })
    })
  </script>



  <script>
    $('#universitaire').change(function() {
      let Id_Univ = $("#universitaire").val();
      let faculte = $("#faculte");
      $.ajax({
        url: "ajax/action2.php",
        type: "POST",
        data: {
          Id_Univ: Id_Univ
        },
        cache: false,
        success: function(response) {
          let data2 = JSON.parse(response);
          console.log(data2);
          let html = data2.map((item) => {
            return '<option value="' + item.Id_Fac + '">' + item.Nom_Fac + '</option>';
          }).join('');
          faculte.html(html);
        }
      })
    })
  </script>
  <!-- 1.Lorsque la valeur du champ de sélection #universitaire change, la fonction à l'intérieur est exécutée.

       2. Récupération de la valeur sélectionnée , Une requête AJAX est envoyée au script action2.php situé
 dans le dossier ajax. Cette requête utilise la méthode POST et envoie la valeur de Id_Univ en tant que donnée.

    3.Une requête AJAX est envoyée au script action2.php situé dans le dossier ajax. 

    Cette requête utilise la méthode POST et envoie la valeur de Id_Univ en tant que donnée.
      4.Traitement de la réponse de la requête AJAX :
      Si la requête réussit, la réponse est récupérée sous forme de chaîne JSON.
       Cette chaîne est ensuite convertie en objet JavaScript avec JSON.parse.

       5.Génération des options du champ de sélection :

    Pour chaque élément de l'objet data2, une option HTML est générée avec l'ID et le nom de la faculté.
     Toutes les options sont ensuite combinées en une seule chaîne.
    
      6.Mise à jour du champ de sélection #faculte :
        Le contenu du champ de sélection #faculte est remplacé par les nouvelles options générées. -->




  <script>
    $('#faculte').change(function() {
      let Id_fac = $("#faculte").val();
      let departement = $("#departement");
      $.ajax({
        url: "ajax/action3.php",
        type: "POST",
        data: {
          Id_fac: Id_fac
        },
        cache: false,
        success: function(response) {
          let data = JSON.parse(response);
          console.log(data);
          let html = data.map((item) => {
            return '<option value="' + item.Id_Dep + '">' + item.Nom_Dep + '</option>';
          }).join('');
          departement.html(html);
        }
      })
    })
  </script>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>



  <script>
    $('#departement').change(function() {
      let Id_fac = $("#faculte").val();
      let specialite = $("#specialite");
      $.ajax({
        url: "ajax/action4.php",
        type: "POST",
        data: {

        },
        cache: false,
        success: function(response) {
          let data = JSON.parse(response);
          console.log(data);
          let html = data.map((item) => {
            return '<option value="' + item.Nom_Spés + '">' + item.Nom_Spés + '</option>';
          }).join('');
          specialite.html(html);
        }
      })
    })
  </script>
  </div>

  <?php // include "db/footer.php" ;
  ?>