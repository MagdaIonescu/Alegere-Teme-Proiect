<!DOCTYPE html>
<html lang="ro-RO">
    <head>
        <link rel="stylesheet" href="styles.css" >
        <meta charset="UTF-8">
        <title>Inregistrare</title>
    </head>

    <body>
    
    <header>
        <div class="menu">
            <img src="logo.png" alt="Logo" class="logo">
            <a href="PaginaPrincipala.php" class="menu-item">Acasa</a>
            <a href="Conectare.php" class="menu-item">Conectare</a>
            <a href="Inregistrare.php" class="menu-item">Inregistrare</a>
        </div>
    </header>

    <div class="login">
        <img src="avatar.png" class="avatar" alt="poza avatar">
        <h1>Inregistrare</h1>
        <form method="post" action="signup.inc.php">
            <p>Nume</p>
            <input type="text" name="nume" placeholder="Introduceți numele">
            <p>Prenume</p>
            <input type="text" name="prenume" placeholder="Introduceți prenumele">
            <p>Parolă</p>
            <input type="password" name="parola" placeholder="Introduceți parola">
            <p>Reintroduceți parola</p>
            <input type="password" name="parola2" placeholder="Introduceți parola">
            <br><br>
            <input type="submit" name="inregistrare" value="Înregistrare">
        </form>
        <?php
        if(isset($_GET["error"])){
            if($_GET["error"] == "emptyinput"){
                echo "<h3>Completați toate câmpurile!</h3>";
            }
            else if($_GET["error"] == "invalidinput"){
                echo "<h3>Nume/prenume invalid!</h3>";
            }
            else if($_GET["error"] == "passmatch"){
                echo "<h3>Introduceți aceeași parolă!</h3>";
            }
            else{
                echo "<h3>V-ați conectat cu succes!</h3>";
            }
        }
        ?>
    </div>
    </body>
</html>