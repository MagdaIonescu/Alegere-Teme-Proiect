<?php
    $conn = mysqli_connect("localhost", "root", "", "alegere_teme_proiect");

    $rez=$_GET['nume_proiect']; 
    $query="DELETE FROM proiecte WHERE proiect='$rez'";
    mysqli_query($conn,$query);
    header("Location:ModificaProiecte.php");

