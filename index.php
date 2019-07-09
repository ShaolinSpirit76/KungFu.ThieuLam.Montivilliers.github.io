<!DOCTYPE html>
<!-- Spécification du langage de la page et du sens de lecture -->
<html lang="fr" dir="ltr">

<head>

  <!-- Prise en charge des accents et autres caractères spéciaux -->
  <meta charset="utf-8" />
  <!-- Pour être responsive -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Compatibilité internet explorer -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- CDN de font awesome pour l'utilisation des fa-fa et des icones -->
  <script src="https://kit.fontawesome.com/eaadffbb2b.js"></script>
  <script src="assets/eaadffbb2b.js"></script>
  <!-- CDN de Bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <!-- Lien avec la page CSS (toujours après Bootstrap pour éviter les bug) -->
  <link rel="stylesheet" href="assets/header.css" />
  <link rel="stylesheet" href="assets/footer.css" />
  <link rel="stylesheet" href="assets/style.css" />
   <!-- Lien script pour animer -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="assets/aos.js"></script>
  <!-- Lien pour le scroll to top -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Merriweather:400,900,900i" rel="stylesheet">
  <link href="assets/css?family=Merriweather:400,900,900i.css" rel="stylesheet">
  <!-- Lien éventuel pour l'utilisation d'une police -->
  <link href="https://fonts.googleapis.com/css?family=Merienda|Permanent+Marker&display=swap" rel="stylesheet">
  <link href="assets/css?family=Merienda|Permanent+Marker&display=swap.css" rel="stylesheet">
  <!-- Lien pour placer une icone dans l'onglet, avant le titre de la page -->
  <link rel="icon" href="images/logo.jpg">
    <!-- Titre de la page affiché dans l'onglet -->
  <title>Kung-Fu.ThieuLam.Montivilliers - Don't think... Feel !</title>

</head>







<body>

  <!-- Début du header -->

  <!-- Pour le scroll to top -->
  <a id="buttonScroll" class="rounded-circle"></a>



  <div id="header">
    <div id="logoEcole" class="text-center">
      <img src="images/thieuLam.jpg" height="70%" width="70%" class="rounded-circle" />
    </div>
    <h1 class="text-center"><i>Cercle ThieuLam Montivilliers</i></h1>

    <h2 class="text-center">École de Kung-Fu spécialisée dans le style Shaolin traditionnel</h2>
  </div>

  <!-- Fin du header -->





  <!-- 1ère navbar : connexion -->
  <nav id="connexion" class="sticky-top">
    <ul class="nav justify-content-end">
      <li class="nav-item">
        <a class="nav-link active text-dark" href="#"><img src="images/iconfinder_Recent Documents_37492.png" class="img-fluid" width="30%" height="30%" alt="icone Calendrier" title="Gérer le calendrier" /><br />Calendrier</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active text-dark" href="#"><img src="images/iconfinder_My Documents_37479.png" class="img-fluid" width="30%" height="30%" alt="icone Dossiers" title="Mon compte" /><br />Mon Compte</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark" href="#"><img src="images/iconfinder_Turn Off_37503.png" class="img-fluid" width="30%" height="30%" alt="icone Déconnexion" title="Déconnexion" /><br />Déconnexion</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark" href="#"><img src="images/iconfinder_Email_37462.png" class="img-fluid" width="30%" height="30%" alt="icone Connexion" title="Connexion" /><br />Connexion</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark" href="#"><img src="images/iconfinder_Internet_37471.png" class="img-fluid" width="30%" height="30%" alt="icone Inscription" title="Inscription" /><br />Inscription</a>
      </li>
    </ul>
  </nav>
  <!-- Fin 1ère navbar -->






  <!-- Silhouette avec particules -->
  <div id="home1">
          <div id="particles-js"></div>
    </div>
  




  <!-- Début de la 2ème navbar -->

   <?php
include 'pages/navbar.php';
   ?>
  
  <!-- Fin de la 2ème navbar -->










  <div id="home">

    <div class="mx-auto text-center">
      <img id="affiche" src="images/1098360_574799055894754_409396215_n.jpg" width="30%" height="30%" />

      <img id="calendrier" src="images/37766491_2147381731969804_6551757075704184832_n.png" width="45%" height="45%" />
    </div>

    <?php
    include 'pages/calendar.php';
    ?>

  </div>










  <div id="schoolDoors">
  <?php
include 'pages/schoolDoors.php';
   ?>
  </div>

  <div id="news">
    <p>Fil d'actualités</p>
  </div>

  <div id="kungFu">
    <p>Kung-Fu</p>
  </div>

  <div id="taïchiChuan">
    <p>Taïchi Chuan</p>
  </div>

  <div id="sandaShoubo">
    <p>Sanda & Shoubo</p>
  </div>

  <div id="ourCircle">
    <p>Notre cercle</p>
  </div>

  <div id="links">
    <p>Liens</p>
  </div>

  <div id="shop">
    <p>Boutique</p>
  </div>

  <div id="contactForm">
  <?php
