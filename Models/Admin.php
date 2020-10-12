<?php                 

    namespace Models;
    
    class Admin{

        private $name;
        private $user;
        private $password;

        public function getName()
        {
            return $this->name;
        }

        public function setName($userName)
        {
            $this->name = $userName;
        }


        public function getUser()
        {
            return $this->user;
        }

        public function setUser($user)
        {
            $this->user = $user;
        
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

















?>