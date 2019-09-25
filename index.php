<!doctype html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>#LaCuraEsLaConciencia</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/stroll.min.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link rel="stylesheet" href="css/animate.css">
  <?php
    include("bd/conexion.php");

    $query = "SELECT * FROM imagen_web";
    $resultado = $conexion->query($query);
    while ($row = $resultado->fetch_assoc()) {
   ?>
     <link rel="icon" type="image/png" href= "data:image/jpg;base64, <?php echo base64_encode($row['imagen']);  ?>" />
   <?php
    }
   ?>

</head>
<body>
<div class="container-fluid">
    <!--Slider-->
    <section>
            <div class="slider fullscreen  white role="navigation"">

          <ul class="slides ">

            <?php
              include("bd/conexion.php");

              $query = "SELECT * FROM tabla_slider";
              $resultado = $conexion->query($query);
              while ($row = $resultado->fetch_assoc()) {
             ?>
             <li>
               <img src="data:image/jpg;base64, <?php echo base64_encode($row['imagen']);  ?>"/>
               <div class="caption right-align">
                 <h3><?php echo $row['titulo']; ?> </h3>
                 <h5 class="light grey-text text-lighten-3"><?php echo $row['descrip']; ?></h5>
               </div>
             </li>
             <?php
              }
             ?>
          </ul>
        </div>

    </section>
    <!--Navegador-->
    <div class="row">
      <div class="container-fluid center">
        <nav class="center" role="navigation">
          <div class="nav-wrapper center #263238 blue-grey darken-4 ">
            <div class="col offset-s2 s9">
            <ul class="center hide-on-med-and-down ">
              <li><a id=text-menu href="#cancion">Los Videos</a></li>
              <li><a id=text-menu href="#cantantes">Los Cantantes</a></li>
              <li><a id=text-menu href="#eventos">Los Eventos</a></li>
              <li><a id=text-menu href="#noticias">Las Noticias</a></li>
              <li><a id=text-menu href="#violencias">Las Violencias</a></li>
              <li><a id=text-menu href="#galeria">La Galería</a></li>
              <li><a id=text-menu href="#contacto">Contactenos</a></li>
            </ul>
            </div>

            <ul id="nav-mobile" class="sidenav #263238 blue-grey darken-4">
              <li><a id=text-menu href="#videos">Los Videos</a></li>
              <li><a id=text-menu href="#cantantes">Los Cantantes</a></li>
              <li><a id=text-menu href="#eventos">Los Eventos</a></li>
              <li><a id=text-menu href="#noticias">Las Noticias</a></li>
              <li><a id=text-menu href="#violencias">Las Violencias</a></li>
              <li><a id=text-menu href="#galeria">La Galería</a></li>
              <li><a id=text-menu href="#contacto">Contactenos</a></li>
              </ul>
              </li>
            </ul>
            <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
          </div>
        </nav>
        </div>
      </div>
