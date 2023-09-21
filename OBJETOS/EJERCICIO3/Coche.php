<?php

class Coche{
    public $marca;
    public $modelo;
    public $color;
    public $matricula;

    /**
     * @param $marca
     * @param $modelo
     * @param $color
     * @param $matricula
     */
    public function __construct($marca, $modelo, $color, $matricula)
    {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->color = $color;
        $this->matricula = $matricula;
    }

    /**
     * @return mixed
     */
    public function getMarca()
    {
        return $this->marca;
    }

    /**
     * @param mixed $marca
     */
    public function setMarca($marca)
    {
        $this->marca = $marca;
    }

    /**
     * @return mixed
     */
    public function getModelo()
    {
        return $this->modelo;
    }

    /**
     * @param mixed $modelo
     */
    public function setModelo($modelo)
    {
        $this->modelo = $modelo;
    }

    /**
     * @return mixed
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @param mixed $color
     */
    public function setColor($color)
    {
        $this->color = $color;
    }

    /**
     * @return mixed
     */
    public function getMatricula()
    {
        return $this->matricula;
    }

    /**
     * @param mixed $matricula
     */
    public function setMatricula($matricula)
    {
        $this->matricula = $matricula;
    }


    public function __toString()
    {
        return 'marca: '.$this->marca.' modelo: '.$this->modelo.' color '.$this->color.' matricula.';
    }


}