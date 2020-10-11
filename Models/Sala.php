<?php 

namespace Models;



  
 class Sala
 {
 	
 	private $numero_sala;
 	private $capacidad;
    private $peliculas;
 	
 	function __construct()
 	{
 	
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