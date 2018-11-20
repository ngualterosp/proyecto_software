<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BADBUNNY</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/creative.min.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <?php
    include "navegacion_botones.php";
    ?>


    <header class="masthead text-center text-white d-flex">
      <div class="container my-auto">
        <div class="row">
          <div class="col-lg-10 mx-auto">
            <h1 class="text-uppercase">
              <strong>BAD BUNNY</strong>
            </h1>
            <br><br><br>
          </div>
          <div class="col-lg-8 mx-auto">
            <a class="btn btn-primary btn-xl js-scroll-trigger" href="#noticias">Echa un vistazo!</a>
          </div>
        </div>
      </div>
    </header>

    <section class="bg-primary" id="noticias">
      <div class="container">
        <div>
          <div>
            <center><h1 class="section-heading text-white">ÚLTIMAS NOTICIAS</h1><br><br><br></center>
            <?php
            require_once('noticiasCliente.php');
            ?>
            <center><br><br><a class="btn btn-light btn-xl js-scroll-trigger" href="#giras">SIGUIENTE</a></center>
          </div>
        </div>
      </div>
    </section>

    <section id="giras">
          <?php
          require_once('girasCliente.php');
          ?>
      <div>
        <center><br><br>
<a class="btn btn-primary btn-xl js-scroll-trigger" href="#prensa">SIGUIENTE</a>
</center>
      </div>
    </section>

    <section class="p-0" id="prensa">
      <div class="container-fluid p-0">
        <div class="row no-gutters popup-gallery">
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="img/prensa1.jpg">
              <img class="img-fluid" src="img/prensa1.jpg" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Category
                  </div>
                  <div class="project-name">
                    Project Name
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="img/prensa2.jpg">
              <img class="img-fluid" src="img/prensa2.jpg" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Category
                  </div>
                  <div class="project-name">
                    Project Name
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="img/prensa3.jpg">
              <img class="img-fluid" src="img/prensa3.jpg" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Category
                  </div>
                  <div class="project-name">
                    Project Name
                  </div>
                </div>
              </div>
            </a>
          </div>

    </section>

    <section class="bg-dark text-white">
      <div class="container text-center">
        <h2 class="mb-4">RUEDA DE PRENSA E INTERACCIÓN CON FANS</h2>
        <p class="text-faded mb-4">Las ruedas de prensa e interacción con los fans del 'Conejo Malo' tendrán lugar en las diferentes ciudades en donde se presentará lo que resta de este 2018.
          Con su gira "La nueva Religión Tour", el artista puertorriqueño atenderá las respectivas entrevistas e interactuará con los fans el día anterior a su concierto en cada ciudad, puesto que
          por ciudad estará un promedio de 2 días concentrado con su equipo de trabajo.</p>
          <center><a class="btn btn-light btn-xl js-scroll-trigger" href="#historia">SIGUIENTE</a></center>
      </div>
    </section>

    <section id="historia">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <div>
              <center>
                <img src="img/historia2.jpeg" width="60%"/>
      </center>
            </div>
            <hr class="my-4">
          </div>
        </div>
        <center>
          <p align=left>Nació en la ciudad de San Juan, Puerto Rico. Desde que tenía 5 años quiso ser cantante.​ Ocasio creció en las playas de Puerto Rico, en la comunidad de Vega Baja con sus padres y dos hermanos menores. Uno de sus primeros recuerdos es cuando recibió un álbum de Vico C para Navidad, y desde ahí comenzó a cantar, componer y producir, tenía 13 años. Entre quienes lo inspiran cuenta a Héctor Lavoe y Michael Jordan.</p>
          <h2 class="section-heading" align=center>Éxitos Principales</h2>
          <table>
            <tr>
              <td>
                🔥Diles Remix (Arcángel, Ozuna, Ñengo Flow, Farruko)
              </td>
              <td>
<a class="btn btn-primary  js-scroll-trigger" href="https://www.youtube.com/watch?v=UWV41yEiGq0">Reproducela!</a>
              </td>
            </tr>
            <tr>
<td>
🔥Soy peor<br>
</td>
<td>
  <a class="btn btn-primary js-scroll-trigger" href="https://www.youtube.com/watch?v=ws00k_lIQ9U">Reproducela!</a>
</td>
            </tr>
            <tr>
<td>
  🔥Amorfoda<br>
</td>
<td>
  <a class="btn btn-primary js-scroll-trigger" href="https://www.youtube.com/watch?v=kLpH1nSLJSs">Reproducela!</a>
</td>
            </tr>
            <tr>
<td>
  🔥Si tu novio te deja Sola(ft J Balvin)<br>
</td>
<td>
  <a class="btn btn-primary  js-scroll-trigger" href="https://www.youtube.com/watch?v=Km4BayZykwE">Reproducela!</a>
</td>
            </tr>
            <tr>
              <td>
                  🔥I Like It (Cardi B & J Balvin)<br>
              </td>
              <td>
  <a class="btn btn-primary js-scroll-trigger" href="https://www.youtube.com/watch?v=Yu_RKofJUH0">Reproducela!</a>
              </td>
            </tr>
          </table>
        </section>

    <section class="text-light bg-dark" id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading">Sígueme en las redes sociales!</h2>
            <p class="mb-5">Noticias diarias, fotos, vídeos y contenido exclusivo sólo en las redes sociales, SÍGUEME</p>
          </div>
        </div>
        <center>
      <table align="center" width="100%" >


        <tr>
        <td><center>
        <a href="https://www.instagram.com/badbunnypr/?hl=es-la"><img src="img/instagram12.png" width="20%"></a>
        </center></td>
        <td><center>
        <a href="https://es-la.facebook.com/BadBunnyOfficial/"><img src="img/facebook.png" width="15%"></a>
        </center></td>
        <td><center>
        <a href="https://twitter.com/bad_bunnypr?lang=es"><img src="img/twitter.png" width="20%"></a>
        </center></td>
        <td><center>
        <a href="https://www.youtube.com/channel/UCmBA_wu8xGg1OfOkfW13Q0Q"><img src="img/youtube1.png" width="20%"></a>
        </center></td>
        </tr>
      </table>
    </center>
        </div>
      </div>
    </section>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/creative.min.js"></script>

  </body>

</html>
