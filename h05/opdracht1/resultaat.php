<?php

if ($_POST['inlognaam'] == "") {
    echo "Je moet een inlognaam invullen";
    echo "<a href=\"form.html\">Formulier</a>";
} else {
    echo $_POST['inlognaam'];
    "<br>";
}

if ($_POST['wachtwoord'] == "") {
    echo "Je moet een wachtwoord invullen";
    echo "<a href=\"form.html\">Formulier</a>";
} else {
    echo $_POST['wachtwoord'];
    "<br>";
}

if ($_POST['email'] == "") {
    echo "Je moet een email invullen";
    echo "<a href=\"form.html\">Formulier</a>";
} else {
    echo $_POST['email'];
    "<br>";
}

if ($_POST['adres'] == "") {
    echo "Je moet een adres invullen";
    echo "<a href=\"form.html\">Formulier</a>";
}   else {
    echo $_POST['adres'];
}