<!----------------------------------------------------------------------->
    <!--La Canción-->
    <div id=videos class="row white">
        <div class="col s12 white ">
          <h2 class="texto2">Los Videos</h2>
        </div>
        <?php
          include("bd/conexion.php");

          $query = "SELECT * FROM videos_web";
          $resultado = $conexion->query($query);
          while ($row = $resultado->fetch_assoc()) {
         ?>
         <div class="col m6 s12 center white ">
         <?php echo $row['videos']; ?>
         </div>
         <?php
          }
         ?>
        </div>
            <br>
    <!--Los cantantes-->
        <div id=cantantes class="row">
            <h2 class="center">Los Cantantes</h2>
            <?php
              include("bd/conexion.php");

              $query = "SELECT * FROM cantanes_img";
              $resultado = $conexion->query($query);
              while ($row = $resultado->fetch_assoc()) {
             ?>
               <img  class="materialboxed col s12 m2 " width="100%" src="data:image/jpg;base64, <?php echo base64_encode($row['imagen']);  ?>"/>
             <?php
              }
             ?>
            <br>

    <!--Las Los Eventos-->
    <section>
      <div class="row">
        <div class="col s12">
          <h2 id=eventos class="center aparece">Las Eventos</h2>
          <div class="col s12">
            <?php
              include("bd/conexion.php");

              $query = "SELECT * FROM eventos_web";
              $resultado = $conexion->query($query);
              while ($row = $resultado->fetch_assoc()) {
             ?>
             <div id="index-banner" class="parallax-container">
               <div class="section no-pad-bot">
                 <div class="container">
                   <br><br>
                   <h1 class="header center teal-text text-lighten-2"><?php echo $row['titulo']; ?></h1>
                   <div class="row center">
                     <h5 class="header col s12 light"><?php echo $row['descrip']; ?></h5>
                   </div>
                   <div class="row center">
                     <a href="eventos.php?id=<?php echo $row['id'];?>" id="download-button" class="btn-large waves-effect waves-light teal lighten-1">Enterate</a>
                   </div>
                   <br><br>

                 </div>
               </div>
               <div class="parallax"><img src="data:image/jpg;base64, <?php echo base64_encode($row['imagen']); ?>" alt="Unsplashed background img 1"></div>
             </div>
             <?php
              }
             ?>

            </section>
            <br>
        </div>
      </div>

    <!--Las Noticias-->
    <div id=noticias class="row center">
      <div class="col s12 white ">
        <h2 class="texto1">Las Noticias</h2>
        <div class="row">
          <?php
            include("bd/conexion.php");

            $query = "SELECT * FROM noticias_web";
            $resultado = $conexion->query($query);
            while ($row = $resultado->fetch_assoc()) {
           ?>
           <div class="col s12 m3">
             <div class="card">
               <div class="card-image">
                 <img  src="data:image/jpg;base64, <?php echo base64_encode($row['imagen']);  ?>">
                 <span class="card-title"><?php echo $row['titulo']; ?></span>
                 <a class="btn-floating halfway-fab waves-effect waves-light red" href="noticias.php?id= <?php echo $row['id']; ?>"><i class="material-icons">add</i></a>
               </div>
               <div class="card-content">
                 <p><?php echo $row['descrip']; ?></p>
               </div>
             </div>
           </div>
           <?php
            }
           ?>

          </div>
      </div>
      <br>
    </div>

    <!--Las Violencias-->
    <section>
      <h2 id=violencias class="center aparece  ">Las Violencias</h2>
        <div class="section ">
        <!--   Icon Section   -->
        <div class="row ">
          <?php
            include("bd/conexion.php");

            $query = "SELECT * FROM violencias_cura";
            $resultado = $conexion->query($query);
            while ($row = $resultado->fetch_assoc()) {
           ?>
           <div class="col s12 m2 violenciascaja wow fadeInDown" data-wow-duration="1s  ">
             <div class="icon-block">
               <h2 class="center brown-text"><i class="material-icons"><?php echo $row['titulo']; ?></i><?php echo $row['icon']; ?></h2>
               <h5 class="center"><?php echo $row['titulo']; ?></h5>
             </div>
           </div>
           <?php
            }
           ?>


        </div>
        </div>
        <br>
    </section>
      <!--La Galeria-->
    <section>
        <div  class="row">
          <h2  id=galeria class="center">La Galería</h2>
        <div class="col s6">
              <div class="carousel">
                <?php
                  include("bd/conexion.php");

                  $query = "SELECT * FROM galeria_web";
                  $resultado = $conexion->query($query);
                  while ($row = $resultado->fetch_assoc()) {
                 ?>
                 <a class="carousel-item" href="#one!"><img src="data:image/jpg;base64, <?php echo base64_encode($row['imagen']);  ?>"</a>
                 <?php
                  }
                 ?>
              </div>
        </div>
        <div class="col s6">
              <div class="carousel">
                <?php
                  include("bd/conexion.php");

                  $query = "SELECT * FROM galeria_web2";
                  $resultado = $conexion->query($query);
                  while ($row = $resultado->fetch_assoc()) {
                 ?>
                 <a class="carousel-item" href="#one!"><img src="data:image/jpg;base64, <?php echo base64_encode($row['imagen']);  ?>"</a>
                 <?php
                  }
                 ?>
              </div>
      </div>
        <br>
    </section>
</div>


<!--  Scripts-->
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="js/materialize.js"></script>
<script src="js/init.js"></script>
<script src="js/wow.min.js"></script>
<script>

    $(document).ready(function(){
     $('.slider').slider();
    });

    $('.dropdown-button').dropdown({
       inDuration: 300,
       outDuration: 225,
       constrainWidth: false, // Does not change width of dropdown to that of the activator
       hover: true, // Activate on hover
       gutter: 0, // Spacing from edge
       belowOrigin: false, // Displays dropdown below the button
       alignment: 'left', // Displays dropdown with edge aligned to the left of button
       stopPropagation: false // Stops event propagation
     }
    );

    document.addEventListener('DOMContentLoaded', function() {
     var elems = document.querySelectorAll('.carousel');
     var instances = M.Carousel.init(elems, options);
    });

    // Or with jQuery

    $(document).ready(function(){
     $('.carousel').carousel();
    });

    document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.materialboxed');
    var instances = M.Materialbox.init(elems, options);
    });

    // Or with jQuery

    $(document).ready(function(){
          $('.materialboxed').materialbox();
        });

        wow = new WOW(
          {
            animateClass: 'animated',
            offset:       100,
            callback:     function(box) {
              console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
            }
          }
        );
        wow.init();
        document.getElementById('moar').onclick = function() {
          var section = document.createElement('section');
          section.className = 'section--purple wow fadeInDown';
          this.parentNode.insertBefore(section, this);
        };
</script>

</body>
</html>
