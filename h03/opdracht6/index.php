<!DOCTYPE>
<html>
<head>
    <style>
        img {
            width: 30px;
            height: 30px;
        }
    </style>
</head>
<body>
<?php
$spartelkuikens = 25;
$waterbuffels = 32;
$plonsmderin = 11;
$bommetje = 23;

$spartelkuikens = $spartelkuikens / 5;
$waterbuffels = $waterbuffels / 5;
$plonsmderin = $plonsmderin / 5;
$bommetje = $bommetje / 5;

while ($spartelkuikens > 0.9) {
    echo "<img src='../../h05/img/zwem.png'>";
    $spartelkuikens--;
}

echo "<br>";

while ($waterbuffels > 0.9) {
    echo "<img src='../../h05/img/zwem.png'>";
    $waterbuffels--;
}

echo "<br>";

while ($plonsmderin > 0.9) {
    echo "<img src='../../h05/img/zwem.png'>";
    $plonsmderin--;
}

echo "<br>";

while ($bommetje > 0.9) {
    echo "<img src='../../h05/img/zwem.png'>";
    $bommetje--;
}

?>
</body>
</html>
