<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            margin: auto;
            text-align: center;
        }
    </style>
</head>
<body>
<?php
    for ($i = 0; $i <= 15; $i++) {
        for ($o = 0; $o < $i; $o++) {
            echo "*";
        }
        echo "*<br>";
    }
?>
</body>
</html>