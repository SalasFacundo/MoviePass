<?php 

namespace Models;

use Dao\FuncionDao;

require_once "../DAO/FuncionDao.php";

class Funcion
{
  private $numero_sala;
  private $id_pelicula=-1;
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


public function setHoraInicio($hora_inicio)
{

    $this->hora_inicio = $hora_inicio;

    $pelicula = file_get_contents(
        "http://api.themoviedb.org/3/movie/".$this->id_pelicula."?api_key=a813ce03ea202b120e2307c4325bd6c3&language=en-US");

    $duracion = json_decode($pelicula, true)["runtime"];    



    $h = explode(':',$hora_inicio);     
    $this->hora_final= date("H:i", mktime($h[0],$h[1]+$duracion+15));

    

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


