<<<<<<< HEAD
<?php


namespace Models;
=======
<?php                 

    namespace Models;
>>>>>>> fac7c39a925cf634c462e68b6366e3c94c80c65b
    
    

    class User
<<<<<<< HEAD
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
=======
    {
        private $userName;
        private $password;
        private $email;
        private $admin;



    
    public function __construct()
    {
        
    }        

    
    
    public function getUserName()
    {
        return $this->userName;
    }

    
    public function setUserName($userName)
    {
        $this->userName = $userName;
    }

    
    public function getPassword()
    {
        return $this->password;
    }

    
    public function setPassword($password)
    {
        $this->password = $password;
    }  


    public function getAdmin()
    {
        return $this->admin;
    }

    
    public function setAdmin($admin)
    {
        $this->admin = $admin;
    }

    
    public function getEmail()
    {
        return $this->email;
    }

    
    public function setEmail($email)
    {
        $this->email = $email;
    }
}
        



?>


>>>>>>> fac7c39a925cf634c462e68b6366e3c94c80c65b
