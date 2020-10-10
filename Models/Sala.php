<?php 

namespace Models;



  
 class Sala
 {
 	
 	private $numero_sala;
 	private $capacidad;
 	
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



} 


	$sala=new Sala();
	$sala->setCapacidad("40");
	$sala->setNumeroSala("1");

	var_dump($sala);
	
		

?>