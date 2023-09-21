<?php

class Ordenador{

    public $tipo;
    public $procesador;
    public $ram;
    public $grafica;
    public $almacenamiento;

    /**
     * @param $tipo
     * @param $procesador
     * @param $ram
     * @param $grafica
     * @param $almacenamiento
     */
    public function __construct($tipo, $procesador, $ram, $grafica, $almacenamiento)
    {
        $this->tipo = $tipo;
        $this->procesador = $procesador;
        $this->ram = $ram;
        $this->grafica = $grafica;
        $this->almacenamiento = $almacenamiento;
    }

    /**
     * @return mixed
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * @param mixed $tipo
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }

    /**
     * @return mixed
     */
    public function getProcesador()
    {
        return $this->procesador;
    }

    /**
     * @param mixed $procesador
     */
    public function setProcesador($procesador)
    {
        $this->procesador = $procesador;
    }

    /**
     * @return mixed
     */
    public function getRam()
    {
        return $this->ram;
    }

    /**
     * @param mixed $ram
     */
    public function setRam($ram)
    {
        $this->ram = $ram;
    }

    /**
     * @return mixed
     */
    public function getGrafica()
    {
        return $this->grafica;
    }

    /**
     * @param mixed $grafica
     */
    public function setGrafica($grafica)
    {
        $this->grafica = $grafica;
    }

    /**
     * @return mixed
     */
    public function getAlmacenamiento()
    {
        return $this->almacenamiento;
    }

    /**
     * @param mixed $almacenamiento
     */
    public function setAlmacenamiento($almacenamiento)
    {
        $this->almacenamiento = $almacenamiento;
    }

    public function __toString()
    {
        return "Tipo: " . $this->tipo . "\n" .
            "Procesador: " . $this->procesador . "\n" .
            "RAM: " . $this->ram . "\n" .
            "Gráfica: " . $this->grafica . "\n" .
            "Almacenamiento: " . $this->almacenamiento . "\n";
    }


}