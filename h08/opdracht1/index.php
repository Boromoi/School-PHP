<?php

class Radioprogramma {
    private $Programmanaam = "";
    private $Omschrijving = "";
    private $Liedjes = [];

    /* @return mixed */

    function getLiedjes ($Liedjes) {
        $this->Liedjes = $Liedjes;
        return $Liedjes;
    }

    function getProgramma ($Programmanaam, $Omschrijving) {
        $this->Programmanaam = $Programmanaam;
        $this->Omschrijving = $Omschrijving;
        return $Omschrijving;
        return $Programmanaam;
    }
}
