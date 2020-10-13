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
            require_once(VIEWS_PATH."index.php");
        }

        public function Add($nombre, $id){
        
            $cineNuevo = new Cine();

            
            $cineNuevo->setNombreCine($nombre);
            $cineNuevo->setIdCine($id);


            $this->cineDao->add($cineNuevo);

            //var_dump($cineNuevo);
            
            $this->showAddView();
        }

        public function removeCine ($id){

            $this->cineDao->eliminarCine($id);
             
            $this->showAddView();
            

        }

        public function addSalaToCine($cineId, $numeroDeSala, $capacidad){

            $sala = new Sala();

            $sala->setNumeroSala($numeroDeSala);
            $sala->setCapacidad($capacidad);

            
            $this->cineDao->agregarSalaAlCine($sala, $cineId);

            $this->showAddView();

        }



        function showSalasFromCineId ($id){

            $todosLosCines = $this->cineDao->getAll();

            foreach($todosLosCines as $cine)
            {
                if($cine->getIdCine() === $id){
                    $salas = $cine->getSalas();
                    foreach($salas as $sala){
                        var_dump($sala);
                    }
                }
            }

            $this->showAddView();

        }

    }


?>