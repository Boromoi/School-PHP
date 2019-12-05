<?php

    $randomboolean = false;

if ($_POST['wachtwoord'] == "") {
    echo "Je moet een wachtwoord invullen";
    echo "<a href=\"index.html\">Login</a>";
}

if ($_POST['email'] == "") {
    echo "Je moet een email invullen";
    echo "<a href=\"index.html\">Login</a>";
}

if ($_POST['wachtwoord'] == "doetje123" && $_POST['email'] == "piet@worldonline.nl") {
    header("Location: https://liamsroc.000webhostapp.com/h05/opdracht3/welkom.html"); /* Redirect browser */
    $randomboolean == true;
    exit();
} else if ($_POST['wachtwoord'] == "snoepje777" && $_POST['email'] == "klaas@carpets.nl") {
    header("Location: https://liamsroc.000webhostapp.com/h05/opdracht3/welkom.html"); /* Redirect browser */
    $randomboolean == true;
    exit();
} else if ($_POST['wachtwoord'] == "arkiearkie201" && $_POST['email'] == "truushendriks@wegweg.nl") {
    header("Location: https://liamsroc.000webhostapp.com/h05/opdracht3/welkom.html"); /* Redirect browser */
    $randomboolean == true;
    exit();
} else if ($_POST['wachtwoord'] == "sans" && $_POST['email'] == "timmie.de.dikke.loser@gmail.com") {
    header("Location: https://liamsroc.000webhostapp.com/h05/opdracht3/welkom.html"); /* Redirect browser */
    $randomboolean == true;
    exit();
} else {
    echo "Incorrecte inlog.";
    echo "<a href=\"index.html\">Login</a>";
    $randomboolean == false;
}
