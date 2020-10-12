<?php 

    namespace Controllers;

    use DAO\AdminDao as AdminDao;
    use Models\Admin as Admin;

    class AdminController{
        private $adminDao;

        public function __construct(){
            $this->adminDao = new AdminDao();
        }
        public function showAddView(){
            require_once(VIEWS_PATH."index.php");
        }

        public function Add($name, $user, $password){
        
            $adminNuevo = new Admin();

            
            $adminNuevo->setName($name);
            $adminNuevo->setUser($user);
            $adminNuevo->setPassword($password);

            //var_dump($adminNuevo);
            $this->adminDao->Add($adminNuevo);

            //var_dump($cineNuevo);
            
            $this->showAddView();
        }

        public function removeAdmin ($user){

            $this->adminDao->eliminarAdmin($user);
             
            $this->showAddView();
            

        }

    }


?>