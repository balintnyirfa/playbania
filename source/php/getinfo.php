<?php
    session_start();
    require_once "dbms.php";
    $dbname="jokeorama";
    $con=connect("root","",$dbname);
    
    $id = $_SESSION["id"];
    $query="SELECT email, username, pfp from users where id='".$id."'";

    $result=mysqli_query($con,$query) or die ("Nem sikerült ".$query);

    list($email, $username, $pfp)=mysqli_fetch_row($result);
    {
        echo "<h2 align= 'center'>Felhasználó adatai:</h2>";
        echo "<table align='center' cellspacing='10'>";
            echo "<tr>";
                #echo "<td rowspan='5'><img width='130' height='150' src='img/". $name . "/". $pfp ."'></td>";
                echo "<td></td>";
                echo "<td></td>";
            echo "</tr>";
            echo "<tr>";
                echo "<td></td>";
                echo "<td>Felhasználónév:</td>";
                echo "<td>" . $username . "</td>";
            echo "</tr>";
            echo "<tr>";
                echo "<td></td>";
                echo"<td>E-mail:</td>";
                echo"<td>" . $email . "</td>";
            echo "</tr>";
        echo "</table>";
        echo "<p>";
    }    
    mysqli_close($con);
?>