include 'pages/contact.php';
   ?>
  </div>

  <div id="AssoInformations">
  <?php
    include 'Mentions/AssoInfos.php';
    ?>
    </div>

  <div id="legalInformations">
  <?php
    include 'Mentions/legalInfos.php';
    ?>
  </div>

  <div id="CGU">
    <?php
    include 'Mentions/CGU.php';
    ?>
  </div>

  <div id="RGPD">
  <?php
    include 'Mentions/RGPD.php';
    ?>
  </div>










  <!-- Début du footer -->
  <div id="foot">
    <footer class="main-footer">

      <!-- Footer Links -->
      <div class="container mt-5 mb-4 text-center text-md-left">
        <div class="row mt-3">

          <!-- First column -->
          <div class="col-md-3 col-lg-4 col-xl-3 mr-auto mb-4">
            <div class="photo-responsive">
              <a href="https://www.google.com/maps/place/49%C2%B033'15.6%22N+0%C2%B009'38.8%22E/@49.5543333,0.1602293,119m/data=!3m2!1e3!4b1!4m5!3m4!1s0x0:0x0!8m2!3d49.5543333!4d0.1607778" target="_blank"><img
                  src="images/12RueDuManoirMontivilliers.png" id="image7" class="img-fluid rounded" alt="lien adresse google map" width="100%" height="100%" title="Cliquez pour afficher l'adresse sur Google Map" /></a>
              <p><small class="text-white">École située entre le 17 et le 23 rue du Manoir, 76290, Montivilliers.<br />
                  Coordonnées GPS : <a href="https://www.google.com/maps/place/49%C2%B033'15.6%22N+0%C2%B009'38.8%22E/@49.5543333,0.1602293,119m/data=!3m2!1e3!4b1!4m5!3m4!1s0x0:0x0!8m2!3d49.5543333!4d0.1607778" target="_blank">49°33'15.6"N
                    0°09'38.8"E</a></small></p>
            </div>


          </div>
          <!-- First column -->

          <!-- Second column -->
          <div id="contact" class="col-md-4 offset-md-1 col-lg-3 col-xl-2.5 mx-auto mb-4">
            <h6 class="footer-title">Contact</h6>
            <hr class="mb-4 mt-0 d-inline-block mx-auto" />

            <p id="contact">
              <img src="images/iconfinder_05_188725.png" class="img-fluid mr-3" width="20%" height="20%" alt="icone d'email" title="Email" /> <a href="mailto:levray.jm@wanadoo.fr" title="Cliquez pour envoyer un email">levray.jm@wanadoo.fr</a></p>
            <p>
              <img src="images/iconfinder_Help_37470.png" class="img-fluid mr-3" width="20%" height="20%" alt="icone de téléphone fixe" title="N° fixe" /> 02. 35. 20. 43. 16</p>
            <p>
              <img src="images/iconfinder_Mobile Device_37473.png" class="img-fluid mr-3" width="20%" height="20%" alt="icone de téléphone portable" title="N° portable" /> 06. 22. 16. 71. 80</p>
            <p>
              <img src="images/2398089-256.png" class="img-fluid mr-3" width="20%" height="20%" alt="icone facebook" title="Facebook" /> <a href="https://www.facebook.com/kungfuthieulammontivilliers" target="_blank" title="Cliquez pour aller"> Lien
                Facebook</a></p>
          </div>
          <!-- Second column -->

          <!-- Third column -->
          <div class="col-md-6 offset-md-1 col-lg-4 col-xl-5 mr-auto mb-8">
            <h6 class="footer-title">Pour toutes questions ou remarques concernant le site</h6>
            <hr class="mb-4 mt-0 d-inline-block mx-auto" />
            <p class="footer-legis">
              <img src="images/iconfinder_Mail_642206.png" class="img-fluid mr-3" width="15%" height="15%" alt="icone d'email" title="Email" /> <a href="mailto:kungfu.montivilliers@gmail.com"
                title="Cliquez pour envoyer un email">kungfu.montivilliers@gmail.com</a><br /><br /></p>
            <h6 class="footer-title">Mentions légales</h6>
            <hr class="mb-4 mt-0 d-inline-block mx-auto" />
            <p class="footer-legis">
              • <a href="#AssoInformations" class="AssoInformations clickTop">Informations légales de l'association</a>
            </p>
            <p class="footer-legis">
              • <a href="#legalInformations" class="legalInformations clickTop">Informations légales du site</a>
            </p>
            <p class="footer-legis">
              • <a href="#CGU" title="Conditions Générales d'Utilisation" class="CGU clickTop">CGU</a>
            </p>
            <p class="footer-legis">
              • <a href="#RGPD" title="Règlement Général sur la Protection des Données" class="RGPD clickTop">RGPD</a>
            </p>
          </div>
          <!-- Third column -->







        </div>
      </div>
      <!-- Footer Links -->


      <!-- Copyright -->
      <div class="footer-copyright text-center py-3 bg-dark text-white">© 2019 Copyright : <a href="https://shaolinspirit76.github.io/" target="_blank">Shaolin Spirit 76</a>, du cercle Thieu-Lâm :)
      </div>
      <!-- Copyright -->

    </footer>
    <!-- Fin du footer-->
  </div>




  <!-- CDN JavaScript toujours à la fin du body pour éviter les bug -->
  <!-- D'abord le CDN de JQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="assets/jquery.min.js"></script>
  <!-- Puis le CDN du Popper.js -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="assets/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <!-- Et enfin le CDN de Bootstrap.js -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="assets/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <!-- Sweet alert 2 -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
  <script src="assets/sweetalert2@8.js"></script>
  <!-- Lien avec la page JS (toujours après les CDN de JQuery) -->
  <script src="assets/script.js"></script>
  <!-- Liens script.js pour les particules -->
  <script src="assets/particle.js"></script>
  <script src="assets/jquery_002.js"></script>
  <script src="assets/plugins.js"></script>
  

</body>



</html>
