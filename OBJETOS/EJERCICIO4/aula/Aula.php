<?php

class  Aula{
    public $num;
    public $curso;
    public $ordenadores = [];

    /**
     * @param $num
     * @param $curso
     * @param array $ordenadores
     */
    public function __construct($num, $curso, array $ordenadores)
    {
        $this->num = $num;
        $this->curso = $curso;
        $this->ordenadores = $ordenadores;
    }

    /**
     * @return mixed
     */
    public function getNum()
    {
        return $this->num;
    }

    /**
     * @param mixed $num
     */
    public function setNum($num)
    {
        $this->num = $num;
    }

    /**
     * @return mixed
     */
    public function getCurso()
    {
        return $this->curso;
    }

    /**
     * @param mixed $curso
     */
    public function setCurso($curso)
    {
        $this->curso = $curso;
    }

    /**
     * @return array
     */
    public function getOrdenadores()
    {
        return $this->ordenadores;
    }

    /**
     * @param array $ordenadores
     */
    public function setOrdenadores($ordenadores)
    {
        $this->ordenadores = $ordenadores;
    }

    public function __toString()
    {
        $cadena = "Número de clase: " . $this->num . "\n";
        $cadena .= "Curso: " . $this->curso . "\n";
        $cadena .= "Ordenadores en la clase:\n";

        foreach ($this->ordenadores as $ordenador) {
            $cadena .= " - " . $ordenador . "\n";
        }

        return $cadena;
    }


}
