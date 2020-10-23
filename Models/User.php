<?php


namespace Models;
    
    

    class User
    {   
        private $name;
        private $lastName;
        private $email;
        private $isAdmin = false;
        private $password;

        public function getName()
        {
            return $this->name;
        }

        public function setName($name)
        {
            $this->name = $name;
        }


        public function getLastName()
        {
            return $this->lastName;
        }

        public function setLastName($lastName)
        {
            $this->lastName = $lastName;
        }

        public function getEmail()
        {
            return $this->email;
        }

        public function setEmail($email)
        {
            $this->email = $email;
        }

        public function getIsAdmin()
        {
            return $this->isAdmin;
        }

        public function setIsAdmin($isAdmin)
        {
            $this->isAdmin = $isAdmin;
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
