<?php        


namespace DAO;

use Models\Admin as Admin;

class AdminDAO {



    public function __construct()
    {
            $this->fileName = dirname(__DIR__)."/Data/Admin.json";
    }


    public function Add($user)
    {
        $this->retrieveData();

        array_push($this->userList,$user);

        $this->saveData();
    }

    public function GetAll()
    {
        $this->retrieveData();

        //var_dump($this->userList);

        return $this->userList;
        
    }

    public function posAdmin($user){
        
        $pos=-1;

        for($i=0; $i < count($this->userList); $i++){
            if($this->userList[$i]->getUser()===$user){
                $pos=$i;

            } 
        }

        return $pos;
    }


    public function eliminarAdmin($id)
    {
        $this->RetrieveData();
        $mensaje = '';
        $pos=$this->posAdmin($id);

            if ($pos!=-1) {
                unset($this->userList[$pos]);
                $mensaje = 'Administrador eliminado correctamente';  
            }else{
                $mensaje = "No se encontro el administrador indicado";
            }
                  
        $this->SaveData();   
        
        return $mensaje;
    }

    private function saveData()
    {

        $arrayToDecode= array();

        foreach($this->userList as $user)
        {
            $valuesArray["name"]= $user->getAdminName();
            $valuesArray["password"]= $user->getPassword();
            
            array_push($arrayToDecode,$valuesArray);

        }

        $jsonContet = json_encode($arrayToDecode,JSON_PRETTY_PRINT);

        file_put_contents($this->fileName,$jsonContet);

    }


    public function GetByAdminName($adminName)
    {
        $admin = null;

        $this->RetrieveData();

        $admins = array_filter($this->userList, function($admin) use($adminName){
            return $admin->getAdminName() == $adminName;
        });

        $admins = array_values($admins); //Reordering array indexes

        return (count($admins) > 0) ? $admins[0] : null;
    }


    private function retrieveData()
    {
        $this->userList = array();

        if(file_exists($this->fileName))
        {
            $jsonContet = file_get_contents($this->fileName);

            $arrayToDecode = ($jsonContet ) ? json_decode ($jsonContet,true):array();

            //var_dump($arrayToDecode);

            foreach($arrayToDecode as $valuesArray)
            {
                $user = new Admin();

                $user->setAdminName($valuesArray["name"]);
                $user->setPassword($valuesArray["password"]);

                array_push($this->userList,$user);

                //var_dump($this->userList);
            }

        }

    }




       



}

















?>