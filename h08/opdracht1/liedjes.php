<?php

class liedjes {
    private $titel;
    private  $artiest;

    function __construct($t, $a)
    {
        $this->titel = $t;
        $this->artiest = $a;
    }

    /**
     * @return mixed
     */
    public function getTitel()
    {
        return $this->titel;
    }

    /**
     * @return mixed
     */
    public function getArtiest()
    {
        return $this->artiest;
    }

    /**
     * @param mixed $artiest
     */
    public function setArtiest($artiest): void
    {
        $this->artiest = $artiest;
    }

    /**
     * @param mixed $titel
     */
    public function setTitel($titel): void
    {
        $this->titel = $titel;
    }


}
