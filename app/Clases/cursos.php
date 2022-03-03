<?php 
namespace App\Clases;
class cursos{

    //ATRIBUTOS
    
    private $id;
    private $siglas;
    private $nom;
    private $siglas_ciclo;

    
 //CONSTRUCTOR

 public function __construct($id, $siglas, $nom, $siglas_ciclo)
 {
     $this->id = $id;
     $this->siglas = $siglas;
     $this->nom = $nom;
     $this->siglas_ciclo = $siglas_ciclo;
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
     * Get the value of siglas_ciclo
     */ 
    public function getSiglas_ciclo()
    {
        return $this->siglas_ciclo;
    }

    /**
     * Set the value of siglas_ciclo
     *
     * @return  self
     */ 
    public function setSiglas_ciclo($siglas_ciclo)
    {
        $this->siglas_ciclo = $siglas_ciclo;

        return $this;
    }

    /**
     * Get the value of nom
     */ 
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */ 
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }
}
