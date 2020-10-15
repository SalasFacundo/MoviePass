<?php 

    namespace Controllers;

    use DAO\AdminDao as AdminDao;
    use Models\Admin as Admin;

    class LoginController{

        private $adminDao;

        public function __construct(){
            $this->adminDao = new AdminDao();
        }

       

        public function ShowAddView()
        {
            require_once(VIEWS_PATH."validate-session.php");            
            require_once(VIEWS_PATH."adminHome.php");

        }

        public function Login($adminName, $password)
        {
            
            $admin = $this->adminDao->GetByAdminName($adminName);

            //var_dump($admin);

            if(($admin != null) && ($admin->getPassword() === $password))
            {
                $_SESSION["loggedUser"] = $admin;
                $this->ShowAddView();
            }
            else
            {
                echo "<h1>Usuario y/o Contraseña incorrectos</h1>";



                require_once(VIEWS_PATH."index.php");


            }
            
            
            
        }

    
        public function Logout()
        {
            session_destroy();
            require_once(VIEWS_PATH."index.php");
            
        }



       

    }


?>