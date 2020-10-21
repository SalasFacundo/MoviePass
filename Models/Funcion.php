<?php 

namespace Models;

use Dao\FuncionDao;

require_once "../DAO/FuncionDao.php";

 class Funcion
 {
 	private $numero_sala;
 	private $id_pelicula;
 	private $hora_inicio;
    private $hora_final;
 	
 	function __construct()
 	{
 		
 	}

 
    
    public function getSala()
    {
        return $this->numero_sala;
    }

    
    public function setSala($numero_sala)
    {
        $this->numero_sala = $numero_sala;
    }

    
    public function getIdPelicula()
    {
        return $this->id_pelicula;
    }

    
    public function setIdPelicula($id_pelicula)
    {
        $this->id_pelicula = $id_pelicula;
    }

    
    public function getHoraInicio()
    {
        return $this->hora_inicio;
    }

    
    public function setHora($hora_inicio)
    {
        $this->hora_inicio = $hora_inicio;
    }

    public function getHoraFinal()
    {
        return $this->hora_final;
    }

    
    public function setHora($hora_final)
    {
        $this->hora_final = $hora_final;
    }









}




?>