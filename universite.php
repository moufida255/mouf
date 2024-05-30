<?php 
require_once "db/connection.php";
if(isset($_SESSION['Email_Ens'])){
  $Email_Ens = $_SESSION['Email_Ens'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Index - Mentor Bootstrap Template</title>
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
    <link href="assets/css/main.css" rel="stylesheet">
</head>

<body>
    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                pageLanguage: 'en'
            }, 'google_translate_element');
        }
    </script>

    <script type="text/javascript" src="js/translate.js"></script>

    <?php include_once "db/header.php"; ?>

    <main class="main">
        <!-- Counts Section -->
        <section id="counts" class="section counts bg-success">
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row gy-4">
                    <h1 class="text-light">
                        RÉSEAU UNIVERSITAIRE</h1>
                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item text-center w-100 h-100">
                            <img src="images/icon-png.png" alt="" width="60" style="background-color: #fff;border-radius: 50%;padding:6px">
                            <span data-purecounter-start="0" data-purecounter-end="54" data-purecounter-duration="1" class="purecounter text-light"></span>
                            <p class="text-light">Universités</p>
                        </div>
                    </div>
                    <!-- End Stats Item -->

                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item text-center w-100 h-100">
                            <img src="images/icon-png.png" alt="" width="60" style="background-color: #fff;border-radius: 50%;padding:6px">
                            <span data-purecounter-start="0" data-purecounter-end="9" data-purecounter-duration="1" class="purecounter text-light"></span>
                            <p class="text-light">Centes universitaires</p>
                        </div>
                    </div>
                    <!-- End Stats Item -->

                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item text-center w-100 h-100">
                            <img src="images/icon-png.png" alt="" width="60" style="background-color: #fff;border-radius: 50%;padding:6px">
                            <span data-purecounter-start="0" data-purecounter-end="37" data-purecounter-duration="1" class="purecounter text-light"></span>
                            <p class="text-light">Ecoles nationales Supérieures</p>
                        </div>
                    </div>
                    <!-- End Stats Item -->

                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item text-center w-100 h-100">
                            <img src="images/icon-png.png" alt="" width="60" style="background-color: #fff;border-radius: 50%;padding:6px">
                            <span data-purecounter-start="0" data-purecounter-end="24" data-purecounter-duration="1" class="purecounter text-light"></span>
                            <p class="text-light">Ecoles normales Supérieures</p>
                        </div>
                    </div>
                    <!-- End Stats Item -->

                </div>
             </div>
         </section>
        <!-- /Counts Section -->
        <!-- Why Us Section -->

        <center>

            <section id="why-us" class="section why-us">

                <div class="container">

                    <div class="row gy-4 text-center">
                        <div class="col-lg-12 d-flex align-items-stretch">
                            <div class="row gy-4" data-aos="fade-up" data-aos-delay="200">
                                <div class="col-xl-4" style="border-radius:50%;">
                                    <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                                        <img src="images/greduction.png" alt="" width="100">
                                        <br>
                                        <h4>CONFÉRENCE
                                            RÉGIONALE
                                            DES UNIVERSITÉS
                                            DE L'EST</h4>

                                    </div>
                                </div>
                                <!-- End Icon Box -->


                                <div class="col-xl-4" data-aos="fade-up" data-aos-delay="300">
                                    <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                                        <img src="images/greduction.png" alt="" width="100">
                                        <br>
                                        <h4>CONFÉRENCE
                                            RÉGIONALE
                                            DES UNIVERSITÉS
                                            DU CENTRE </h4>
                                    </div>
                                </div>
                                <!-- End Icon Box -->

                                <div class="col-xl-4" data-aos="fade-up" data-aos-delay="400">
                                    <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                                        <img src="images/greduction.png" alt="" width="100">
                                        <br>
                                        <h4>CONFÉRENCE
                                            RÉGIONALE
                                            DES UNIVERSITÉS
                                            DE L'OUEST</h4>
                                    </div>
                                </div>
                                <!-- End Icon Box -->

                            </div>
                        </div>

                    </div>

                </div>

            </section>
            <!-- /Why Us Section -->
        </center>


        <!-- About Section -->
        <section id="about" class="about section">

            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-up" data-aos-delay="100">
                        <img src="images/cover2.png" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-6 order-2 order-lg-1 content" data-aos="fade-up" data-aos-delay="200">
                        <h1 class="bold text-success">UNIVERSITÉS</h1>
                        <h5 style="line-height: 50px;">Missions et règles particulières d’organisation et de fonctionnement de l’université.</h5>

                        <div class="card shadow p-3 mb-5 bg-white rounded">
                            <div class="card-body">

                                <p>
                                    <a class="text-dark bold" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                                        +
                                        Centre
                                    </a>
                                    <hr>

                                </p>
                                <div class="collapse" id="collapseExample">
                                    <div id="elementor-tab-content-9481" class="eael-accordion-content clearfix" data-tab="1" aria-labelledby="centre" style="display: block;">
                                        <table border="0" cellspacing="1" cellpadding="1">
                                            <tbody>
                                                <tr>
                                                    <td>1-&nbsp;<a href="items.php?id=17"   rel="noopener">Université&nbsp; de Laghouat – Amar Telidji</a>&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td>2-&nbsp;<a href="items.php?id=6"   rel="noopener">Université&nbsp; Blida 1 – Saad Dahlab</a>&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td>3-&nbsp;<a href="items.php?id=5"   rel="noopener">Université de Blida 2 – Lounici Ali</a>&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td>4-&nbsp;<a href="items.php?id=2"   rel="noopener">Université d’Alger 1 – Benyoucef Benkhedda</a>&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td>5-&nbsp;<a href="items.php?id=3"   rel="noopener">Université d’Alger 2 – Abou el Kacem Saâdallah</a>&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td>6-&nbsp;<a href="items.php?id=4"   rel="noopener">Université d’Alger 3 – Brahim Soltane Chaibout</a>&nbsp;</td>
                                                </tr>


                                             
                                            </tbody>
                                        </table>
                                    </div>
                                </div>


                                <p>
                                    <a class="text-dark bold" data-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample">
                                        +
                                        Est
                                    </a>

                                    <hr>

                                </p>
                                <div class="collapse" id="collapseExample2">
                                    <div id="elementor-tab-content-9482" class="eael-accordion-content clearfix" data-tab="2" aria-labelledby="est" style="display: block;">
                                        <table border="0" cellspacing="1" cellpadding="1">
                                            <tbody>
                                         




                                                <tr>
                                                    <td>1-&nbsp;<a href="items.php?id=1"   rel="noopener">Université&nbsp; de Annaba – Badji Mokhtar</a>&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td>2-&nbsp;<a href="items.php?id=8"   rel="noopener">Université&nbsp; du 20 Août 1955 de Skikda</a>&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td>3-&nbsp;<a href="items.php?id=12"   rel="noopener">Université&nbsp; de Constantine 1 – Frères Mentouri</a>&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td>4-&nbsp;<a href="items.php?id=11"   rel="noopener">Université&nbsp; de Constantine 2 – Abdelhamid Mehri</a>&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td>5-&nbsp;<a href="items.php?id=9"   rel="noopener">Université de Constantine 3 -Salah Boubnider</a>&nbsp;</td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>


                                <p>
                                    <a class="text-dark bold" data-toggle="collapse" href="#collapseExample3" role="button" aria-expanded="false" aria-controls="collapseExample">
                                        +

                                        Ouest
                                    </a>

                                    <hr>

                                </p>
                                <div class="collapse" id="collapseExample3">
                                    <div id="elementor-tab-content-9483" class="eael-accordion-content clearfix" data-tab="3" aria-labelledby="ouest" style="display: block;">
                                        <table border="0" cellspacing="1" cellpadding="1">
                                            <tbody>
                                               
                                           
                                             
                                                <tr>
                                                    <td>1-&nbsp;<a href="items.php?id=16"   rel="noopener">Université&nbsp; de Tlemcen – Abou Bekr Belkaid</a>&nbsp;</td>
                                                </tr>
                                               
                                            
                                                <tr>
                                                    <td>2-&nbsp;<a href="items.php?id=15"   rel="noopener">Université de Mostaganem – Abdelhamid Ibn Badis</a>&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td>3-&nbsp;<a href="items.php?id=13"   rel="noopener">Universitéd’Oran1 – Ahmed Ben Bella</a>&nbsp;</td>
                                                </tr>
                                            
                                                <tr>
                                                    <td>4-&nbsp;<a href="items.php?id=14"   rel="noopener">Université&nbsp; d’Oran 2 – Mohamed Ben Ahmed</a>&nbsp;</td>
                                                </tr>
                                               
                                               
                                            
                                            </tbody>
                                        </table>
                                    </div>
                                </div>


                            </div>
                        </div>

                    </div>

                </div>

            </div>

        </section><!-- /About Section -->

        <div class="page-title" data-aos="fade">
            <div class="heading">
                <div class="container">
                    <div class="row d-flex justify-content-center text-center">
                        <div class="col-lg-8">
                            <h1 class="">ECOLES SUPÉRIEURES
                                <br>
                            </h1>
                            <p class="mb-0">Décret exécutif n° 16-176 du 9 Ramadhan 1437 correspondant au 14 juin 2016 fixant le statut type de l’école supérieure (J.O.R.A.D.P n° 36 Année 2016, Pages 9 à 16)

                            </p>
                        </div>
                    </div>
                </div>
            </div>


            <div class="d-flex justify-content-between">



                <div class="container ml-5">
                    <h1>NATIONALES</h1>

                    <div class="card shadow p-3 mb-5 bg-white rounded">
                        <div class="card-body">

                            <p>
                                <a class="text-dark bold" data-toggle="collapse" href="#collapseExample4" role="button" aria-expanded="false" aria-controls="collapseExample">
                                    +
                                    Centre
                                </a>
                                <hr>

                            </p>
                            <div class="collapse" id="collapseExample4">
                                <ul>
                                    <li>1. Ecole Nationale Polytechnique </li>
                                    <li>2. Ecole nationale supérieure d’hydraulique – Arbaoui Abdellah </li>
                                    <li>3. Ecole nationale supérieure des travaux publics – Francis Jeanson </li>
                                    <li>4. Ecole nationale supérieure vétérinaire – Rabie Bouchama </li>
                                    <li>5. Ecole Polytechnique d’architecture et d’Urbanisme-Hocine Aït Ahmed </li>
                                    <li>6. Ecole nationale supérieure agronomique- Khalef Abdellah alias Kasdi Merbah </li>
                                    <li>7. Ecole des hautes études commerciales </li>
                                    <li>8. Ecole nationale supérieure d’informatique </li>
                                    <li>9. Ecole nationale supérieure en statistique et en économie appliquée </li>
                                    <li>10. Ecole Supérieure de Commerce-Mouloud Kacem Naït Belkacem </li>
                                    <li>11. Ecole nationale supérieure des sciences de la mer et de l’aménagement du littoral </li>
                                    <li>12. Ecole nationale supérieure de management </li>
                                    <li>13. Ecole Nationale Supérieure de Technologie </li>
                                    <li>14. Ecole nationale supérieure de journalisme et des sciences de l’information </li>
                                    <li>15. Ecole Nationale Supérieure des sciences politiques </li>
                                    <li>16. Ecole Supérieure des Sciences de l’Aliment et des Industries Agroalimentaires d’Alger ex EP SNV Alger </li>
                                    <li>17. Ecole Supérieure des Sciences appliquées d’Alger ex EP ST Alger </li>
                                    <li>18. Ecole Supérieure de Gestion et d’Economie Numérique </li>
                                    <li>19. École Supérieure en Sciences et Technologies de l’Informatique et du Numérique de Bejaia </li>
                                    <li>20. École Nationale Supérieure en Intelligence Artificielle </li>
                                    <li>21. École Nationale Supérieure en Mathématique </li>
                                    <li>22. Ecole Nationale Supérieure des Technologies Avancées </li>

                                </ul>
                            </div>


                            <p>
                                <a class="text-dark bold" data-toggle="collapse" href="#collapseExample5" role="button" aria-expanded="false" aria-controls="collapseExample">
                                    +
                                    Est
                                </a>

                                <hr>

                            </p>
                            <div class="collapse" id="collapseExample5">
                                <ul>
                                    <li>1. Ecole nationale supérieure des mines et de la métallurgie – Amar Laskri</li>

                                    <li>2. Ecole Nationale Polytechnique de Constantine- Malek Bennabi</li>
                                    <li>3. Ecole Nationale Supérieure de Biotechnologie de Constantine – Tewfik Khaznadar</li>
                                    <li>4. Ecole Supérieure des Sciences de Gestion de Annaba ex – EPSECG Annaba</li>
                                    <li>5. Ecole Supérieure des Technologies Industrielles de Annaba ex EP ST Annaba</li>
                                    <li>6. Ecole Supérieure de Comptabilité et de Finance de Constantine ex EPSECG Constantine</li>
                                    <li>7. École nationale supérieure des forêts – Khenchela</li>
                                    <li>8. L’Ecole nationale supérieure des énergies renouvelables, environnement et développement durable – Batna</li>
                                    <li>9. L’Ecole supérieure de l’agriculture saharienne – El Oued</li>

                                </ul>
                            </div>


                            <p>
                                <a class="text-dark bold" data-toggle="collapse" href="#collapseExample6" role="button" aria-expanded="false" aria-controls="collapseExample">
                                    +

                                    Ouest
                                </a>

                                <hr>

                            </p>
                            <div class="collapse" id="collapseExample6">
                                <ul>
                                    <li>1. Ecole Nationale Polytechnique d’Oran – Maurice Audin </li>
                                    <li>2. Ecole Supérieure d’Informatique (Sidi Bel Abbes)- 08 Mai 1945 </li>
                                    <li>3. Ecole Supérieure des Sciences Appliquées de Tlemcen ex EP ST Tlemcen </li>
                                    <li>4. Ecole Supérieure de Management de Tlemcen ex EPSECG Tlemcen </li>
                                    <li>5. Ecole Supérieure d’Economie d’Oran ex EPSECG Oran </li>
                                    <li>6. Ecole Supérieure en Génie Electrique et Energétique d’Oran ex EP ST Oran </li>
                                    <li>7. Ecole Supérieure Agronomique de Mostaganem ex EP SNV Mostaganem </li>
                                    <li>8. Ecole Supérieure des sciences Biologiques d’ Oran ex EP SNV Oran </li>
                                    <li>9. L’Ecoles supérieures de l’agriculture saharienne – Adrar </li>

                                </ul>
                            </div>


                        </div>
                    </div>
                </div>

                <div class="container mr-5">
                    <h1>NORMALES</h1>
                    <div class="card shadow p-3 mb-5 bg-white rounded">
                        <div class="card-body">

                            <p>
                                <a class="text-dark bold" data-toggle="collapse" href="#collapseExample7" role="button" aria-expanded="false" aria-controls="collapseExample">
                                    +
                                    Centre
                                </a>
                                <hr>

                            </p>
                            <div class="collapse" id="collapseExample7">
                                <ul>
                                    <li>1. Ecole normale supérieure de Bouzaréah – Cheikh Mubarak Ben Mohamed Brahimi El Mili</li>
                                    <li>2. Ecole normale supérieure de Kouba – Mohamed Bachir El Ibrahimi</li>
                                    <li>3. Ecole normale supérieure de Laghouat – Taleb Abderrahmane</li>
                                    <li>4. Ecole normale supérieure de sourds muets</li>

                                </ul>
                            </div>


                            <p>
                                <a class="text-dark bold" data-toggle="collapse" href="#collapseExample8" role="button" aria-expanded="false" aria-controls="collapseExample">
                                    +
                                    Est
                                </a>

                                <hr>

                            </p>
                            <div class="collapse" id="collapseExample8">
                                <ul>
                                    <li>1. Ecole normale supérieure de Constantine -Assia Djebar</li>

                                    <li>2. Ecole normale supérieure d’enseignement technologique de Skikda</li>

                                    <li>3. Ecole normale supérieure de setif – Messaoud Zeghar</li>

                                    <li>4. Ecole normale supérieure de Bou Saâda</li>

                                    <li>5. Ecole normale supérieure de Ouargla</li>


                                </ul>
                            </div>


                            <p>
                                <a class="text-dark bold" data-toggle="collapse" href="#collapseExample9" role="button" aria-expanded="false" aria-controls="collapseExample">
                                    +

                                    Ouest
                                </a>

                                <hr>

                            </p>
                            <div class="collapse" id="collapseExample9">
                                <ul>
                                    <li>1. Ecole Normale Supérieure de Mostaganem</li>

                                    <li>2. Ecole Normale Supérieure d’Oran</li>

                                    <li>3. Ecole normale supérieure de Béchar</li>

                                </ul>
                            </div>


                        </div>
                    </div>
                </div>

            </div>




            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-up" data-aos-delay="100">
                        <img src="images/cover1.jpg" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-6 order-2 order-lg-1 content" data-aos="fade-up" data-aos-delay="200">
                        <h1 class="bold text-success">CENTRES UNIVERSITAIRES</h1>
                        <h5 style="line-height: 50px;">Missions et règles particulières d’organisation et de fonctionnement du centre universitaire.
                            .</h5>

                        <div class="card shadow p-3 mb-5 bg-white rounded">
                            <div class="card-body">

                                <p>
                                    <a class="text-dark bold" data-toggle="collapse" href="#collapseExample10" role="button" aria-expanded="false" aria-controls="collapseExample">
                                        +
                                        Centre
                                    </a>
                                    <hr>

                                </p>
                                <div class="collapse" id="collapseExample10">
                                    <ul>
                                        <li>1. Centre universitaire de Tipaza – Abdallah Morsli</li>
                                        <li>2. Centre Universitaire d’Illizi-Cheikh Amoud ben Mokhtar</li>
                                        <li>3. Centre universitaire d’Aflou</li>

                                    </ul>
                                </div>


                                <p>
                                    <a class="text-dark bold" data-toggle="collapse" href="#collapseExample11" role="button" aria-expanded="false" aria-controls="collapseExample">
                                        +
                                        Est
                                    </a>

                                    <hr>

                                </p>
                                <div class="collapse" id="collapseExample11">
                                    <ul>
                                        <li>1. Centre Universitaire de Mila – Abdelhafid Boussouf</li>

                                        <li>2. Centre Universitaire de Barika – Si El Haouès
                                    </ul>

                                    </ul>
                                </div>


                                <p>
                                    <a class="text-dark bold" data-toggle="collapse" href="#collapseExample12" role="button" aria-expanded="false" aria-controls="collapseExample">
                                        +

                                        Ouest
                                    </a>

                                    <hr>

                                </p>
                                <div class="collapse" id="collapseExample12">
                                    <ul>

                                        <li>1. Centre universitaire de Naama – Ahmed Salhi</li>
                                        <li>2. Centre universitaire d’El Bayadh – Nour Bachir</li>
                                        <li>3. Centre universitaire de Tindouf-Ali Kafi</li>
                                        <li>4. Centre universitaire de Maghnia</li>

                                    </ul>
                                </div>


                            </div>
                        </div>

                    </div>

                </div>

            </div>




        </div>

    </main>

    <?php include_once "db/footer.php" ;?>

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


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>

    <script src="assets/js/main.js"></script>

    <style>
        li {
            list-style: none;
        }
    </style>

</body>

</html>