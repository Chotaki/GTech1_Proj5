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
    <title>Japan Expo</title>
  </head>

  <body>

  <!-- NavBar -->
  <?php require_once "components/nav.php" ?>
  
  <div class="death">
    <!-- Header -->
    <header id="headerproj"><h1 class="center-align white-text margin animate__animated animate__fadeIn">Japan Expo</h1></header>

    <!-- Content -->
    <div id="topcard" class="row container wow animate__animated animate__slideInLeft">
      <div class="col s12 m6 l6">
        <div class="card">
          <div class="card-content">
            <span class="card-title">Going to Paris</span>
            <p>As an association evolving in the gaming and eSport industry in France and Luxembourg, the Japan Expo is a must to gain visibility. With the covid, the Japan Expo didn’t happen for two years so in 2022 we knew it was going to be a crazy event. We planned everything in two months and in july we were able to attend the event.</p>
          </div>
        </div>
      </div>
    </div>  
    
    <div class="row container wow animate__animated animate__slideInRight">
      <div class="col s12 m6 l6 offset-m6 offset-l6">
        <div class="card">
          <div class="card-content">
            <span class="card-title">Organizing tournaments</span>
            <p>Anaëlle had the chance to be at the head of a team for two tournaments during the event. She had to organize the inscriptions as well as the competition itself. In the morning she was listing all the contestants while in the afternoon she was taking care of the players and the games happening with Alexis’ help while contesting as well.</p>
          </div>
        </div>
      </div>
    </div>

    <div class="row container wow animate__animated animate__slideInLeft">
      <div class="col s12 m6 l6">
        <div class="card">
          <div class="card-content">
            <span class="card-title">Animating on stage</span>
            <p>Anaëlle was lucky enough to comment on a few tournaments on the biggest stage of the event. The games were Demon Slayer and Naruto and she was alongside Yohan that co-animated, it was a fun and rewarding experience.</p>
          </div>
        </div>
      </div>
    </div>

    <div class="row container wow animate__animated animate__slideInRight">
      <div class="col s12 m6 l6 offset-m6 offset-l6">
        <div class="card">
          <div class="card-content">
            <span class="card-title">Animating a stand</span>
            <p>This is the main occupation of the association so it wasn’t the first time that Anaëlle animated a stand. The only difference was the amount of people she saw and talked to. It was a bit more stressful because all the people passing by were potential thieves.</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Carousel -->
    <div class="row">
      <div class="col s12 m12 l6 offset-l3 carousel carousel-slider center margin">
        <div class="carousel-fixed-item center">
          <a class="btn waves-effect white grey-text darken-text-2" href="https://www.japan-expo-paris.com/fr/" target="_blank" rel="nofollow">Japan Expo</a>
        </div>
        <div class="carousel-item white-text" style="background-image:url('<?php echo ?>')">
          <h2 class="carousel-text">Installation</h2>
        </div>
        <div class="carousel-item white-text" style="background-image:url('<?php echo ?>')">
          <h2 class="carousel-text">Our Stand</h2>
        </div>
        <div class="carousel-item white-text" style="background-image:url('<?php echo ?>')">
          <h2 class="carousel-text">The Team</h2>
        </div>
        <div class="carousel-item white-text" style="background-image:url('<?php echo ?>')">
          <h2 class="carousel-text">Toornament</h2>
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