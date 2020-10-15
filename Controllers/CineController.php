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
        public function showAddView($mensaje){
            require_once(VIEWS_PATH."index.php");
        }

        public function Add($nombre, $id){
            
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

                $this->cineDao->add($cineNuevo);
                $mensaje = 'Cine agregado correctamente!';
            }else{
                $mensaje = 'Ya existe un cine con ese numero de ID';
            }
            

            //var_dump($cineNuevo);
            
            $this->showAddView($mensaje);
        }

        public function removeCine ($id){

            $todosLosCines = $this->cineDao->getAll();
            $mensaje = $this->cineDao->eliminarCine($id);
             
            $this->showAddView($mensaje);
            

        }

    }


?>