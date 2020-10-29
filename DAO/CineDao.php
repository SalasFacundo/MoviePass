<?php 

namespace DAO ;

//require "../Config/Base_de_datos.php";
//require "../Models/Cine.php";

use Config\base_datos as base_datos;
use Models\Cine as Cine;


class CineDao 
{





    public function __construct()
    {



    }



        function add($cine)
        {

            $conexion=base_datos::conectar();




            
                $nombre=$cine->getNombre();
                $calle=$cine->getCalle();
                $altura=$cine->getAltura();
                $codigo=$cine->getCodigoPostal();
                $activo=$cine->getActivo();

                $sql=" INSERT INTO Cine (Nombre, Calle, Altura, Codigo_postal, Activo) 

                VALUES ('$nombre', '$calle', '$altura', '$codigo', '$activo' )";

                var_dump(base_datos::comprobar_query($conexion, $sql));
            

            $conexion->close();
        }


        function getAll()
        {          

            $conexion=base_datos::conectar();
            $sql="SELECT * FROM CINE";            

            $resultado=$conexion->query($sql); 

            $cines=[];

             while($fila=$resultado->fetch_assoc())
                array_push($cines,$this->crearCine($fila));

            $conexion->close();

            return $cines;            
        }





        function getActivos()
        {


            $conexion=base_datos::conectar();
            $sql="SELECT * FROM CINE WHERE ACTIVO=1";            

            $resultado=$conexion->query($sql); 

            $cines=[];

            while($fila=$resultado->fetch_assoc())
                array_push($cines,$this->crearCine($fila));

            $conexion->close();

            return $cines;            
        }




        function modificarCine($id, $cineNuevo)
        {

         $conexion=base_datos::conectar();



         $nombre=$cineNuevo->getNombre();
         $calle=$cineNuevo->getCalle();
         $altura=$cineNuevo->getAltura();
         $codigo=$cineNuevo->getCodigoPostal();
         $activo=$cineNuevo->getActivo();



         $sql="            


         UPDATE Cine
         SET 
         Nombre = '$nombre',
         Calle='$calle',
         Altura='$altura',
         Codigo_postal='$codigo',
         Activo='$activo'
         WHERE Id_cine='$id';                


         ";

         var_dump(base_datos::comprobar_query($conexion, $sql));


         $conexion->close();


     }







     function traerPorNombre($nombre)
     {

        $conexion=base_datos::conectar();
        $sql="SELECT * FROM CINE WHERE NOMBRE='$nombre'";            

        $resultado=$conexion->query($sql); 



        $fila=$resultado->fetch_assoc();


        $cine = $this->crearCine($fila);



        $conexion->close();

        return $cine;  

    }

    function traerPorId($id)
    {

        $conexion=base_datos::conectar();
        $sql="SELECT * FROM CINE WHERE Id_cine='$id'";            

        $resultado=$conexion->query($sql); 



        $fila=$resultado->fetch_assoc();


        $cine = $this->crearCine($fila);

        $conexion->close();

        return $cine;  

    }


    function altaBaja($id, $valor)
    {

        $conexion=base_datos::conectar();



        $sql="            


        UPDATE Cine
        SET
        Activo='$valor'
        WHERE Id_cine='$id';";

        var_dump(base_datos::comprobar_query($conexion, $sql));
        $conexion->close();
    }

    private function crearCine($fila)
    {
        $cine = new Cine();

        $cine->setIdCine($fila['Id_cine']);
        $cine->setNombre($fila['Nombre']);
        $cine->setCalle($fila['Calle']);
        $cine->setAltura($fila['Altura']);
        $cine->setCodigoPostal($fila['Codigo_postal']);
        $cine->setActivo($fila['Activo']);


        return $cine;
    }



}






                /*$cineDao = new CineDao();
                
                var_dump($cineDao->getActivos());


                $cine= new Cine();

                $cine->setNombre("Nombre3");
                $cine->setCalle("Calle1");
                $cine->setAltura(123);
                $cine->setCodigoPostal(123);
                $cine->setActivo(true);

                $cineDao->add($cine);

                var_dump($cineDao->traerPorId(1));

                //$cineDao->modificarCine(3, $cine);

                //$cineDao->altaBaja(3, true);
*/
                
                ?>