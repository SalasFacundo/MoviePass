<?php
    namespace Controllers;
    use Models\Pelicula as Pelicula;
<<<<<<< HEAD
    use Models\Funcion as Funcion;
=======
    use Models\Cine as Cine;
>>>>>>> 11041c04b0145904a6b7485e09714865bf313c80
    use Dao\PeliculaDao as PeliculaDao;
    use Dao\CineDao as CineDao;
    use Dao\FuncionDao as FuncionDao;



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


        /** INICIO DEL HOME ADMIN CINE  */
        public function Inicio($message = "")
        {
            require_once(VIEWS_PATH."HomeCineAdmin.php");
        }

        /** INGRESAR PELICULA */
    public function AddMovie(){

        if($_POST){

            $id= $_POST['id'];
            
            

            $pelicula = file_get_contents(
                "http://api.themoviedb.org/3/movie/".$id."?api_key=a813ce03ea202b120e2307c4325bd6c3&language=en-US");
            

            $peliJson = json_decode($pelicula,true);
            

            

            $peli = new Pelicula();
            
            $peli->setTitulo($peliJson['title']);
            $peli->setPosterLink($peliJson['poster_path']);
            $peli->setSinopsis("Esta es una sinopsis");
            $peli->setDuracion($peliJson['runtime']);
            $peli->setFechaLanzamiento($peliJson['release_date']);
            $peli->setLenguaje($peliJson['original_language']);
            $peli->setActivo(true);

            var_dump($peli);
            
            
            $peliDao = new PeliculaDao();

            $peliDao->add($peli);


            
           /* echo '<pre>';
            var_dump($peliDao->getAll());
            echo '</pre>';*/

           // $peliculasBD = $peliDao->getAll();
            
            
            require_once(VIEWS_PATH."nueva-funcion.php");
        }





    }

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
            $cineDao = new CineDao();

            $allCinemas = $cineDao->getAll();
            if($_GET){
                $cine_editar = $cineDao->traerPorId($_GET['id']);
            }
            

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

            $peliDao = new PeliculaDao();

            $peliculasBD = $peliDao->getAll();

            //var_dump($peliculasBD);

            require_once(VIEWS_PATH."nueva-funcion.php");
        }



        public function AddFuncion(){

            if($_POST){

                

                $cine = $_POST['cine'];
                $numeroSala = $_POST['numeroSala'];
                $pelicula = $_POST['pelicula'];
                $fechaHoraInicio = $_POST['fechaHoraInicio'];

                $cine = trim($cine);
                $numeroSala = trim($numeroSala);
                $pelicula = trim($pelicula);
                $fechaHoraInicio = trim($fechaHoraInicio);


                $peliculaDao= new PeliculaDao();
                $peli = $peliculaDao->traerPorId($pelicula);
                $duracion = $peli->getDuracion();

                $fechaHoraFin = $this->calcularFechaFinal($fechaHoraInicio, $duracion);



                // Comprobar que la fecha y hora de inicio no sea antes a hoy
                $mañana = time() + (60 * 60 * 24);
                if(strtotime($fechaHoraInicio) < $mañana){
                    // no se pueden agregar peliculas con menos de 24hs de anticipacion a la funcion
                }


                // Comprobar que la pelicula no se pase ese dia en otro cine




                
                // comprobar que halla disponibilidad horaria en la sala
                $inicioTime = strtotime($fechaHoraInicio,$fechaHoraFin);



                $disponibilidad = $this->comprobarDisponibilidadSala($inicioTime, $fechaHoraFin );
                


                $fechaHoraFin = date('Y-m-d H:i ',$fechaHoraFin);
                $fechaHoraFin[10]="T";
                // Si hay disponibilidad instancio un objeto de tipo funcion y lo agrego a la bbdd de funciones
                if($disponibilidad){


                    $peliDao = new PeliculaDao();

                    $movie = $peliDao->traerPorId($pelicula);

                    


                    $funcion = new Funcion();
                   
                    $funcion->setIdSala($numeroSala);
                    $funcion->setIdPelicula($pelicula);
                    $funcion->setDiaHoraInicio($fechaHoraInicio);
                    $funcion->setDiaHoraFin($fechaHoraFin);
                    $funcion->setActivo(true);

                    var_dump($funcion)    ;


                    $funcionDao = new FuncionDAO();
                    $funcionDao->add($funcion);
                }
               


            }

            require_once(VIEWS_PATH."nueva-funcion.php");

        }


        function comprobarDisponibilidadSala($fechaInicio, $fechaFin){

            $funcionDao = new FuncionDAO();
            $allShows = $funcionDao->getAll();
            $agregar = true;
    
    
            foreach($allShows as $show){
                
                $showInicio = strtotime($show->getDiaHoraInicio());
                $showFin = strtotime($show->getDiaHoraFin());
                // Si la nueva funcion empieza y termina antes de que empieze la otra
                if(( $fechaInicio >= $showInicio && $fechaInicio < $showFin  ) || ($fechaFin >= $showInicio && $fechaFin < $showFin )   ) {
                
                    $agregar = false;
            
                }
    
            }
    
            return $agregar;
    
    
    
        }

        function calcularFechaFinal($fechaInicio, $duracion){

            $fecha = strtotime($fechaInicio);
    
            $fechaFinal = $fecha + (($duracion+15) * 60 ) ;
    
            //$horaFinal = date("H:i", mktime($h[0],$h[1]+$duracion+15));
    
    
            return $fechaFinal;
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


        public function AddCine (){

            if($_POST){

                $nombre = $_POST['nombre'];
                $calle = $_POST['calle'];
                $altura = $_POST['altura'];
                $codPostal = $_POST['codPostal'];
                $cantSalas = $_POST['cantSalas'];
                
                $nombre = trim($nombre);
                $calle = trim($calle);
                $altura = trim($altura);
                $codPostal = trim($codPostal);
                $cantSalas = trim($cantSalas);



                $cine = new Cine();

                $cine->setNombre($nombre);
                $cine->setCalle($calle);
                $cine->setAltura($altura);
                $cine->setCodigoPostal($codPostal);
                $cine->setCantidadSalas($cantSalas);
                $cine->setActivo(true);

                $cineDao = new CineDao();

                $cineDao->add($cine);


            }


        }
        
        public function EditCine (){

            if($_POST){

                $nombre = $_POST['nombre'];
                $calle = $_POST['calle'];
                $altura = $_POST['altura'];
                $codigoPostal = $_POST['codigoPostal'];
                
                $cantidadDeSalas = $_POST['cantidadSalas'];
                $id = $_POST['id'];

                $cine = new Cine();
                $cine->setNombre($nombre);
                $cine->setCalle($calle);
                $cine->setAltura($altura);
                $cine->setCodigoPostal($codigoPostal);
                $cine->setCantidadSalas($cantidadDeSalas);
                $cineDao = new CineDao();

                $cineDao->modificarCine($id,$cine);


                $this->AdminCine4();


            }


        }





    }
?>