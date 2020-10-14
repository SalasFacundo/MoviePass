<?php 

    namespace Controllers;

    use DAO\SalaDao as SalaDao;
    use Models\Sala as Sala;

    class SalaController
    {

        private $salaDao;

        public function __construct(){
            $this->salaDao = new SalaDao();
        }
        public function showAddView(){
            require_once(VIEWS_PATH."index.php");
        }

        public function Add($numeroSala, $capacidad){
        
            $salaNueva = new Sala();

            
            $salaNueva->setNumeroSala($numeroSala);
            $salaNueva->setCapacidad($capacidad);

            //var_dump($salaNueva);
            $this->salaDao->add($salaNueva);

            //var_dump($cineNuevo);
            
            $this->showAddView();
        }

    }


?>