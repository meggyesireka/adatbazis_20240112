<?php

session_start();

include ('connect.php');

if (mysqli_connect_error()){
    die('Connect Error ('. mysqli_connect_errno() .') '
      . mysqli_connect_error());}

    else{
        $SELECT = "SELECT* FROM szemelyek";

        $result = $conn-> query($SELECT);

        if ($result->num_rows > 0) {
            echo "<table>
                <tr>
                    <th>ID</th>
                    <th>Név</th>
                    <th>Születési hely</th>
                    <th>Születési idő</th>
                    <th>Anyja neve</th>
                    <th>Apja neve</th>
                    <th>Esetleges elhalálozás helye</th>
                    <th>Esetleges elhalálozás ideje</th>
                </tr>
                </table>";
          // Kimeneti adatok
          while($row = $result->fetch_assoc()) {
            echo    "<tr> <td>".$row["IDszemely"]. 
                    "</td> <td>".$row["Nev"]. 
                    "</td> <td>".$row["Szuldatum"]. 
                    "</td> <td>".$row["Szulhely"]. 
                    "</td> <td>".$row["Anyjaneve"]. 
                    "</td> <td>".$row["Apjaneve"].
                    "</td> <td>".$row["Elhalido"]. 
                    "</td> <td>".$row["Elhalhely"]. 
                    "</td> <td>".$row["Elhalhely"].
                    "</td> <td>".$row["Elhalido"]."</td>";
          }
        } else {
          echo "0 results";
        }
        $conn->close();
        echo
        "<div class='form'>
        <h3>Az adatok lekérdezése sikeres!</h3>
        <br/>Kattints ide az oldal  <a href='../src/index.html'>újratöltéséért!</a></div><br/>";
       die();
    }

    