<?php 

    namespace DAO ;

    ///require "../Config/Autoload.php";

    //Autoload::start();

    use Models\Sala as Sala;

    class SalaDao {

        private $salasList = array();
        private $fileName;


        public function __construct(){
            $this->fileName = dirname(__DIR__).'/Data/Salas.json';
        }

        function Add($sala){
            $this->readFile();
            array_push($this->salasList,$sala);
            $this->saveData();
        }

        function getAll(){
            $this->readFile();
            return $this->salasList;
        }

        function getFileName(){
            return $this->fileName;
        }

        public function posSala($numSala, $idCine){
            
            $pos= -1;
            $this->readFile();
            for($i=0; $i < count($this->salasList); $i++){
                if($this->salasList[$i]->getIdCine()=== $idCine && $this->salasList[$i]->getNumeroSala()=== $numSala ){
                    $pos=$i;
    
                } 
            }
    
            return $pos;
        }



    public function eliminarSala($numSala, $idCine)
    {
        $this->readFile();
        $mensaje = '';

        
        var_dump($idCine);
        var_dump($numSala);
        $pos=$this->posSala($numSala, $idCine);

            if ($pos!=-1) {
                unset($this->salasList[$pos]);  
                $mensaje = 'Sala eliminada correctamente';
            }else{
                $mensaje = 'Los datos ingresados son incorrectos, no existe el numero de sala o el cine indicado';
            }
                  
        $this->SaveData();   

        return $mensaje;
    
    }



        function saveData(){
            $arrayToEncode = array();

            foreach($this->salasList as $sala){
                $valuesArray['numeroSala'] = $sala->getNumeroSala();
                $valuesArray['capacidad'] = $sala->getCapacidad();
                $valuesArray['idCine'] = $sala->getIdCine();
 

                array_push($arrayToEncode, $valuesArray);

            }

            $jsonContent = json_encode($arrayToEncode,JSON_PRETTY_PRINT);

            file_put_contents($this->fileName,$jsonContent);
            
        }

        

        function readFile(){

            $this->salasList = array();

            if(file_exists($this->fileName)){

            $jsonContent = file_get_contents($this->fileName);

            $arrayContent = ($jsonContent) ? json_decode($jsonContent,true) : array();

            foreach($arrayContent as $room){
                $sala = new Sala();
                
                $sala->setIdCine($room['idCine']);
                $sala->setNumeroSala($room['numeroSala']);
                $sala->setCapacidad($room['capacidad']);
                


                array_push($this->salasList,$sala);
            }

            
        }


        }

    }

?>