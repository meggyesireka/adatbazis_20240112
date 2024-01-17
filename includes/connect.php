<?php
  //Adatbázis adatok a kapcsolat létrehozásához
  $servername = "127.0.0.1";
  $username = "root";
  $password = "";
  $dbname = "csaladfa";


  $conn = mysqli_connect($servername, $username, $password, $dbname); // kapcsolat létrehozása

  // kapcsolódás ellenőrzése
  if ($conn->connect_error) {
    die("Sikertelen kapcsolódás: " . $conn->connect_error); // sikertelen kapcsolódás
  } else {
  }
?>