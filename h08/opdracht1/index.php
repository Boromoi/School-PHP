<?php

    include_once('programma.php');
    include_once('liedjes.php');

    $ditprogramma = new Radioprogramma();
    $ditprogramma->setNaam("Dit is een programma");
    $ditprogramma->setOmschrijving("Test Omschrijving");

    foreach ($ditprogramma->getProgramma() as $p) {
        echo $p."<br>";
    }

    $nieuwliedje = new liedjes("titel", "stoned");
    echo $nieuwliedje->getTitel()."<br>";
    echo $nieuwliedje->getArtiest();

    $ditprogramma->voegLiedjeToe($nieuwliedje);

foreach ($ditprogramma->getLiedjes() as $liedje) {
        echo $liedje->getTitel()." - ".$liedje->getArtiest()."<br>";
    }