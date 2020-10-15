<?php 

    namespace Controllers;

    use DAO\SalaDao as SalaDao;
    use DAO\CineDao as CineDao;
    use Models\Sala as Sala;

    class SalaController
    {

        private $salaDao;

        public function __construct(){
            $this->salaDao = new SalaDao();
        }
        public function showAddView($mensaje = ''){
            require_once(VIEWS_PATH."index.php");
        }

        public function Add($idCine,$numeroSala, $capacidad){

            echo '<p> id ingresado: '.$idCine.'</p>';
            
            // Checkear que el Id del cine sea correcto
            $cineDao = new CineDao();

            $posCine = $cineDao->posCine($idCine);
            $mensaje= '';

            echo '<p> poscine: '.$posCine.'</p>';

            if($posCine != -1){
                
                // Checkear que el cine tenga salas disponibles

                $disponible = false;
                // Obtengo todos los cines
                $allCines = $cineDao->getAll();

                // Checkeo si tiene salas disponibles para agregar
                $cantSalasCargadas = 0;


                $allSalas = $this->salaDao->getAll();

                $salasDelCine = array();

                // Cuento las salas cargadas del cines y las paso a un array para luego comprobar que no se repita el nro de sala
                foreach($allSalas as $sala){
                    if($sala->getIdCine() === $idCine){
                        $cantSalasCargadas ++;
                        array_push($salasDelCine, $sala);
                    }
                }


                if($allCines[$posCine]->getSalas() > $cantSalasCargadas){
                    $disponible = true;
                }
                

                // Si hay disponibilidad creo la sala con los datos recibidos y la agrego al DAO 
                var_dump($allCines[$posCine]->getSalas());
                if($disponible){
                    
                    // Checkeo que no se repita el numero de sala 
                    $repite = false;
                    foreach($salasDelCine as $salaCine){

                        if($salaCine->getNumeroSala() == $numeroSala){
                            $repite = true;
                        }


                    }
                    if(!$repite){
                        $salaNueva = new Sala();

                        $salaNueva->setIdCine($idCine);
                        $salaNueva->setNumeroSala($numeroSala);
                        $salaNueva->setCapacidad($capacidad);
                    
                        $this->salaDao->Add($salaNueva);
                        // Si agrega correctamente mostramos este mensaje
                        $mensaje = 'Sala agregada con exito!';
                    }else{
                        $mensaje= 'Ya existe una sala con ese numero en el cine indicado';
                    }

                    
                }else{
                    // Si no hay disponibilidad de salas a agregar mostramos este
                    $mensaje = 'No se pudo agregar la sala, el cine id: '.$idCine.' ya tiene todas sus salas asignadas';
                }

            }else{
                // Si el id del cine no exite
                $mensaje = 'El id del cine ingresado no es valido';
            }
            
            // Agregar el mensaje a la vista cuando esta este disponible
            $this->showAddView($mensaje);
        }


        public function Remove($numeroSala, $idCine){
            $mensaje = $this->salaDao->eliminarSala($idCine, $numeroSala);

            $this->showAddView($mensaje);
            
        }


    }


?>