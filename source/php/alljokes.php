<?php
#session_start();
require_once "dbms.php";
$dbname = "jokeorama";
$con = connect("root", "", $dbname);
$sql = "SELECT * FROM jokes INNER JOIN users ON (users.id = jokes.userId)";
$result = mysqli_query($con, $sql);

while($row = $result->fetch_assoc())
{
    echo "<table style='background-color: #A8E9E7;' align='center' cellspacing='5'>";
    echo "<tr>";
        echo "<td>" . $row['text'] . "</td>";
    echo "</tr>";
    echo "<tr>";
        echo "<td>" . $row['users.username'] . "</td>";
    echo" </tr>";
}
?>