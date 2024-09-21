<?php
session_start();

if (isset($_POST["num"]) && isset($_POST["pnum"])){
    $nume=$_POST["num"];
    $pnume=$_POST["pnum"];
    $pwd=$_POST["ps"];

    require_once 'connection.php';
    require_once 'functions.php';

    if(emptyInputLogin($nume,$pnume,$pwd)!== false){
        header("Location:Conectare.php?error=emptyinput");
        exit();
    }
    if($nume=='admin' && $pnume=='admin' && $pwd=='admin'){
        $_SESSION['na']=$nume;
        $_SESSION['pna']=$pnume;
        $_SESSION['ps']=$pwd;
        header("Location:AcasaP.php");
    }
    else{
        loginUser($conn,$nume,$pnume,$pwd);
    }
}
else{
    header("Location:Conectare.php");
    exit();
}