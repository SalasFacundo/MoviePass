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

        /** INICIO DEL HOME ADMIN CINE  */
        public function Inicio($message = "")
        {
            require_once(VIEWS_PATH."HomeCineAdmin.php");
        }

        /** INGRESAR PELICULA */

        public function AdminHome($message = "")
        {
            $generos = file_get_contents("http://api.themoviedb.org/3/genre/movie/list?api_key=a813ce03ea202b120e2307c4325bd6c3&language=es-ES");
            $generos = json_decode($generos, true)["genres"];


    if (isset($_POST["genero"])) {

        $genero_filtro = $_POST["genero"];
        $fecha_filtro = $_POST["fecha"];
        $fecha_action = $_POST["fecha_action"];
    } else {
        $fecha_action = "off";
        $genero_filtro = "Todas";
    }
    

            $peliculas = [];
            $peliculas_filtradas = [];

            for ($i = 1; $i < 10; $i++) {

                $peliculas2 = file_get_contents("http://api.themoviedb.org/3/movie/upcoming?api_key=a813ce03ea202b120e2307c4325bd6c3&language=es-ES&page=" . $i);

                $peliculas2 = json_decode($peliculas2, true)["results"];
                
                $peliculas = array_merge($peliculas, $peliculas2);
                
            }

            $id_genero_form = null;


            if ($genero_filtro == "Todas") {

                $peliculas_filtradas = $peliculas;
            } else {

                for ($i = 0; $i < sizeof($generos); $i++) {

                    if ($generos[$i]["name"] == $genero_filtro)
                        $id_genero_form = $generos[$i]["id"];

                    if (in_array($id_genero_form, $peliculas[$i]['genre_ids'])) {

                        array_push($peliculas_filtradas, $peliculas[$i]);
                    }
                }
            }

            if ($fecha_action == "on") {

                $peliculas_para_filtrar = $peliculas_filtradas;
                $peliculas_filtradas = [];

                for ($i = 0; $i < sizeof($peliculas_para_filtrar); $i++) {
                    if ($peliculas_para_filtrar[$i]["release_date"] == $fecha_filtro) {
                        array_push($peliculas_filtradas, $peliculas[$i]);
                    }
                }
            }


            require_once(VIEWS_PATH."ingresar-pelicula.php");
        }

        /**  SUCURSALES */

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


        
       
        

                /**USUARIOS  */

        public function AdminAgregarUsuario($message = "")
        {
            require_once(VIEWS_PATH."nuevo-usuario.php");
        }

        public function AdminModificarUsuario($message = "")
        {
            require_once(VIEWS_PATH."modificar-usuario.php");
        }

        public function AdminListarUsuarios($message = "")
        {
            require_once(VIEWS_PATH."listar-usuarios.php");
        }

        /** FUNCION  */
        public function AdminNuevaFuncion($message = "")
        {
            require_once(VIEWS_PATH."nueva-funcion.php");
        }
    
        public function AdminListarFunciones($message = "")
        {
            require_once(VIEWS_PATH."listar-funciones.php");
        }


            /** SALAS   */


        public function AdminIngresarDatoSalas($message = "")
        {
            require_once(VIEWS_PATH."ingresar-datos-sala.php");
        }

        public function AdminListarSalas($message = "")
        {
            require_once(VIEWS_PATH."listar-salas.php");
        }



        
            





    }
?>