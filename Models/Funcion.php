<?php 

namespace Models;

use Dao\FuncionDao;

require_once "../DAO/FuncionDao.php";

class Funcion
{
  private $Id_funcion;
  private $Id_sala;
  private $Id_pelicula;
  private $Hora_inicio;
  private $Hora_fin;
  private $Dia;
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

    
    public function getHoraInicio()
    {
        return $this->Hora_inicio;
    }

    
    public function setHoraInicio($Hora_inicio)
    {
        $this->Hora_inicio = $Hora_inicio;
    }

    
    public function getHoraFin()
    {
        return $this->Hora_fin;
    }

    
    public function setHoraFin($Hora_fin)
    {
        $this->Hora_fin = $Hora_fin;
    }

    
    public function getDia()
    {
        return $this->Dia;
    }

    
    public function setDia($Dia)
    {
        $this->Dia = $Dia;
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


