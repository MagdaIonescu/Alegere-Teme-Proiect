<?php
    $conn = mysqli_connect("localhost","root","","alegere_teme_proiect");
    if(!$conn){
        die("Failed to connect:".mysqli_connect_error());
    }
    