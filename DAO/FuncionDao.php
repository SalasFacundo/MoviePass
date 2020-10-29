<?php 

    namespace DAO ;

    require "../Config/Base_de_datos.php";
    require "../Models/Funcion.php";

    use Config\base_datos as base_datos;
    use Models\Funcion as Funcion;



    class FuncionDao 
    {

        
       

        public function __construct()
        {
           
            
        }    

        function add($funcion){

            $conexion=base_datos::conectar();


            

            
                $sala=$funcion->getIdSala();
                $pelicula=$funcion->getIdPelicula();
                $inicio=$funcion->getHoraInicio();
                $fin=$funcion->getHoraFin();
                $dia=$funcion->getDia();
                $activo=$funcion->getActivo();

                $sql=" INSERT INTO Funcion (Id_sala, Id_pelicula, Hora_inicio, Hora_fin, Dia, Activo) 

                VALUES ('$sala', '$pelicula', '$inicio', '$fin', '$dia', '$activo' )";

                var_dump(base_datos::comprobar_query($conexion, $sql));            

            
            $conexion->close();
        }   



       


        function getAll()
        {          

            $conexion=base_datos::conectar();
            $sql="SELECT * FROM Funcion";            

            $resultado=$conexion->query($sql); 

            $funciones=[];
            
            while($fila=$resultado->fetch_assoc()) 
                array_push($funciones,$this->crearFuncion($fila));

            $conexion->close();

            return $funciones;            
        }


        function getActivos()
        {          

            $conexion=base_datos::conectar();
            $sql="SELECT * FROM Funcion WHERE ACTIVO=1";            

            $resultado=$conexion->query($sql); 

            $funciones=[];
            
            while($fila=$resultado->fetch_assoc()) 
                array_push($funciones,$this->crearFuncion($fila));

            $conexion->close();

            return $funciones;            
        }


    }




    private function crearFuncion($fila)
    {
        $funcion = new Funcion();


        $funcion->setIdFuncion($fila['Id_funcion']);
        $funcion->setIdSala($fila['Id_sala']);
        $funcion->setIdPelicula($fila['Id_pelicula']);
        $funcion->setHoraInicio($fila['Hora_inicio']);
        $funcion->setHoraFin($fila['Hora_fin']);
        $funcion->setDia($fila['Dia']);
        $funcion->setActivo($fila['Activo']);


        return $funcion;
    }


  /* $funciondao= new FuncionDao();

   


    $funcion= new Funcion();

                $funcion->setIdSala(1);
                $funcion->setIdPelicula(1);
                $funcion->setHoraInicio("14:30");
                $funcion->setHoraFin("16:30");
                $funcion->setDia("1111,11,11");
                $funcion->setActivo(0);

               // $funciondao->add($funcion);


                var_dump($funciondao->getA());*/


?>