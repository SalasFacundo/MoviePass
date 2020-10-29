<?php 

namespace Models;

use Dao\FuncionDao;

require_once "../DAO/FuncionDao.php";

class Funcion
{
  private $Id_funcion;
  private $Id_sala;
  private $Id_pelicula;
  private $Dia_hora_inicio;
  private $Dia_hora_fin;
  private $Activo;

  function __construct()
  {

  }
    
    



    
    public function getIdFuncion()
    {
        return $this->Id_funcion;
    }

    
    public function setIdFuncion($Id_funcion)
    {
        $this->Id_funcion = $Id_funcion;
    }

    
    public function getIdSala()
    {
        return $this->Id_sala;
    }

    
    public function setIdSala($Id_sala)
    {
        $this->Id_sala = $Id_sala;
    }

    
    public function getIdPelicula()
    {
        return $this->Id_pelicula;
    }

    
    public function setIdPelicula($Id_pelicula)
    {
        $this->Id_pelicula = $Id_pelicula;
    }

    
    public function getDiaHoraInicio()
    {
        return $this->Dia_hora_inicio;
    }

    
    public function setDiaHoraInicio($Dia_hora_inicio)
    {
        $this->Dia_hora_inicio = $Dia_hora_inicio;
    }

    
    public function getDiaHoraFin()
    {
        return $this->Dia_hora_fin;
    }

    
    public function setDiaHoraFin($Dia_hora_fin)
    {
        $this->Dia_hora_fin = $Dia_hora_fin;
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


