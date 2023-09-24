<?php
class Serpiente{
    private $anillas = [];
    private $color = ['r','v','a'];

    public function __construct(){

    }

    /**
     * @return mixed
     */
    public function getAnillas()
    {
        return $this->anillas;
    }

    /**
     * @param mixed $anillas
     */
    public function setAnillas($anillas)
    {
        $this->anillas = $anillas;
    }

    public function nacer($color){
      $this->anillas = $color;
    }
    public function aniadeAnilla(){
        array_push($this->anillas, $this->color[rand(0,count($this->color)-1)]);
    }
    public function quitarAnilla(){
        array_pop($this->anillas);
    }
    public function mudar(){
        array_shift($this->anillas);
    }
    public function morir(){
        $this->anillas = [];
    }
}