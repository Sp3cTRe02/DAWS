<?php

class Conjunto{
    public $conjuntos = [];

    /**
     * @param array $conjunto
     */
    public function __construct()
    {
    }

    /**
     * @return array
     */
    public function getConjunto()
    {
        return $this->conjuntos;
    }

    /**
     * @param array $conjunto
     */
    public function setConjunto($conjunto)
    {
        $this->conjuntos = $conjunto;
    }
    // create a function to add a number to the array

    public function addNumber($n){
        $this->conjuntos[] = $n;
    }
    public function removeNumber($n){
        $this->conjuntos = array_diff($this->conjuntos, array($n));
    }
}