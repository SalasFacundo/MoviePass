<?php 

namespace Models;



  
 class Pelicula
 {
 	
 	private $Id_pelicula;
 	private $Titulo;
    private $Sinopsis;
    private $Poster_link;
    private $Lenguaje;
    private $Fecha_lanzamiento;
    private $Duracion;
    private $Activo;
    
    
    
 	
 	function __construct()
 	{
 	
 	}


   




    
    public function getIdPelicula()
    {
        return $this->Id_pelicula;
    }

    
    public function setIdPelicula($Id_pelicula)
    {
        $this->Id_pelicula = $Id_pelicula;
    }

    
    public function getTitulo()
    {
        return $this->Titulo;
    }

    
    public function setTitulo($Titulo)
    {
        $this->Titulo = $Titulo;
    }

    
    public function getSinopsis()
    {
        return $this->Sinopsis;
    }

    
    public function setSinopsis($Sinopsis)
    {
        $this->Sinopsis = $Sinopsis;
    }

    
    public function getPosterLink()
    {
        return $this->Poster_link;
    }

    
    public function setPosterLink($Poster_link)
    {
        $this->Poster_link = $Poster_link;
    }

    
    public function getLenguaje()
    {
        return $this->Lenguaje;
    }

    
    public function setLenguaje($Lenguaje)
    {
        $this->Lenguaje = $Lenguaje;
    }

    
    public function getFechaLanzamiento()
    {
        return $this->Fecha_lanzamiento;
    }

    
    public function setFechaLanzamiento($Fecha_lanzamiento)
    {
        $this->Fecha_lanzamiento = $Fecha_lanzamiento;
    }

    
    public function getDuracion()
    {
        return $this->Duracion;
    }

    
    public function setDuracion($Duracion)
    {
        $this->Duracion = $Duracion;
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