<?php
require_once "connection.php" ;?>
<header  id="header" class="header d-flex align-items-center sticky-top shadow p-3 mb-5 bg-white rounded">
<div style="position: absolute; margin-left: 100px; "  class="container-fluid container-xl d-flex align-items-center ">
    
         
    <a href="index.html" class="logo d-flex align-items-center me-auto">
      <!-- Uncomment the line below if you also wish to use an image logo -->
      <!-- <img src="assets/img/logo.png" alt=""> -->
      <h1 class="">Site Universitaire</h1>
    </a>

    <nav id="navmenu" class="navmenu">
      <ul>

        <li><a href="home.php" class="active">Accueil</a></li>

        <li><a href="universite.php">Université</a></li>
        <li><a href="demande.php">Demande</a></li>

        <li><a href="logout.php">Déconnecter</a></li>   


      </ul>
      <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
    </nav>

    <!-- <a class="btn-getstarted" href="courses.html">Get Started</a> -->

  </div>
    <?php 
    if(isset($_SESSION['Email_Ens'])){
      $Email_Ens = $_SESSION['Email_Ens'];
      $select = mysqli_query($conn,"SELECT * FROM `enseignant` WHERE Email_Ens = '$Email_Ens'");

    while ($row = mysqli_fetch_assoc($select)){

      $Id_Ens = $row['Id_Ens'];
      $univ = $row['universitaire'];
      $fac = $row['faculte'];
      $dep = $row['departement'];
      ?>
   
    <div class="dropdown">
    <button style="border: none; " class="" type="button" data-toggle="dropdown" aria-expanded="false">
      <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
<path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5"/>
</svg>
      </button>
      <div  class="dropdown-menu" style="width: 400px;" >
        <ul style="list-style: none;">
          <li><?php echo 'Nom : '.$row['Nom_Ens'] . '<br> Prénom : '. $row['Prénom_Ens'] ;?></li>
          <li><?php echo 'Email : '.$row['Email_Ens'];?></li>
          <li><?php echo 'Date de naissance : '.$row['Date_Nais_Ens'];?></li>
          <li><?php echo 'Grade : '.$row['Grade'];?></li>

          <li><?php echo 'Sexe : '.$row['Sexe_Ens'];?></li>
       <?php  $sel = mysqli_query($conn,"SELECT * FROM `université` WHERE Id_Univ = '$univ'");
       while ($univ1 = mysqli_fetch_assoc($sel)){
        ?>
          <li><?php echo 'Universitaire : '.$univ1['Nom_Univ'];?></li>
          <?php } 
           $sel1 = mysqli_query($conn,"SELECT * FROM `faculté` WHERE Id_Fac = '$fac'");
           while ($fac1 = mysqli_fetch_assoc($sel1)){
          ?>
           <li><?php echo 'Faculté : '.$fac1['Nom_Fac'];?></li>
          <?php } ?>
          <?php } 
           $sel11 = mysqli_query($conn,"SELECT * FROM `departement` WHERE Id_Dep = '$dep'");
           while ($dep1 = mysqli_fetch_assoc($sel11)){
          ?>
          <li><?php echo 'Departement : '.$dep1['Nom_Dep'];?></li>
          <?php }  ?>
            <li> 
            Votre commande est :
          <?php 
          $select2 = mysqli_query($conn,"SELECT * FROM `demande` WHERE Id_Ens = '$Id_Ens'");
          while($get = mysqli_fetch_assoc($select2)){
            echo $get['Status'];
          }

          ?>
          </li> 


      
        </ul>
      </div>
    </div>
   
    <?php } ?>
    
  </header>
 