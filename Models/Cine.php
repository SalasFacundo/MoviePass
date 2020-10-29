<?php 

namespace Models;

 class Cine 
 {
 	private $Id_cine;
    private $Nombre;
    private $Calle;
    private $Altura;
 	private $Codigo_postal;
    private $Cantidad_salas;
    private $Activo;

 	function __construct()
 	{
 		
    }
     
     

    public function getIdCine()
    {
        return $this->Id_cine;
    }

    
    public function setIdCine($Id_cine)
    {
        $this->Id_cine = $Id_cine;
    }

    
    public function getNombre()
    {
        return $this->Nombre;
    }

    
    public function setNombre($Nombre)
    {
        $this->Nombre = $Nombre;
    }

    
    public function getCalle()
    {
        return $this->Calle;
    }

    
    public function setCalle($Calle)
    {
        $this->Calle = $Calle;
    }

    
    public function getAltura()
    {
        return $this->Altura;
    }

    
    public function setAltura($Altura)
    {
        $this->Altura = $Altura;
    }

    
    public function getCodigoPostal()
    {
        return $this->Codigo_postal;
    }

    
    public function setCodigoPostal($Codigo_postal)
    {
        $this->Codigo_postal = $Codigo_postal;
    }



    public function getCantidadSalas()
    {
        return $this->Cantidad_salas;
    }

    
    public function setCantidadSalas($Cantidad_salas)
    {
        $this->Cantidad_salas = $Cantidad_salas;
    }


    
    public function getActivo()
    {
        return $this->Activo;
    }

    
    public function setActivo($Activo)
    {
        $this->Activo = $Activo;
    }

    

    
    
} 


 ?>