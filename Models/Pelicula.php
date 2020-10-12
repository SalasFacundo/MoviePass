<?php 

namespace Models;



  
 class Pelicula
 {
 	
 	private $id_pelicula;
 	private $titulo;
    private $hora_inicio;
    private $duracion;
    private $sinopsis;
    private $poster_link;
    private $lenguaje;
    private $fecha_lanzamiento;
 	
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


    public function getSinopsis()
    {
        return $this->sinopsis;
    }

    
    public function setSinopsis($sinopsis)
    {
        $this->sinopsis = $sinopsis;
    }

    
    public function getPosterLink()
    {
        return $this->poster_link;
    }

    
    public function setPosterLink($poster_link)
    {
        $this->poster_link = $poster_link;
    }

    
    public function getLenguaje()
    {
        return $this->lenguaje;
    }

    
    public function setLenguaje($lenguaje)
    {
        $this->lenguaje = $lenguaje;
    }

    
    public function getFechaLanzamiento()
    {
        return $this->fecha_lanzamiento;
    }

    
    public function setFechaLanzamiento($fecha_lanzamiento)
    {
        $this->fecha_lanzamiento = $fecha_lanzamiento;
    }



} 
    



?>