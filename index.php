<?php require("config/config.php")?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen">
    <!-- My css -->
    <link type="text/css" rel="stylesheet" href="css/style.css">
    <!-- Animate -->
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

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

    <!-- Browser tab -->
    <link rel="icon" href="img/puzzle.png">
    <title>Projects</title>
  </head>

  <?php
  $sql = "SELECT * FROM home";
  $pre = $pdo->prepare($sql);
  $pre->execute();
  $data = $pre->fetch(PDO::FETCH_ASSOC);
  ?>

  <body>

    <!-- NavBar -->
    <?php require "components/nav.php"; ?>
    
    <div class="death">
      <div class="header-bg">
        
        <!-- Header -->
        <h1 id="header" class="center-align margin-header white-text animate__animated animate__fadeIn wow"><?php echo $data["h1"] ?></h1>

        <?php if(isset($_SESSION['user'])){ ?>
          <div class="white-text center-align"> Hello <?php echo $_SESSION['user']['username'] ?> ! </div>
        <?php }else{ ?>
          <div class="white-text center-align"> You are not connected </div>
        <?php } ?>

        <!-- Japan Expo -->
        <div class="row container margin valign-wrapper">
          <div class="col s12 m6 l6">
            <div class="card hoverable animate__animated animate__slideInLeft wow">
              <div class="card-image waves-effect waves-block waves-light">
                <a href="japanexpo.html"><img class="activator" src=<?php echo $data["img_1"] ?> alt="japan expo"></a>
              </div>
              <div class="card-content">
                <span class="card-title grey-text text-darken-4"><?php echo $data["h2_1"] ?></span>
              </div>
            </div>  
          </div>
          <div class="col s12 m6 l6">
            <div class="row">
              <div class="col s12 m8 l8 offset-l2 offset-m2">
                <div class="card-panel animate__animated animate__zoomIn wow">
                  <span><?php echo $data["p1"] ?>
                  </span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <?php require "components/parallax.php"; ?>

      <!-- Graphic Charter -->
      <div class="row container margin valign-wrapper">
        <div class="col s12 m6 l6">
          <div class="row">
            <div class="col s12 m8 l8 offset-l2 offset-m2">
              <div class="card-panel animate__animated animate__zoomIn wow">
                <span><?php echo $data["p2"] ?>
                </span>
              </div>
            </div>
          </div>
        </div>
        <div class="col s12 m6 l6">
          <div class="card hoverable animate__animated animate__slideInRight wow">
            <div class="card-image waves-effect waves-block waves-light">
              <a href="charterkg.html"><img class="activator" src=<?php echo $data["img_2"] ?> alt="charter"></a>
            </div>
            <div class="card-content">
              <span class="card-title grey-text text-darken-4"><?php echo $data["h2_2"] ?></span>
              </div>
          </div>
        </div>        
      </div>

      <?php require "components/parallax.php"; ?>

      <!-- IJSO 2019 -->
      <div class="row container margin valign-wrapper">
        <div class="col s12 m6 l6">
          <div class="card hoverable animate__animated animate__slideInLeft wow">
            <div class="card-image waves-effect waves-block waves-light">
              <a href="ijso.html"><img class="activator" src=<?php echo $data["img_3"] ?> alt="ijso"></a>
            </div>
            <div class="card-content">
              <span class="card-title grey-text text-darken-4"><?php echo $data["h2_3"] ?></span>
            </div>
          </div>
        </div>        
        <div class="col s12 m6 l6">
          <div class="row">
            <div class="col s12 m8 l8 offset-l2 offset-m2">
              <div class="card-panel animate__animated animate__zoomIn wow">
                <span><?php echo $data["p3"] ?>
                </span>
              </div>
            </div>
          </div>
        </div>
      </div>

      <?php require "components/parallax.php"; ?>

      <!-- Dev Team -->
      <div class="row container margin">

        <h2 class="center-align">
          Website Dev Team
        </h2>

        <div class="col s12 m6 l6 center-align">
          <div class="card animate__animated animate__backInUp wow">
            <div class="row">
              <div class="col s12 m12 l6 center-align">
                <img class="activator round" src="img/anaelle.jpg" alt="anaelle">
              </div>
              <div class="col s12 m12 l6 card-content left-align">
                <ul>
                <li><span class="card-title grey-text text-darken-4">ROMANZIN Anaëlle</span></li>
                <li><a class="waves-effect waves-light red lighten-2 btn" href="https://www.linkedin.com/in/ana%C3%ABlle-romanzin-a10569251/" target="blank" rel="nofollow">LinkedIn</a></li>
                </ul>
              </div>
            </div>
            <div class="center-align valign-wrapper card-content">
              <p>Student at Gaming Campus, future Game Dev and member of Kaio Gaming to organize eSports tournaments, participating in the creation of gaming related events and community management</p>
            </div>
          </div>
        </div>
        <div class="col s12 m6 l6 center-align">
          <div class="card animate__animated animate__backInUp wow">
            <div class="row">
              <div class="col s12 m12 l6 center-align">
                <img class="activator round" src="img/bruno.jpg" alt="bruno">
              </div>
              <div class="col s12 m12 l6 card-content left-align">
                <ul>
                  <li><span class="card-title grey-text text-darken-4">CLEYMAND Bruno</span></li>
                  <li><a class="waves-effect waves-light red lighten-2 btn" href="https://www.linkedin.com/in/bruno-cleymand-22aaa4253/" target="blank" rel="nofollow">LinkedIn</a></li>
                </ul>
              </div>
            </div>
            <div class="center-align valign-wrapper card-content">
              <p>16 years old student in his first year in GTech at Gaming Campus, Lyon, yearning for new experience to finally be able to show off on "present your past projects" assignments, and maybe make videogames too.</p>
            </div>
          </div>
        </div>
      </div>

      <!-- Footer -->
      <?php require "components/footer.php"; ?>
    </div>  

    <!--JavaScript at end of body for optimized loading-->
    <script src="js/jquery.min.js"></script>
    <script src="js/materialize.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js" integrity="sha512-Eak/29OTpb36LLo2r47IpVzPBLXnAMPAVypbSZiZ4Qkf8p/7S/XRG5xp7OKWPPYfJT6metI+IORkR5G8F900+g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="js/script.js"></script>
    <!--Toast error-->
    <script>
        <?php if (isset($_SESSION['errorlogin'])) {
            echo "M.toast({html: '".$_SESSION['errorlogin']."'})";
            unset($_SESSION['errorlogin']);
        } ?>
    </script>

  </body>
</html>