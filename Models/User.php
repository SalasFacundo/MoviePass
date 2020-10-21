<?php                 

    namespace Models;
    
    

    class User
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


