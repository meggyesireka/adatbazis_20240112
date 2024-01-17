<?php
session_start();

include('connect.php');

$RegNev = $_POST['RegNev'];
$RegSzulhely = $_POST['RegSzulhely'];
$RegSzuldatum = $_POST['RegSzuldatum'];
$RegAnyjaneve = $_POST['RegAnyjaneve'];
$RegApjaneve = $_POST['RegApjaneve'];
$RegElhalhely = $_POST['RegElhalhely'];
$RegElhalido = $_POST['RegElhalido'];



if (mysqli_connect_error()){
    die('Connect Error ('. mysqli_connect_errno() .') '
      . mysqli_connect_error());}
else{


    $INSERT = "INSERT INTO szemelyek(Nev, Szulhely, Szuldatum, Anyjaneve, Apjaneve, Elhalhely, Elhalido, IDszemely)
             VALUES (?,?,?,?,?,?,?,?)";


        $stmt = $conn->prepare($INSERT);
        $stmt->bind_param("ssssssss",$RegNev, $RegSzulhely, $RegSzuldatum, $RegAnyjaneve, $RegApjaneve, RegElhalhely, $RegElhalido, $RegIDSzemely);
        $stmt->execute();

$stmt->close();
$conn->close();
        }
        echo
        "<div class='form'>
        <h3>Új személy sikeresen regisztrálva!</h3>
        <br/>Kattints ide az oldal  <a href='../src/index.html'>újratöltéséért!</a></div>";
       die();
      
      
      ?>



