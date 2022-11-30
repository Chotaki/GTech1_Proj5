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
                <li><a href="japanexpo.php">Japan Expo</a></li>
                <li><a href="charterkg.php">Graphic Charter</a></li>
                <li><a href="ijso.php">IJSO 2019</a></li>
            </div>
            <div class="right">
                <?php if (isset($_SESSION['user'])){ ?>
                    <form action="queries/logout.php">
                        <button class="btn waves-effect waves-light pink lighten-1" type="submit">LogOut</button>
                    </form>
                <?php }else{?>
                    <li><a class="modal-trigger" href="#modal3">Sign Up</a></li>
                    <li><a class="modal-trigger" href="#modal2">Login</a></li>
                <?php } ?>
            </div>
        </ul>
    </div>
</nav>

<ul class="sidenav" id="mobile-demo">
    <li><a onClick="refreshPage()"><i class="material-icons">home</i></a></li>
    <li><a href="japanexpo.php">Japan Expo</a></li>
    <li><a href="charterkg.php">Graphic Charter</a></li>
    <li><a href="ijso.php">IJSO 2019</a></li>
    <li><a href="#modal3">Sign Up</a></li>
    <li><a href="#modal2">Login</i></a></li>
    <form action="queries/logout.php">
        <button class="btn waves-effect waves-light pink lighten-1" type="submit">LogOut</button>
    </form>
</ul>

<div id="modal3" class="modal red lighten-2">
    <div class="container">
        <div class="modal-content">
        <h4 class="center-align white-text">Sign Up</h4>
        </div>
        <form class="row" method="post" action="queries/signup.php">
            <div class="input-field col s12 m6 offset-m3">
                <i class="material-icons prefix white-text">person</i>
                <input id="username" type="text" name="username" class="validate"/>
                <label for="username" class="white-text">Username</label>
            </div>
            <div class="input-field col s12 m6 offset-m3">
                <i class="material-icons prefix white-text">mail</i>
                <input id="email" type="email" name="email" class="validate"/>
                <label for="email" class="white-text">Email</label>
                <span class="helper-text" data-error="Invalid Adress" data-success=""></span>
            </div>
            <div class="row">
                <div class="input-field col s12 m6 offset-m3">
                    <i class="material-icons prefix white-text">key</i>
                    <input id="password" type="password" name="password" class="validate"/>
                    <label for="password" class="white-text">Password</label>
                </div>
            </div>
        </div>
        <div class="modal-footer">
        
            <?php 
            if (isset($_SESSION["error"])){
                echo "<div class='left red white-text'>".$_SESSION["error"]."</div>";
                unset($_SESSION["error"]);
            };
            ?>
            <a href="#!" class="modal-close waves-effect waves btn-flat">Cancel</a>
            <button class="btn waves-effect waves-light pink lighten-1" type="submit">Sign Up<i class="material-icons right">send</i></button>
        </div>
    </form>
  </div>

<div id="modal2" class="modal red lighten-2">
    <div class="container">
        <div class="modal-content">
            <h4 class="center-align white-text">Login</h4>
        </div>
        <form class="row" method="post" action="queries/login.php">
            <div class="input-field col s12 m6 offset-m3">
                <i class="material-icons prefix white-text">person</i>
                <input id="username" type="text" name="username" class="validate"/>
                <label for="username" class="white-text">Username</label>
            </div>
            <div class="row">
                <div class="input-field col s12 m6 offset-m3">
                    <i class="material-icons prefix white-text">key</i>
                    <input id="password" type="password" name="password" class="validate"/>
                    <label for="password" class="white-text">Password</label>
                </div>
            </div>
    </div>
    <div class="modal-footer">
    <a href="#!" class="modal-close waves-effect waves btn-flat">Cancel</a>
    <button class="btn waves-effect waves-light pink lighten-1" type="submit" name="action">Login<i class="material-icons right">send</i></button>
    </form>
    </div>
</div>

</body>
</html>