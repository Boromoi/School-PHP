<!DOCTYPE>
<html>
<head>

</head>
<body>
<?php
$spartelkuikens = array([25]);
$waterbuffels = array([32]);
$plonsmderin = array([11]);
$bommetje = array([23]);

foreach ($spartelkuikens as &$value) {
    $value = $value / 5;
}

while ($spartelkuikens > 0.9) {
    echo "<img src='../img/zwem.png'>";
    $spartelkuikens--;
}

unset($value);

foreach ($waterbuffels as &$value) {
    $value = $value / 5;
}

while ($waterbuffels > 0.9) {
    echo "<img src='../img/zwem.png'>";
    $waterbuffels--;
}

unset($value);

foreach ($plonsmderin as &$value) {
    $value = $value / 5;
}

while ($plonsmderin > 0.9) {
    echo "<img src='../img/zwem.png'>";
    $plonsmderin--;
}

unset($value);

foreach ($bommetje as &$value) {
    $value = $value / 5;
}

while ($bommetje > 0.9) {
    echo "<img src='../img/zwem.png'>";
    $bommetje--;
}

?>
</body>
</html>
