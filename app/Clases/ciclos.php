<?php 

namespace App\Clases;
class ciclos{

    //ATRIBUTOS
    
    private $id;
    private $siglas;
    private $nombre;

    
 //CONSTRUCTOR

 public function __construct($id, $siglas, $nombre)
 {
     $this->id = $id;
     $this->siglas = $siglas;
     $this->nombre = $nombre;
 }




    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }


    /**
     * Get the value of siglas
     */ 
    public function getSiglas()
    {
        return $this->siglas;
    }

    /**
     * Set the value of siglas
     *
     * @return  self
     */ 
    public function setSiglas($siglas)
    {
        $this->siglas = $siglas;

        return $this;
    }



    /**
     * Get the value of nombre
     */ 
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
}
