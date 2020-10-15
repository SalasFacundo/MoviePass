<?php 

namespace Models;



  
 class Sala
 {
 	
 	private $numero_sala;
    private $capacidad;
    private $idCine; 
    private $peliculas = array();
 	
 	function __construct()
 	{
 	
 	}

     public function getIdCine()
    {
        return $this->idCine;
    }

    
    public function setIdCine($idCine)
    {
        $this->idCine = $idCine;
    }
   
    public function getNumeroSala()
    {
        return $this->numero_sala;
    }

    
    public function setNumeroSala($numero_sala)
    {
        $this->numero_sala = $numero_sala;
    }

   
    public function getCapacidad()
    {
        return $this->capacidad;
    }

    
    public function setCapacidad($capacidad)
    {
        $this->capacidad = $capacidad;
    }



    public function getPeliculas()
    {
        return $this->peliculas;
    }

   
    public function setPeliculas($peliculas)
    {
        $this->peliculas = $peliculas;
    }
} 
	

?>