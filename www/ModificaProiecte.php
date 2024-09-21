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
        <title>Modifica Proiecte</title>
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
        <h1>Listă proiecte</h1>
        <table>
            <tr>
                <th>Nr.</th>
                <th>Tema Proiectului</th>
                <th>Eliminare</th>
                <th>Actualizare</th>
            </tr>
            <?php
            $conn = mysqli_connect("localhost", "root", "", "alegere_teme_proiect");

            if (isset($_POST['pr'])){
                $proiect = $_POST['pr'];
                mysqli_query($conn,"INSERT INTO proiecte (proiect) VALUES(\"$proiect\")");
                unset($_POST);  
            } 

            $result = mysqli_query($conn, "SELECT id_proiect,proiect FROM proiecte");
            $ct=1;
            while($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<th>".$ct.".</th>";
                echo "<th>".$row["proiect"]."</th>";
                echo "<th> <a href='delete.php?nume_proiect=$row[proiect]'>x</a></th>"; 
                echo "<th> 
                <form method='post' action='update.php'>
                    <input type='text' name='nume_nou'>
                    <input value='✓' type='submit'>
                    <input type='hidden' name='id_hidden' value=".$row['id_proiect']."> 
                </form>
                </th>";
                echo "</tr>";
                $ct++;
            }
        ?>
        </table>
        <br><br>
        <form method="post" action="ModificaProiecte.php">
            <p>Adăugați un nou proiect:</p>
            <input type="text" name="pr">
            <input value="Adaugă" type="submit">
        </form>
    </div>
    </body>
</html>