<?php
    $conn = mysqli_connect("localhost", "root", "", "alegere_teme_proiect");

    $rez=$_POST['nume_nou']; 
    $idproiect=$_POST['id_hidden'];
    $query="UPDATE proiecte SET proiect='$rez' WHERE id_proiect='$idproiect'  ";
    mysqli_query($conn,$query); 
    header("Location:ModificaProiecte.php");