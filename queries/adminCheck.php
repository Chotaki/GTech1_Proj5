<?php
require_once("config/config.php");

if (!isset($_SESSION['user']) || $_SESSION['user']["admin"]==0){
    if(is_file("index.php")){
        header('Location: index.php');
    }else{
        header('Location: ../index.php');
    }
    exit();
}else{
    if(is_file("panelAdmin.php")){
        header('Location: panelAdmin.php');
    }else{
        header('Location: ../panelAdmin.php');
    }
}
?>