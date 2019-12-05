<?php

if ($_POST['inlognaam'] == "") {
    echo "Je moet een inlognaam invullen";
    echo "<a href=\"form.html\">Formulier</a>";
}

if ($_POST['wachtwoord'] == "") {
    echo "Je moet een wachtwoord invullen";
    echo "<a href=\"form.html\">Formulier</a>";
}

if ($_POST['email'] == "") {
    echo "Je moet een email invullen";
    echo "<a href=\"form.html\">Formulier</a>";
}

if ($_POST['adres'] == "") {
    echo "Je moet een adres invullen";
    echo "<a href=\"form.html\">Formulier</a>";
}
