<?php        


    namespace DAO;

    use Models\Admin as Admin;

    use DAO\IAdminDao as IAdminDao;




        class AdminDao implements IAdminDao
        {


            private $adminList = array();
            private $fileName ;


            public function __construct()
            {
                    $this->fileName = dirname(__DIR__)."/Data/Admin.json";
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




                private function RetrieveData()
                {
                    $this->adminList = array();

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