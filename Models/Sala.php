<?php 

namespace Models;



  
 class Sala
 {
 	
 	private $Id_sala;
    private $Nombre;
    private $Capacidad; 
    private $Precio; 
    private $Id_cine; 
    private $Id_tipo_sala; 
    private $Activo; 
    
 	
 	function __construct()
 	{
 	
 	}    


    
    public function getIdSala()
    {
        return $this->Id_sala;
    }

    
    public function setIdSala($Id_sala)
    {
        $this->Id_sala = $Id_sala;

        return $this;
    }

    
    public function getNombre()
    {
        return $this->Nombre;
    }

    
    public function setNombre($Nombre)
    {
        $this->Nombre = $Nombre;

        return $this;
    }

    
    public function getCapacidad()
    {
        return $this->Capacidad;
    }

    
    public function setCapacidad($Capacidad)
    {
        $this->Capacidad = $Capacidad;

        return $this;
    }

    
    public function getPrecio()
    {
        return $this->Precio;
    }

    
    public function setPrecio($Precio)
    {
        $this->Precio = $Precio;

        return $this;
    }

    
    public function getIdCine()
    {
        return $this->Id_cine;
    }

    
    public function setIdCine($Id_cine)
    {
        $this->Id_cine = $Id_cine;

        return $this;
    }

    
    public function getIdTipoSala()
    {
        return $this->Id_tipo_sala;
    }

    
    public function setIdTipoSala($Id_tipo_sala)
    {
        $this->Id_tipo_sala = $Id_tipo_sala;

        return $this;
    }

    
    public function getActivo()
    {
        return $this->Activo;
    }

    
    public function setActivo($Activo)
    {
        $this->Activo = $Activo;

        return $this;
    }
} 
	

?>