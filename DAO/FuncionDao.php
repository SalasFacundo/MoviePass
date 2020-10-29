<?php 

    namespace DAO ;

  /*  require_once "../Config/base_datos.php";
    require_once "../Models/Funcion.php";*/

    use Config\base_datos as base_datos;
    use Models\Funcion as Funcion;



    class FuncionDao 
    {

        
       

        public function __construct()
        {
           
            
        }    

        function add($funcion){

            $conexion=base_datos::conectar();


                        
                $Id_sala=$funcion->getIdSala();
                $Id_pelicula=$funcion->getIdPelicula();
                $Dia_hora_inicio=$funcion->getDiaHoraInicio();
                $Dia_hora_fin=$funcion->getDiaHoraFin();
                $activo=$funcion->getActivo();

                $sql=" INSERT INTO Funcion (Id_sala, Id_pelicula, Dia_hora_inicio, Dia_hora_fin, Activo) 

                VALUES ('$Id_sala', '$Id_pelicula', '$Dia_hora_inicio', '$Dia_hora_fin', '$activo' )";

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


    




    private function crearFuncion($fila)
    {
        $funcion = new Funcion();


        $funcion->setIdFuncion($fila['Id_funcion']);
        $funcion->setIdSala($fila['Id_sala']);
        $funcion->setIdPelicula($fila['Id_pelicula']);
        $funcion->setDiaHoraInicio($fila['Dia_hora_inicio']);
        $funcion->setDiaHoraFin($fila['Dia_hora_fin']);
        $funcion->setActivo($fila['Activo']);


        return $funcion;
    }


}


  /* $funciondao= new FuncionDao();

   


    $funcion= new Funcion();

                $funcion->setIdFuncion(1);
                $funcion->setIdSala(1);
                $funcion->setIdPelicula(1);
                $funcion->setDiaHoraInicio("14:30");
                $funcion->setDiaHoraFin("16:30");
                $funcion->setActivo(0);

                $funciondao->add($funcion);


                var_dump($funciondao->getAll());*/


?>