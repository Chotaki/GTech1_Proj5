<?php
if (isset($_POST["email"]) && isset($_POST["mail_content"])){

    $email = "bcleymand@gaming.tech";
    $object = "Projects Website: ".$_POST["email"];
    $content = "<b>".$_POST["mail_content"]."<b>";
    $headers = 'MIME-Version: 1.0;Content-type: text/html; charset=utf8';

    if(mail($email,$object,$content,$headers)){
        echo('email sent!');
        //le mail est bien parti ! Pas d'erreur
    }else{
        //on a une erreur quelque part
        echo('something went wrong, please try again.');
    }
}

//ici on emmène l'utilisateur sur index.php
?>