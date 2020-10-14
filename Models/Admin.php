<?php                 

    namespace Models;
    
    

    class Admin
    {
        private $adminName;
        private $password;

        public function getAdminName()
        {
            return $this->adminName;
        }

        public function setAdminName($adminName)
        {
            $this->adminName = $adminName;
        }

        public function getPassword()
        {
            return $this->password;
        }

        public function setPassword($password)
        {
            $this->password = $password;
        }
    }
        



?>


