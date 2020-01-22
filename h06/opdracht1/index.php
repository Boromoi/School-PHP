<?php
$conn = mysqli_connect("localhost", "Liam", "Sans","school","3308"); //The Blank string is the password
if ($conn -> connect_error) {
    die("Connection failed:". $conn->connect_error);
}

$sql = "SELECT cursistnr, naam, roepnaam, straat, postcode, plaats, geslacht, geb_datum from cursist";
$result = $conn-> query($sql);

if ($result-> num_rows > 0) {
    while ($row = $result-> fetch_assoc()) {
        echo "<tr><td>". $row["cursistnr"]."</td><br><td>". $row["naam"]."</td><br><td>".$row["roepnaam"]."</td><br><td>".$row["straat"]."</td><br><td>".$row["postcode"]."</td><br><td>".$row["plaats"]."</td><br><td>".$row["geslacht"]."</td><br><td>".$row["geb_datum"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 result";
}

$conn -> close();?>