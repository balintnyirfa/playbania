<?php
    //session_start();
    require_once "dbms.php";
    $dbname = "jokeorama";
    $con = connect("root", "", $dbname);
    $sql = "SELECT * FROM jokes INNER JOIN users ON (users.id = jokes.userId)";
    $result = mysqli_query($con, $sql);
    
    while($row = $result->fetch_assoc())
    {
        echo "<table style='background-color: #909090; width: 350px;' align='center' cellspacing='5'>";
        echo "<tr>";
            echo "<td rowspan='7'><img height='250' src='../img/".$row['username']."/meme/".$row['pic']."'></td>";
        echo "</tr>";
        echo "<tr>";
            echo "<td>" . $row['text'] . "</td>";
        echo "</tr>";
        echo "<tr>";
            echo "<td>" . $row['username'] . "</td>";
        echo "</tr>";
        echo "</table>";
    }
?>