<?php
$connection = mysqli_connect('localhost', 'root', '','school','3308'); //The Blank string is the password

$query = "SELECT * FROM cursist"; //You don't need a ; like you do in SQL
$result = mysqli_query($connection,'$query');

echo "<table>"; // start a table tag in the HTML

    while($row = mysqli_fetch_array($result)){   //Creates a loop to loop through results
    echo "<tr><td>" . $row['cursistnr'] . "</td><td>" . $row['naam'] . "</td></tr>" . $row['roepnaam'] . "</td></tr>" . $row['straat'] . "</td></tr>" . $row['postcode'] . "</td></tr>" . $row['plaats'] . "</td></tr>" . $row['geslacht'] . "</td></tr>" . $row['geb_datum'] . "</td></tr>";  //$row['index'] the index here is a field name
    }

    echo "</table>"; //Close the table in HTML

mysqli_close($connection); //Make sure to close out the database connection