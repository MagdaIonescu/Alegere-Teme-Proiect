<?php
    session_start();
    if  (isset($_SESSION['na'])&&isset($_SESSION['pna'])&&isset($_SESSION['ps'])) {
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
        <title>AcasaP</title>
    </head>

    <body>

    <header>
            <div class="menu">
                <img src="logo.png" alt="Logo" class="logo">
                <a href="AcasaP.php" class="menu-item">Proiecte Alese</a>
                <a href="ModificaProiecte.php" class="menu-item">Modifică proiecte</a>
                <a href="logout.php" class="menu-item">Deconectare</a>
            </div> 
    </header>
      <div class="page">
        <h1>Proiecte alese</h1><br>
        <table>
            <tr>
                <th>Nr.</th>
                <th>Nume</th>
                <th>Prenume</th>
                <th>Temă proiect</th>
            </tr>
            <?php
            $conn = mysqli_connect("localhost", "root", "", "alegere_teme_proiect");

            $result = mysqli_query($conn, "SELECT nume_user, prenume_user, proiecte.proiect FROM `useri` JOIN proiecte_alese ON useri.id_user=proiecte_alese.id_user JOIN proiecte ON proiecte.id_proiect=proiecte_alese.id_proiect order by nume_user");

            $ct=1;
            while($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<th>".$ct.".</th>";
                echo "<th>".$row["nume_user"]."</th>";
                echo "<th>".$row["prenume_user"]."</th>";
                echo "<th>".$row["proiect"]."</th>";
                echo "</tr>";
                $ct++;
            }
        ?>
        </table>
      </div>
   </body>
</html>
