<?php
class Personaje {
    /*private $nombre;
    private $edad;

    function __construct($n, $e)
    {
        $this->nombre = $n;
        $this->edad = $e;
    }

    function __toString()
    {
        return 'Nombre: '.$this->nombre.' Edad: '.$this->edad;
    }*/
    private $nombre;
    private $edad;

    static $CONT=0;

    public function __toString()
    {
        return 'Nombre: '.$this->nombre.' Edad: '.$this->edad;
    }


    /**
     * @param $nombre
     * @param $edad
     */

    public function __construct($nombre, $edad)
    {
        self::$CONT++;
        $this->nombre = $nombre;
        $this->edad = $edad;
    }

    /**
     * @return mixed
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * @param mixed $nombre
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    /**
     * @return mixed
     */
    public function getEdad()
    {
        return $this->edad;
    }

    /**
     * @param mixed $edad
     */
    public function setEdad($edad)
    {
        $this->edad = $edad;
    }

    public function __call($name, $arguments)
    {
        // TODO: Implement __call() method.
    }


}