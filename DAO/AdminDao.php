<?php        


    namespace DAO;

    use Models\Admin as Admin;

    use DAO\IAdminDao as IAdminDao;




        class AdminDao implements IAdminDao
        {

    public function Add($user)
    {
        $this->retrieveData();

            private $adminList = array();
            private $fileName ;

        $this->saveData();
    }

    public function GetAll()
    {
        $this->retrieveData();



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
        $arrayToDecode = array();

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

    public function GetByAdminName($adminName)
    {
        $admin = null;

        $this->RetrieveData();

        $admins = array_filter($this->adminList, function($admin) use($adminName){
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
            $jsonToDecode = file_get_contents($this->fileName);

            $contentArray = ($jsonToDecode) ? json_decode($jsonToDecode, true) : array();
            
            foreach($contentArray as $content)
            {
                $admin = new Admin();
                $admin->setAdminName($content["userName"]);
                $admin->setPassword($content["password"]);

                array_push($this->adminList, $admin);
            }
        }
    }  

}


















?>