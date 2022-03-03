<?php 

namespace App\Clases;

class frutitas{

    //ATRIBUTOS
    
    private $nombre;
    private $color;
    private $descricion;

    //CONSTRUCTOR

    public function __construct($nombre, $color, $descricion)
    {
        $this->nombre = $nombre;
        $this->descricion = $descricion;
        $this->color = $color;
    }

    //GETTERS & SETTERS 
        public function getNombre()
        {
                return $this->nombre;
        }

        /**
         * Set the value of nombre
         *
         * @return  self
         */ 
        public function setNombre($nombre)
        {
                $this->nombre = $nombre;

                return $this;
        }

    /**
     * Get the value of descricion
     */ 
    public function getDescripcion()
    {
        return $this->descricion;
    }

    /**
     * Set the value of descricion
     *
     * @return  self
     */ 
    public function setDescripcion($descricion)
    {
        $this->descricion = $descricion;

        return $this;
    }

    /**
     * Get the value of marca
     */ 
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Set the value of marca
     *
     * @return  self
     */ 
    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }
}
