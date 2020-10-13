<?php        


namespace DAO;



use Models\Pelicula as Pelicula;

require_once "../Models/Pelicula.php";

class PeliculaDao {


    private $peliculaList = array();
    private $fileName;


    public function __construct()
    {
            $this->fileName = dirname(__DIR__)."/Data/Peliculas.json";
     }



        public function Add(Pelicula $pelicula)
        {

            $this->RetrieveData();

            if(sizeof($this->peliculaList)==0)            
                array_push($this->peliculaList,$pelicula);
            else
                {
                if($this->posPelicula($pelicula->getIdPelicula())==-1)  
                    array_push($this->peliculaList,$pelicula);
                

                }
                 $this->SaveData();    
            
        }

        public function GetAll()
        {
            $this->RetrieveData();

            
            return $this->peliculaList;
            
        }


        private function SaveData()
        {

            $arrayToDecode= array();

            foreach($this->peliculaList as $pelicula)
            {
                $valuesArray["id_pelicula"]= $pelicula->getIdPelicula();
                $valuesArray["titulo"]= $pelicula->getTitulo();
                $valuesArray["hora_inicio"]= $pelicula->getHoraInicio();
                $valuesArray["duracion"]= $pelicula->getDuracion();
                $valuesArray["sinopsis"]= $pelicula->getSinopsis();
                $valuesArray["poster_link"]= $pelicula->getPosterLink();
                $valuesArray["lenguaje"]= $pelicula->getLenguaje();
                $valuesArray["fecha_lanzamiento"]= $pelicula->getFechaLanzamiento();
              

                
                array_push($arrayToDecode,$valuesArray);

            }

            $jsonContet = json_encode($arrayToDecode,JSON_PRETTY_PRINT);

            file_put_contents($this->fileName,$jsonContet);

        }


        private function RetrieveData()
        {
            $this->peliculaList = array();

            if(file_exists($this->fileName))
            {
                $jsonContet = file_get_contents($this->fileName);

                $arrayToDecode = ($jsonContet ) ? json_decode ($jsonContet,true):array();

        
                foreach($arrayToDecode as $valuesArray)
                {
                    $pelicula = new Pelicula();

                    $pelicula->setIdPelicula($valuesArray["id_pelicula"]);
                    $pelicula->setTitulo($valuesArray["titulo"]);
                    $pelicula->setHoraInicio($valuesArray["hora_inicio"]);
                    $pelicula->setDuracion($valuesArray["duracion"]);
                    $pelicula->setSinopsis($valuesArray["sinopsis"]);
                    $pelicula->setPosterLink($valuesArray["poster_link"]);
                    $pelicula->setLenguaje($valuesArray["lenguaje"]);
                    $pelicula->setFechaLanzamiento($valuesArray["fecha_lanzamiento"]);
                    

                    array_push($this->peliculaList,$pelicula);

                
                }


            }

        }

        public function posPelicula($id)
        {
            $flag=false;
            $i=0;
            $pos=-1;

            foreach ($this->peliculaList as $pelicula) {
                

                if($pelicula->getIdPelicula()==$id)  
                    $pos=$i;

                $i++;
                   
            }

            return $pos;
        }


        public function eliminarPelicula($id)
        {


            $this->RetrieveData();

                $pos=$this->posPelicula($id);

                if ($pos!=-1) 
                  unset($this->peliculaList[$pos]);   
                  else
                  echo "no existe amiwo";    
           
            $this->SaveData();   

        }


        public function modificarPelicula($id, $titulo, $hora_inicio, $duracion, $sinopsis, $lenguaje)
        {

            $this->RetrieveData();

                $pos=$this->posPelicula($id);
                
         

                if ($pos!=-1) 
                {
                    $modificado=$this->peliculaList[$pos];

                    $modificado->setTitulo($titulo);
                    $modificado->setHoraInicio($hora_inicio);
                    $modificado->setDuracion($duracion);
                    $modificado->setSinopsis($sinopsis);
                    $modificado->setLenguaje($lenguaje);

                }
                     
                 
           
            $this->SaveData();   

        }

        public function peliculasApi2json()
        {



            $new= file_get_contents("http://api.themoviedb.org/3/movie/top_rated?api_key=a813ce03ea202b120e2307c4325bd6c3&language.php");
            $new= json_decode($new, true)["results"];



            foreach ($new as $pelicula) {
                

                $peliculas= new Pelicula();
                $peliculas->setIdPelicula($pelicula["id"]);
                $peliculas->setTitulo($pelicula["title"]);
                $peliculas->setHoraInicio("20hs");
                $peliculas->setDuracion("3hs");
                $peliculas->setSinopsis($pelicula["overview"]);
                $peliculas->setPosterLink($pelicula["poster_path"]);
                $peliculas->setLenguaje("español");
                $peliculas->setFechaLanzamiento($pelicula["release_date"]);

                $this->Add($peliculas);
            }
        }

}


?>