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

        


        public function AdminHome($message = "")
        {
            require_once(VIEWS_PATH."adminHome.php");
        }

        public function AdminCine($message = "")
        {
            require_once(VIEWS_PATH."adminCine.php");
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