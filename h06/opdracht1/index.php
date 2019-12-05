<?php
$connection = mysql_connect('localhost', 'root', ''); //The Blank string is the password
mysql_select_db('hrmwaitrose');

$query = "SELECT * FROM cursist"; //You don't need a ; like you do in SQL
$result = mysql_query($query);

echo "<table>"; // start a table tag in the HTML

    while($row = mysql_fetch_array($result)){   //Creates a loop to loop through results
    echo "<tr><td>" . $row['cursistnr'] . "</td><td>" . $row['naam'] . "</td></tr>" . $row['roepnaam'] . "</td></tr>" . $row['straat'] . "</td></tr>" . $row['postcode'] . "</td></tr>" . $row['plaats'] . "</td></tr>" . $row['geslacht'] . "</td></tr>" . $row['geb_datum'] . "</td></tr>";  //$row['index'] the index here is a field name
    }

    echo "</table>"; //Close the table in HTML

mysql_close(); //Make sure to close out the database connection