<!DOCTYPE html>
<html>
<head>

</head>
<body>

<?php
$leeftijd = 66;
$bedrag = 10;

if (leeftijd > 65) {
    $bedrag = $bedrag * 0.5;
}

if (leeftijd < 13) {
    $bedrag = $bedrag * 0.5;
}

if ($leeftijd < 3) {
    $bedrag = 0;
}

echo $bedrag;
?>
</body>
</html>
