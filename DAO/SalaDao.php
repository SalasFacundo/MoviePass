<?php 

    namespace DAO ;

    require "../Config/Base_datos.php";
    require "../Models/Sala.php";

    use Config\base_datos as base_datos;
    use Models\Sala as Sala;

    class SalaDao 
    {

       


        public function __construct(){
           
        }





        function add($cine)
        {

            $conexion=base_datos::conectar();




            
                
                $Nombre=$cine->getNombre();
                $Capacidad=$cine->getCapacidad();
                $Precio=$cine->getPrecio();
                $Id_cine=$cine->getIdCine();
                $Id_tipo_sala=$cine->getIdTipoSala();
                $activo=$cine->getActivo();

                $sql=" INSERT INTO Sala (Nombre, Capacidad, Precio, Id_cine, Id_tipo_sala, Activo) 

                VALUES ('$Nombre', '$Capacidad', '$Precio', '$Id_cine', '$Id_tipo_sala', '$activo' )";

                //var_dump(base_datos::comprobar_query($conexion, $sql));

                $conexion->query($sql);

            $conexion->close();
        }


        function getAll()
        {      



            $conexion=base_datos::conectar();
            $sql="SELECT * FROM Sala";            

            $resultado=$conexion->query($sql); 

            $salas=[];

             while($fila=$resultado->fetch_assoc())
                array_push($salas,$this->crearSala($fila));

            $conexion->close();

            return $salas;            
        }


        function getActivos()
        {          

            $conexion=base_datos::conectar();
            $sql="SELECT * FROM Sala WHERE ACTIVO=1";            

            $resultado=$conexion->query($sql); 

            $salas=[];

             while($fila=$resultado->fetch_assoc())
                array_push($salas,$this->crearSala($fila));

            $conexion->close();

            return $salas;            
        }





        function modificarCine($id, $salaNueva)
        {

         $conexion=base_datos::conectar();


         
         $Nombre=$salaNueva->getNombre();
         $Capacidad=$salaNueva->getCapacidad();
         $Precio=$salaNueva->getPrecio();
         $Id_cine=$salaNueva->getIdCine();
         $Id_tipo_sala=$salaNueva->getIdTipoSala();
         $Activo=$salaNueva->getActivo();



         $sql="            


         UPDATE Cine
         SET          
         Nombre='$Nombre',
         Capacidad='$Capacidad',
         Precio='$Precio',
         Id_cine='$Id_cine',
         Id_tipo_sala='$Id_tipo_sala',
         Activo='$Activo'
         WHERE Id_cine='$id';                


         ";

         var_dump(base_datos::comprobar_query($conexion, $sql));


         $conexion->close();


     }



     private function crearSala($fila)
    {
        $sala = new Sala();

        $sala->setIdSala($fila['Id_sala']);
        $sala->setNombre($fila['Nombre']);
        $sala->setCapacidad($fila['Capacidad']);
        $sala->setPrecio($fila['Precio']);
        $sala->setIdCine($fila['Id_cine']);
        $sala->setIdTipoSala($fila['Id_tipo_sala']);
        $sala->setActivo($fila['Activo']);


        return $sala;
    }

       

    }


/*
    $saladao=new SalaDao();
    $sala= new Sala();

        
        $sala->setNombre("asd98");
        $sala->setCapacidad("1");
        $sala->setPrecio("12");
        $sala->setIdCine("1");
        $sala->setIdTipoSala("1");
        $sala->setActivo("activo");


        //$saladao->add($sala);
        var_dump($saladao->getAll());*/
?>