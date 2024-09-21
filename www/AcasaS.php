<?php
    session_start();
    if  (isset($_SESSION['ns'])&&isset($_SESSION['pns'])&&isset($_SESSION['ps'])) {
    }
    else{
        header("Location:Conectare.php");
        exit();
    }
?>

<!DOCTYPE html>
<html lang="ro-RO">
    <head>
        <link rel="stylesheet" href="styles.css" >
        <meta charset="UTF-8">
        <title>AcasaS</title>
    </head>

    <body>
        <header>
            <div class="menu">
                <img src="logo.png" alt="Logo" class="logo">
                <a href="AcasaS.php" class="menu-item">Proiecte</a>
                <a href="AlegeProiect.php" class="menu-item">Alege Proiect</a>
                <a href="logout.php" class="menu-item">Deconectare</a>
            </div> 
    </header>
    <div class="page">
        <h1>Teme de proiect</h1>
        <br>
        <table>
        <tr>
            <th>Nr.</th>
            <th>Temă proiect</th>
            
        </tr>
        <?php
            $conn = mysqli_connect("localhost", "root", "", "alegere_teme_proiect");

            $result = mysqli_query($conn, "SELECT proiect FROM proiecte");
            $id=1; 
            while($randulCurent = mysqli_fetch_assoc($result)) { 
                echo "<tr>";
                echo "<td>".$id.".</td>";
                echo "<td>".$randulCurent["proiect"]."</td>";
                echo "</tr>";
                $id++;
            }
        ?>
        </table>
        <br>
        <p>Proiectul trebuie să respecte următoarele <a href="https://webspace.ulbsibiu.ro/radu.kretzulescu/html/cursweb10/Cerinte_pentr_proiect.pdf" target="_blank">cerințe.</a></p>
    </div>
    </body>
    
</html>