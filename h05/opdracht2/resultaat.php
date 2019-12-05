<?php

foreach ($_POST['pokemon'] as $pokemon) {
    echo "<img src='../img/".$pokemon.".jpg'>";
}
