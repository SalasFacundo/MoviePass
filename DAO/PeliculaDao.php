<?php        


namespace DAO;





//require "../Config/Base_datos.php";
//require_once "../Models/Pelicula.php";

use Config\base_datos as base_datos;
use Models\Pelicula as Pelicula;

class PeliculaDao 
{



    public function __construct()
    {
         
    }



     function add($pelicula)
     {  

        echo "<pre>";
        var_dump($pelicula);
        echo "</pre>";
        
       

            $conexion=base_datos::conectar();            
                
                
                            
                $Titulo=$pelicula->getTitulo();
                $Sinopsis=$pelicula->getSinopsis();
                $Poster_link=$pelicula->getPosterLink();
                $Lenguaje=$pelicula->getLenguaje();
                $Fecha_lanzamiento=$pelicula->getFechaLanzamiento();
                $Duracion=$pelicula->getDuracion();
                $Activo=$pelicula->getActivo();

                $sql=" INSERT INTO Pelicula (Titulo, Sinopsis, Poster_link, Lenguaje, Fecha_lanzamiento, Duracion, Activo) VALUES ('$Titulo', '$Sinopsis', '$Poster_link', '$Lenguaje', '$Fecha_lanzamiento', '$Duracion', '$Activo' )";

                //var_dump(base_datos::comprobar_query($conexion, $sql));            

            
            $conexion->close();
        }   



       


        function getAll()
        {          

            $conexion=base_datos::conectar();
            $sql="SELECT * FROM Pelicula";            

            $resultado=$conexion->query($sql); 

            $peliculas=[];
            
             while($fila=$resultado->fetch_assoc())
                array_push($peliculas,$this->crearPelicula($fila));

            $conexion->close();

            return $peliculas;            
        }


        function getActivos()
        {          

            $conexion=base_datos::conectar();
            $sql="SELECT * FROM Pelicula WHERE ACTIVO=1";            

            $resultado=$conexion->query($sql); 

            $peliculas=[];
            
            while($fila=$resultado->fetch_assoc())
                array_push($peliculas,$this->crearPelicula($fila));

            

            $conexion->close();

            return $peliculas;            
        }




        function traerPorId($id)
    {

        $conexion=base_datos::conectar();
        $sql="SELECT * FROM Pelicula WHERE Id_pelicula='$id'";            

        $resultado=$conexion->query($sql); 



        $fila=$resultado->fetch_assoc();


        $pelicula=$this->crearPelicula($fila);

        $conexion->close();

        return $cine;  

    }


        function altaBaja($id, $valor)
    {

        $conexion=base_datos::conectar();



        $sql="            


        UPDATE Pelicula
        SET
        Activo='$valor'
        WHERE Id_pelicula='$id';";

        //var_dump(base_datos::comprobar_query($conexion, $sql));
        $conexion->close();
    }





        private function crearPelicula($fila)
        {
            $pelicula = new Pelicula();
                
                
                $pelicula->setIdPelicula($fila['Id_pelicula']);
                $pelicula->setTitulo($fila['Titulo']);
                $pelicula->setSinopsis($fila['Sinopsis']);
                $pelicula->setPosterLink($fila['Poster_link']);
                $pelicula->setLenguaje($fila['Lenguaje']);
                $pelicula->setFechaLanzamiento($fila['Fecha_lanzamiento']);
                $pelicula->setDuracion($fila['Duracion']);
                $pelicula->setActivo($fila['Activo']);

                return $pelicula;
        }


    }
       

    /*

    $peliculadao= new PeliculaDao();

    $pelicula= new Pelicula();
    $pelicula->setTitulo("asd2");
    $pelicula->setSinopsis("asd");
    $pelicula->setPosterLink("asd");
    $pelicula->setLenguaje("asd");
    $pelicula->setFechaLanzamiento("1111/11/11");
    $pelicula->setDuracion("123");
    $pelicula->setActivo("true");

    $peliculadao->add($pelicula);
    //var_dump($peliculadao->getAll());
    */





?>