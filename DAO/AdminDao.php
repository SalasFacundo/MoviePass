<?php        


namespace DAO;

use Models\Admin as Admin;

class AdminDAO {

    private $userList = array();
    private $fileName;


    public function __construct()
    {
            $this->fileName = dirname(__DIR__)."/Data/Admin.json";
     }


    public function Add($user)
    {
        $this->RetrieveData();

        array_push($this->userList,$user);

        $this->SaveData();
    }

    public function GetAll()
    {
        $this->RetrieveData();

        var_dump($this->userList);

        return $this->userList;
        
    }

    


    private function SaveData()
    {

        $arrayToDecode= array();

        foreach($this->userList as $user)
        {
            $valuesArray["name"]= $user->getName();
            $valuesArray["user"]= $user->getUser();
            $valuesArray["password"]= $user->getPassword();
            
            array_push($arrayToDecode,$valuesArray);

        }

        $jsonContet = json_encode($arrayToDecode,JSON_PRETTY_PRINT);

        file_put_contents($this->fileName,$jsonContet);

    }


    private function RetrieveData()
    {
        $this->userList = array();

        if(file_exists($this->fileName))
        {
            $jsonContet = file_get_contents($this->fileName);

            $arrayToDecode = ($jsonContet ) ? json_decode ($jsonContet,true):array();

            var_dump($arrayToDecode);

            foreach($arrayToDecode as $valuesArray)
            {
                $user = new Admin();

                $user->setName($valuesArray["name"]);
                $user->setUser($valuesArray["user"]);
                $user->setPassword($valuesArray["password"]);

                array_push($this->userList,$user);

                //var_dump($this->userList);
            }

        }

    }


       



}

















?>