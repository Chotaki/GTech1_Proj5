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
    <title>IJSO 2019</title>
  </head>

  <body>

  <!-- NavBar -->
  <nav id="navbar" class="sticky">
    <div class="nav-wrapper">
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      <ul class="hide-on-med-and-down">
        <li><a href="index.html"><i class="material-icons">home</i></a></li>
        <li><a href="japanexpo.html">Japan Expo</a></li>
        <li><a href="charterkg.html">Graphic Charter</a></li>
        <li><a onClick=refreshPage()>IJSO 2019</a></li>
      </ul>
    </div>
  </nav>
    
  <ul class="sidenav" id="mobile-demo">
    <li><a href="index.html"><i class="material-icons">home</i></a></li>
    <li><a href="japanexpo.html">Japan Expo</a></li>
    <li><a href="charterkg.html">Graphic Charter</a></li>
    <li><a onClick=refreshPage()>IJSO 2019</a></li>
  </ul>
  
  <div class="death">
    <!-- Header -->
    <header id="headerproj"><h1 class="center-align white-text margin animate__animated animate__fadeIn">IJSO 2019</h1></header>

    <!-- Content -->
    <div id="topcard" class="row container wow animate__animated animate__slideInLeft">
      <div class="col s12 m6 l6">
        <div class="card">
          <div class="card-content">
            <span class="card-title">A team</span>
            <p>We were the first French team to ever participate in the competition which was extremely rewarding. Our team was composed of 6 students like every other and we were selected baseed on our english level and sciences grades.</p>
          </div>
        </div>
      </div>
    </div>  
    
    <div class="row container wow animate__animated animate__slideInRight">
      <div class="col s12 m6 l6 offset-m6 offset-l6">
        <div class="card">
          <div class="card-content">
            <span class="card-title">Exams</span>
            <p>We had 3 exams during the week. The first one was an individual MCQ, the second one was individual theorical test and the last one was a pratical exam in groups of three, each exams being about physics, chemistry and biology</p>
          </div>
        </div>
      </div>
    </div>

    <div class="row container wow animate__animated animate__slideInLeft">
      <div class="col s12 m6 l6">
        <div class="card">
          <div class="card-content">
            <span class="card-title">An opportunity to visit a countrie</span>
            <p>We stayed in Qatar for 10 days and having only 3 exam days allowed us to move a lot. We visited a bunch of museum and even were allowed a day at the beach, that part of the trip was absolutely awesome.</p>
          </div>
        </div>
      </div>
    </div>

    <div class="row container wow animate__animated animate__slideInRight">
      <div class="col s12 m6 l6 offset-m6 offset-l6">
        <div class="card">
          <div class="card-content">
            <span class="card-title">A medal</span>
            <p>All my efforts and work during several months were finally rewarded by winning a bronze medal, making me the first ever French student winning a medal at that competition and I made France be one of the few country receiving a medal on their first participation, which is usually pretty rare.</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Carousel -->
    <div class="row">
      <div class="col s12 m12 l6 offset-l3 carousel carousel-slider center margin">
        <div class="carousel-fixed-item center">
          <a class="btn waves-effect white grey-text darken-text-2" href="http://www.ijsoweb.org/" target="_blank" rel="nofollow">IJSO</a>
        </div>
        <div class="carousel-item white-text frenchteam-img">
          <h2 class="carousel-text">French Team</h2>
        </div>
        <div class="carousel-item white-text visits-img">
          <h2 class="carousel-text">Visits</h2>
        </div>
        <div class="carousel-item white-text exams-img">
          <h2 class="carousel-text">Exams</h2>
        </div>
        <div class="carousel-item white-text meetings-img">
          <h2 class="carousel-text">International Meetings</h2>
        </div>
      </div>
    </div>  

    <!-- Footer -->
    <footer class="page-footer">
      <div class="row center-align">
        <div class="col s12 m4 l4 center-align">
          <img id="gcicon" class="responsive-img" src="img/gamingcampus.png" alt="logo gaming campus">
        </div>

        <div class="white-text container col s12 m4 l4 not-img center-align">
          <h3>Our Emails</h3>
          <p>aromanzin@gaming.tech <br>
          bcleymand@gaming.tech</p>
        </div>
        <div class="col s12 m4 l4 not-img center-align">
          <!-- Modal Trigger -->
          <a class="waves-effect waves-light btn-large modal-trigger pink lighten-1" href="#modal1">Contact us !<i class="material-icons right">mail_outline</i></a>
          <!-- Modal Structure -->
          <div id="modal1" class="modal">
            <div class="modal-content red lighten-2">
              <h4 class="black-text center-align white-text">Any questions ?</h4>
              <div class="container">
                <form class="row">
                  <div class="input-field col s12 m6 offset-m3">
                    <i class="material-icons prefix white-text">contact_mail</i>
                    <input id="email" type="email" class="validate">
                    <label for="email" class="white-text">Email</label>
                    <span class="helper-text" data-error="Invalid Adress" data-success=""></span>
                  </div>
                  <div class="row">
                    <div class="input-field col s12">
                      <i class="material-icons prefix white-text">mode_edit</i>
                      <textarea id="icon_prefix2" class="materialize-textarea white-text"></textarea>
                      <label for="icon_prefix2" class="white-text">Your message here</label>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <div class="modal-footer">
              <a href="#!" class="modal-close waves-effect waves btn-flat">Cancel</a>
              <button class="btn waves-effect waves-light pink lighten-1" type="submit" name="action">Send<i class="material-icons right">send</i></button>
            </div>
          </div>
        </div>
      </div>
      <div class="row footer-copyright">
        <div class="col s12 m6 l6 center-align">
         <p  class="grey-text text-lighten-4">&copy; Gaming Campus - 2022</p>
        </div>
        <div class="col s12 m6 l6 center-align">
          <a  class="grey-text text-lighten-4" href="https://gamingcampus.fr/?utm_term=gaming%20campus&utm_campaign=Gaming+Campus+-+Marque&utm_source=adwords&utm_medium=ppc&hsa_acc=5656227748&hsa_cam=11532002367&hsa_grp=118137353731&hsa_ad=483696679366&hsa_src=g&hsa_tgt=kwd-423735683440&hsa_kw=gaming%20campus&hsa_mt=e&hsa_net=adwords&hsa_ver=3&gclid=Cj0KCQjw48OaBhDWARIsAMd966DPDHNvnESKud8um5xdaCbx1x1k3eEKmMFDSOfBztSD9FPHT5Do1W4aArgCEALw_wcB" target="_blank" rel="nofollow">Gaming Campus Website</a>
        </div>
        </div>
    </footer>
  </div>  
    
    <!--JavaScript at end of body for optimized loading-->
    <script src="js/jquery.min.js"></script>
    <script src="js/materialize.min.js"></script>    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js" integrity="sha512-Eak/29OTpb36LLo2r47IpVzPBLXnAMPAVypbSZiZ4Qkf8p/7S/XRG5xp7OKWPPYfJT6metI+IORkR5G8F900+g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="js/script.js"></script>

  </body>
</html>