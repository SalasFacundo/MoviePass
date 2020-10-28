<?php 

namespace Models;

use Dao\FuncionDao;

require_once "../DAO/FuncionDao.php";

 class Funcion
 {
 	private $numero_sala;
 	private $id_pelicula;
 	private $hora;
 	
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

    
    public function getPelicula()
    {
        return $this->id_pelicula;
    }

    
    public function setPelicula($id_pelicula)
    {
        $this->id_pelicula = $id_pelicula;
    }

    
    public function getHora()
    {
        return $this->hora;
    }

    
    public function setHora($hora)
    {
        $this->hora = $hora;
    }









}


  $funcion=new Funcion();

    $funcion->setHora("hora1");
    $funcion->setPelicula("pelicula1");
    $funcion->setSala("sala1");
    $repo= new FuncionDao();
    $repo->add($funcion);


?>