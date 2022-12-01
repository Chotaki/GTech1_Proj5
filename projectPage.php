<?php require("config/config.php")?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen">
    
    <link type="text/css" rel="stylesheet" href="css/style.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

    <meta charset="UTF-8">
    <meta name="description" content="project presentation">

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Prompt:wght@800&display=swap" rel="stylesheet">

    <!-- Browser Tab -->
    <link rel="icon" href="img/puzzle.png">
    <title><?php echo $data["h1"]?></title>
  </head>

  <body>

  <!-- NavBar -->
  <?php require_once "components/nav.php" ?>
  
  <div class="death">
    <!-- Header -->
    <header id="headerproj"><h1 class="center-align white-text margin animate__animated animate__fadeIn"><?php echo $data["h1"]?></h1></header>

    <!-- Content -->
    <div id="topcard" class="row container wow animate__animated animate__slideInLeft">
      <div class="col s12 m6 l6">
        <div class="card">
          <div class="card-content">
            <span class="card-title"><?php echo $data["span1"]?></span>
            <p><?php echo $data["p1"]?></p>
          </div>
        </div>
      </div>
    </div>  
    
    <div class="row container wow animate__animated animate__slideInRight">
      <div class="col s12 m6 l6 offset-m6 offset-l6">
        <div class="card">
          <div class="card-content">
            <span class="card-title"><?php echo $data["span2"]?></span>
            <p><?php echo $data["p2"]?></p>
          </div>
        </div>
      </div>
    </div>

    <div class="row container wow animate__animated animate__slideInLeft">
      <div class="col s12 m6 l6">
        <div class="card">
          <div class="card-content">
            <span class="card-title"><?php echo $data["span3"]?></span>
            <p><?php echo $data["p3"]?></p>
          </div>
        </div>
      </div>
    </div>

    <div class="row container wow animate__animated animate__slideInRight">
      <div class="col s12 m6 l6 offset-m6 offset-l6">
        <div class="card">
          <div class="card-content">
            <span class="card-title"><?php echo $data["span4"]?></span>
            <p><?php echo $data["p4"]?></p>
          </div>
        </div>
      </div>
    </div>

    <!-- Carousel -->
    <div class="row">
      <div class="col s12 m12 l6 offset-l3 carousel carousel-slider center margin">
        <div class="carousel-fixed-item center">
          <a class="btn waves-effect white grey-text darken-text-2" href="<?php echo $data["a_link"]?>" target="_blank" rel="nofollow"><?php echo $data["a_title"]?></a>
        </div>
        <div class="carousel-item white-text" style="background-image:url('<?php echo $data["img1"]?>')">
          <h2 class="carousel-text"><?php echo $data["h2_1"]?></h2>
        </div>
        <div class="carousel-item white-text" style="background-image:url('<?php echo $data["img2"]?>')">
          <h2 class="carousel-text"><?php echo $data["h2_2"]?></h2>
        </div>
        <div class="carousel-item white-text" style="background-image:url('<?php echo $data["img3"]?>')">
          <h2 class="carousel-text"><?php echo $data["h2_3"]?></h2>
        </div>
        <div class="carousel-item white-text" style="background-image:url('<?php echo $data["img4"]?>')">
          <h2 class="carousel-text"><?php echo $data["h2_4"]?></h2>
        </div>
      </div>
    </div>  

    <!-- Footer -->
    <?php require_once "components/footer.php" ?>
    
    <!--JavaScript at end of body for optimized loading-->
    <script src="js/jquery.min.js"></script>
    <script src="js/materialize.min.js"></script>    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js" integrity="sha512-Eak/29OTpb36LLo2r47IpVzPBLXnAMPAVypbSZiZ4Qkf8p/7S/XRG5xp7OKWPPYfJT6metI+IORkR5G8F900+g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="js/script.js"></script>

  </body>
</html>