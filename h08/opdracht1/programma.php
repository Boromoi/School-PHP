<?php

class Radioprogramma {
    private $naam = "";
    private $omschrijving = "";
    private $liedjes = array();

    public function voegLiedjeToe($liedje) {
        $this->liedjes[] = $liedje;
    }

    /* @return array */

    function getProgramma () {
        return array("naam" => $this->naam, "omschrijving" => $this->omschrijving);
    }

    /* @param de naam als string */

    function setNaam($n) {
        if (strlen($n)>=2) {
            $this->naam = $n;
        }
    }

    /**
     * @return array
     */
    public function getLiedjes(): array
    {
        return $this->liedjes;
    }

    /**
     * @param array $liedjes
     */
    public function setLiedjes(array $liedjes): void
    {
        $this->liedjes = $liedjes;
    }

    /* @param Omschrijving als string */

    function setOmschrijving($omschrijving) {
        $this->omschrijving = $omschrijving;
    }

    function getNaam() {
        return $this->naam;
    }

    function getOmschrijving() {
        return $this->omschrijving;
    }
}
