<?php 

    namespace Controllers;

    use DAO\AdminDao as AdminDao;
    use Models\Admin as Admin;

    class AdminController{
        private $adminDao;

        public function __construct(){
            $this->adminDao = new AdminDao();
        }
        public function showAddView($mensaje){
            require_once(VIEWS_PATH."index.php");
        }

        public function Add($name, $user, $password){
        
            $adminNuevo = new Admin();
            $mensaje = '';

            $todosLosAdmin = $this->adminDao->GetAll();

            $repite = false;

            foreach($todosLosAdmin as $admin){
                if($admin->getUser() == $user){
                    $repite = true;
                }
            }

            if(!$repite){
                $adminNuevo->setName($name);
                $adminNuevo->setUser($user);
                $adminNuevo->setPassword($password);

                //var_dump($adminNuevo);
                $this->adminDao->Add($adminNuevo);
                $mensaje = 'Admin agregado!';
            }else{
                $mensaje = 'Ya existe un admin con ese User Name!';
            }
            

            
            $this->showAddView($mensaje);
        }

        public function removeAdmin ($user){
            $mensaje = $this->adminDao->eliminarAdmin($user);
             
            $this->showAddView();
            
            $this->showAddView($mensaje);
        }

    }


?>