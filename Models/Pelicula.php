<?php 

namespace Models;



  
 class Pelicula
 {
 	
 	private $id_pelicula;
 	private $titulo;
    private $hora_inicio;
    private $duracion;
 	
 	function __construct()
 	{
 	
 	}



   
    



   
    public function getIdPelicula()
    {
        return $this->id_pelicula;
    }

    
    public function setIdPelicula($id_pelicula)
    {
        $this->id_pelicula = $id_pelicula;
    }

   
    public function getTitulo()
    {
        return $this->titulo;
    }

    
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;
    }

   
    public function getHoraInicio()
    {
        return $this->hora_inicio;
    }

    
    public function setHoraInicio($hora_inicio)
    {
        $this->hora_inicio = $hora_inicio;
    }

   
    public function getDuracion()
    {
        return $this->duracion;
    }

    
    public function setDuracion($duracion)
    {
        $this->duracion = $duracion;
    }
} 


?>