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
                <li><a href="#modal1">Sign Up</a></li>
                <li><a href="#modal2">Sign In</a></li>
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

</body>
</html>