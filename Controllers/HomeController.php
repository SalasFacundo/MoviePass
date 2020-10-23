<?php
    namespace Controllers;

    class HomeController
    {
        public function Index($message = "")
        {
            require_once(VIEWS_PATH."index.php");
        }  


        /*

        public function Home($message = "")
        {
            require_once(VIEWS_PATH."home.php");
        }


        */

        public function Inicio($message = "")
        {
            require_once(VIEWS_PATH."HomeCineAdmin.php");
        }


        public function AdminHome($message = "")
        {
            require_once(VIEWS_PATH."ingresar-pelicula.php");
        }

        public function AdminCine($message = "")
        {
            require_once(VIEWS_PATH."nuevo-cine.php");
        }

        public function AdminCine2($message = "")
        {
            require_once(VIEWS_PATH."modificar-cine.php");
        }
        
        public function AdminCine3($message = "")
        {
            require_once(VIEWS_PATH."eliminar-cine.php");
        }
        public function AdminCine4($message = "")
        {
            require_once(VIEWS_PATH."listar-cine.php");
        }


        public function AdminUsers($message = "")
        {
            require_once(VIEWS_PATH."adminUsers.php");
        }

        public function AdminEmpleados($message = "")
        {
            require_once(VIEWS_PATH."adminEmpleados.php");
        }
        
        
    }
?>