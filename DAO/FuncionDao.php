<?php 

    namespace DAO ;

   

    use Models\Funcion as Funcion;



    class FuncionDao {

        
        private $funcionList = array();
        private $fileName;

        public function __construct()
        {
            
            $this->fileName = dirname(__DIR__).'/Data/Funciones.json';
    
            
        }

        function add($funcion){

            $this->readFile();
            
            array_push($this->funcionList,$funcion);
            $this->saveData();
        }

        function getAll(){
            $this->readFile();
            return $this->funcionList;
        }

        function getFileName(){
            return $this->fileName;
        }

        function saveData(){
            $arrayToEncode = array();

            foreach($this->funcionList as $funcion){

                $valuesArray['numero_sala'] = $funcion->getSala();
                $valuesArray['id_pelicula'] = $funcion->getPelicula();
                $valuesArray['hora'] = $funcion->getHora();

                array_push($arrayToEncode, $valuesArray);

            }

            $jsonContent = json_encode($arrayToEncode,JSON_PRETTY_PRINT);

            
            file_put_contents($this->fileName,$jsonContent);
            
            
        }

        function readFile()
        {

        	$this->funcionList = array();

        	if(file_exists($this->fileName))
        	{
        		$jsonContent = file_get_contents($this->fileName);

        		$arrayContent = ($jsonContent) ? json_decode($jsonContent,true) : array();

        		foreach($arrayContent as $valuesArray)
        		{
        			$funcion = new Funcion();

        			$funcion->setSala($valuesArray['numero_sala']);
        			$funcion->setPelicula($valuesArray['id_pelicula']);
        			$funcion->setHora($valuesArray['hora']);

        			array_push($this->funcionList,$funcion);
        		}
        	}
        }

    
        


    }


  


?>