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
</head>
<body>
 
<nav id="navbar" class="sticky red lighten-2">
    <div class="nav-wrapper">
        <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        <ul class="hide-on-med-and-down">
            <div>
                <li><a onClick="refreshPage()"><i class="material-icons">home</i></a></li>
                <li><a href="japanexpo.html">Japan Expo</a></li>
                <li><a href="charterkg.html">Graphic Charter</a></li>
                <li><a href="ijso.html">IJSO 2019</a></li>
            </div>
            <div class="right">
                <li><a class="modal-trigger" href="#modal3">Sign Up</a></li>
                <li><a class="modal-trigger" href="#modal2">Sign In</a></li>
            </div>
        </ul>
    </div>
</nav>

<ul class="sidenav" id="mobile-demo">
    <li><a onClick="refreshPage()"><i class="material-icons">home</i></a></li>
    <li><a href="japanexpo.html">Japan Expo</a></li>
    <li><a href="charterkg.html">Graphic Charter</a></li>
    <li><a href="ijso.html">IJSO 2019</a></li>
    <li><a href="#modal1">Sign Up</a></li>
    <li><a href="#modal2">Sign In</i></a></li>
</ul>

<div id="modal3" class="modal red lighten-2">
    <div class="container">
        <div class="modal-content">
        <h4 class="center-align white-text">Sign Up</h4>
        </div>
        <form class="row" method="post" action="signup.php">
            <div class="input-field col s12 m6 offset-m3">
                <i class="material-icons prefix white-text">contact_mail</i>
                <input id="username" type="username" class="validate">
                <label for="email" class="white-text">Username</label>
            </div>
            <div class="input-field col s12 m6 offset-m3">
                <i class="material-icons prefix white-text">contact_mail</i>
                <input id="email" type="email" class="validate">
                <label for="email" class="white-text">Email</label>
                <span class="helper-text" data-error="Invalid Adress" data-success=""></span>
            </div>
            <div class="row">
                <div class="input-field col s12 m6 offset-m3">
                    <i class="material-icons prefix white-text">contact_mail</i>
                    <input id="password" type="password" class="validate">
                    <label for="email" class="white-text">Password</label>
                </div>
            </div>
        </form>
    </div>
    <div class="modal-footer">
        <a href="#!" class="modal-close waves-effect waves btn-flat">Cancel</a>
        <button class="btn waves-effect waves-light pink lighten-1" type="submit" name="action">Send<i class="material-icons right">send</i></button>
    </div>
  </div>

<div id="modal2" class="modal">
<div class="modal-content">
    <h4>Modal Header</h4>
    <p>A bunch of text</p>
</div>
<div class="modal-footer">
    <a href="#!" class="modal-close waves-effect waves-green btn-flat">Agree</a>
</div>
</div>

</body>
</html>