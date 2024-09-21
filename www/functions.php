<?php
function emptyInputSignup($name,$pname,$pwd,$pwd2){
    $result;
    if(empty($name)||empty($pname)||empty($pwd)||empty($pwd2)){
        $result=true;
    }
    else{
        $result=false;
    }
    return $result;
}

function invalidName($name,$pname){
    $result;
    if(!preg_match("/^[a-zA-Z]*$/",$name)){
        $result=true;
    }
    else{
        $result=false;
    }
    return $result;
}

function pwdMatch($pwd,$pwd2){
    $result;
    if($pwd!==$pwd2){
        $result=true;
    }
    else{
        $result=false;
    }
    return $result;
}


function createUser($conn,$name,$pname,$pwd){
    $name=htmlentities($name);
    $pname=htmlentities($pname);
    $pwd=htmlentities($pwd);

    mysqli_query($conn,"INSERT INTO useri (nume_user, prenume_user, parola) VALUES (\"$name\", \"$pname\", \"$pwd\")");

    header("Location:Conectare.php?erorr=none");
    exit();
}

function emptyInputLogin($name,$pname,$pwd){
    $result;
    if(empty($name)||empty($pname)||empty($pwd)){
        $result=true;
    }
    else{
        $result=false;
    }
    return $result;
}

function loginUser($conn,$name,$pname,$pwd){
    $sql="SELECT nume_user,prenume_user,parola FROM useri WHERE nume_user='$name' AND prenume_user='$pname' AND parola='$pwd'";
    $result=mysqli_query($conn,$sql);
    $row= mysqli_fetch_assoc($result);
    

    if($row!=null){ 
        $_SESSION['ns']=$row['nume_user'];
        $_SESSION['pns']=$row['prenume_user'];
        $_SESSION['ps']=$row['parola'];
        header("Location:AcasaS.php");
    }
    else{
        header("Location:Conectare.php");
    }
}