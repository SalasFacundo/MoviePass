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

        return $this;
    }

    
    public function getPosterPath()
    {
        return $this->poster_path;
    }

    
    public function setPosterPath($poster_path)
    {
        $this->poster_path = $poster_path;

        return $this;
    }

    
    public function getLanguage()
    {
        return $this->language;
    }

    
    public function setLanguage($language)
    {
        $this->language = $language;

        return $this;
    }

    
    public function getReleaseDate()
    {
        return $this->release_date;
    }

    
    public function setReleaseDate($release_date)
    {
        $this->release_date = $release_date;

        return $this;
    }
} 


?>