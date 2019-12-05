<?php
$connection = mysqli_connect("localhost", "Liam", "Sans","school","3308"); //The Blank string is the password

$query = "SELECT * FROM cursist"; //You don't need a ; like you do in SQL
$result = mysqli_query($connection,'$query');

echo $result;
mysqli_fetch_array($result);

mysqli_close($connection); //Make sure to close out the database connection