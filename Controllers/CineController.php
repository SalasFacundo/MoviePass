<?php 

    namespace Controllers;

    use DAO\CineDao as CineDao;
    use Models\Cine as Cine;

    class CineController{
        private $cineDao;

        public function __construct(){
            $this->cineDao = new CineDao();
        }
        public function showAddView(){
            require_once(VIEWS_PATH."index.php");
        }

        public function Add($nombre, $id, $salas){
        
            $cineNuevo = new Cine();

            
            $cineNuevo->setNombreCine($nombre);
            $cineNuevo->setIdCine($id);
            $cineNuevo->setSalas($salas);


            $this->cineDao->add($cineNuevo);

            //var_dump($cineNuevo);
            
            $this->showAddView();
        }

    }


?>