<?php 

namespace Models;

 class Cine 
 {
 	private $id_cine;
    private $nombre_cine;
    private $precioEntrada;
    private $direccion;
 	private $salas;

 	function __construct()
 	{
 		
    }
     
     public function getPrecio()
     {
         return $this->precioEntrada;
     }
 
     
     public function setPrecio($precio)
     {
         $this->precioEntrada = $precio;
     }

     public function getDireccion()
     {
         return $this->direccion;
     }
 
     
     public function setDireccion($direccion)
     {
         $this->direccion = $direccion;
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

} 


 ?>