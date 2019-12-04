<!DOCTYPE html>
<html>
<head>

</head>
<body>
<?php

function omrekenen($a) {
    $b = $a * 33.8;
    echo $a." celcius Is zoveel fahrenheit ".$b;
}

function deelbaardoordrie($c) {
        if ($c % 3 == 0) {
            echo $c." Kan door drie gedeeld worden";
            return true;
        } else {
            echo $c." Kan niet door drie gedeeld worden";
            return false;
        }
}

function stringnaarargument($d) {
    echo "Het tegenovergestelde van ".$d." is ".strrev($d);
}

omrekenen(12);
"<br>";
deelbaardoordrie(30);
"<br>";
stringnaarargument(boom);
?>

</body>
</html>

1 celsius is 33.8 fahrenheit