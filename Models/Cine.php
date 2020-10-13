<?php 

namespace Models;

 class Cine 
 {
 	private $id_cine;
 	private $nombre_cine;
 	private $salas = array();

 	function __construct()
 	{
 		
 	}

    public function getIdCine()
    {
        return $this->id_cine;
    }

    
    public function setIdCine($id_cine)
    {
        $this->id_cine = $id_cine;
    }


    
    public function getNombreCine()
    {
        return $this->nombre_cine;
    }

    
    public function setNombreCine($nombre_cine)
    {
        $this->nombre_cine = $nombre_cine;
    }



    public function getSalas()
    {
        return $this->salas;
    }

    
    public function setSalas($salas)
    {
        $this->salas = $salas;
    }

    public function addSala($sala){
        
        array_push($this->salas,$sala);


    }

} 


 ?>