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
    <title>Alege Proiect</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="styles.css">
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
    <div class="ap">
          <?php    
            $conn = mysqli_connect("localhost", "root", "", "alegere_teme_proiect");
            $s=$_SESSION['ns'];
            $p=$_SESSION['pns'];

            $id=mysqli_query($conn,"SELECT id_user FROM useri WHERE nume_user='$s' && prenume_user='$p'");
            $row = mysqli_fetch_assoc($id);
            $noulid = $row['id_user'];

             $altId=0;
             $abc = mysqli_query($conn, "SELECT id_user FROM proiecte_alese WHERE id_user='$noulid'");
             
            if (mysqli_num_rows($abc) === 0){
              if (isset($_POST['Proiect'])){

                $idproiect = $_POST['Proiect'];
                mysqli_query($conn,"INSERT INTO proiecte_alese (id_user,id_proiect) VALUES($noulid,$idproiect) ");
                mysqli_query($conn,"UPDATE proiecte SET ales=0 WHERE proiecte.id_proiect=$idproiect");
                unset($_POST);
                echo "<h4>Proiectul a fost ales cu succes!</h4>";
              }
            } 
            else{
              echo "<h4>Deja ai ales proiect!</h4>";
            }
          ?>

        <form method="post" action="AlegeProiect.php">

            <h1>Alege proiect</h1>

            <h2>Proiect</h2>
            <select name="Proiect">
            <option label="#"></option>
            <?php
                $result = mysqli_query($conn, "SELECT id_proiect,proiect FROM proiecte WHERE ales>0");
                while($row = mysqli_fetch_assoc($result)) {
                  echo '<option value="'. $row["id_proiect"]. "\">" .$row["proiect"]."</option>";
                  //<option value="2">Magazin Online</option>
                }
                mysqli_close($conn);
            ?>
            </select> 
            <br>
            <input value="Alege" type="submit"> 
        </form>
    </div>
  </body>
</html>