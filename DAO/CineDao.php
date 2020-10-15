<?php 

    namespace DAO ;

    //require "../Config/Autoload.php";

    //Autoload::start();

    use Models\Cine as Cine;

    class CineDao {

        
        private $cinemaList = array();
        private $fileName;

        public function __construct()
        {
            
            $this->fileName = dirname(__DIR__).'/Data/Cines.json';
    
            
        }

        function add($cine){

            $this->readFile();
            
            array_push($this->cinemaList,$cine);
            $this->saveData();
        }

        function getAll(){
            $this->readFile();
            return $this->cinemaList;
        }

        function getFileName(){
            return $this->fileName;
        }



        public function posCine($id){
            
            $pos= -1;
            $this->readFile();
            var_dump($this->cinemaList);
            for($i=0; $i < count($this->cinemaList); $i++){
                if($this->cinemaList[$i]->getIdCine()===$id){
                    $pos=$i;
    
                } 
            }
    
            return $pos;
        }



    public function eliminarCine($id)
    {
        $this->readFile();
        $mensaje = '';
        $pos=$this->posCine($id);

            if ($pos!=-1) {
                unset($this->cinemaList[$pos]);  
                $mensaje = 'Cine eliminado correctamente';
            }else{
                $mensaje = 'No se encontro el id del cine indicado';
            }
                  
        $this->SaveData();   
        
        return $mensaje;
    
    }

    function agregarSalaAlCine ($sala, $cineId){

        $this->readFile();

        $pos = $this->posCine($cineId);
        
        if($pos != -1){
            // Falta checkear que el numero de sala no se repita
            $salasDelCine = $this->cinemaList[$pos]->getSalas();
            array_push($salasDelCine, $sala);

            $this->cinemaList[$pos]->setSalas($salasDelCine);
           
            $this->saveData();


        }


    }

        function saveData(){
            $arrayToEncode = array();

            foreach($this->cinemaList as $cine){

                $valuesArray['idCine'] = $cine->getIdCine();
                $valuesArray['nombreCine'] = $cine->getNombreCine();
                $valuesArray['salas'] = $cine->getSalas();
                $valuesArray['direccion'] = $cine->getDireccion();
                $valuesArray['precio'] = $cine->getPrecio();
                array_push($arrayToEncode, $valuesArray);

            }

            $jsonContent = json_encode($arrayToEncode,JSON_PRETTY_PRINT);

            
            file_put_contents($this->fileName,$jsonContent);
            
            
        }



        function readFile(){

            $this->cinemaList = array();

            if(file_exists($this->fileName)){

            $jsonContent = file_get_contents($this->fileName);

            $arrayContent = ($jsonContent) ? json_decode($jsonContent,true) : array();

            foreach($arrayContent as $cinema){
                $cine = new Cine();
                
                $cine->setIdCine($cinema['idCine']);
                $cine->setNombreCine($cinema['nombreCine']);
                $cine->setSalas($cinema['salas']);
                $cine->setPrecio($cinema['precio']);
                $cine->setDireccion($cinema['direccion']);

                array_push($this->cinemaList,$cine);
            }

            
        }


        }

    }
    
?>