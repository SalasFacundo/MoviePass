<?php 

    namespace Controllers;

    use DAO\CineDao as CineDao;
    use Models\Cine as Cine;
    use Models\Sala as Sala;

    class CineController{
        private $cineDao;

        public function __construct(){
            $this->cineDao = new CineDao();
        }
        public function showAddView(){
            require_once(VIEWS_PATH."adminCine.php");
        }

        public function Add($nombre, $id, $direccion, $precio, $salas ){
            

            $cineNuevo = new Cine();
            $mensaje = '';
            $todosLosCines = $this->cineDao->getAll();

            $repite = false;

            foreach($todosLosCines as $cine){
                if($cine->getIdCine() == $id){
                    $repite = true;
                }
            }
            
            if(!$repite){
                $cineNuevo->setNombreCine($nombre);
                $cineNuevo->setIdCine($id);
                $cineNuevo->setDireccion($direccion);
                $cineNuevo->setPrecio($precio);
                $cineNuevo->setSalas($salas);

                $this->cineDao->add($cineNuevo);
                $mensaje = 'Cine agregado correctamente!';
            }else{
                $mensaje = 'Ya existe un cine con ese numero de ID';
            }
            

            //var_dump($cineNuevo);
            
            $this->showAddView();
        }


        public function EditCine($id, $nombre, $direccion, $precio, $salas )
        {
             $this->cineDao->EditarCine($nombre, $id, $direccion, $precio, $salas);

             $this->showAddView();
            /// volver a la vista y mostrar el mensaje que retorna la funcion de editar en el dao
        }

        public function removeCine ($id){

            $todosLosCines = $this->cineDao->getAll();
            $mensaje = $this->cineDao->eliminarCine($id);
             
            $this->showAddView();
            

        }

    }


?>