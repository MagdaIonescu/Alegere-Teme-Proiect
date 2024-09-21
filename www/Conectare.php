<!DOCTYPE html>
<html lang="ro-RO">
    <head>
        <link rel="stylesheet" href="styles.css" >
        <meta charset="UTF-8">
        <title>Conectare</title>
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
        <h1>Conectare</h1>
        <form method="post" action="login.inc.php">
            <p>Nume</p>
            <input type="text" name="num" placeholder="Introduceți numele">
            <p>Prenume</p>
            <input type="text" name="pnum" placeholder="Introduceți prenumele">
            <p>Parolă</p>
            <input type="password" name="ps" placeholder="Introduceți parola">
            <br><br>
            <input type="submit" name="conectare" value="Conectare">
            <a href="#">Nu aveți un cont încă?</a>
        </form>
        <br>
        <?php
            if(isset($_GET["error"])){
                if($_GET["error"] == "emptyinput"){
                    echo "<h3>Completați toate câmpurile!</h3>";
                }
            }
        ?>
    </div>
    </body>
</html>