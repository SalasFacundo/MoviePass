<!DOCTYPE html>
<html lang="en">



<?php


    if(isset($_POST["genero"]))    
    {

        $genero_filtro=$_POST["genero"];
        $fecha_filtro=$_POST["fecha"];
        $fecha_action=$_POST["fecha_action"];


        
    }        
    else
    {
        $fecha_action="off";
        $genero_filtro="Todas";
    }
        
        

?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="<?php echo CSS_PATH;?>estilos.css" rel="stylesheet" type="text/css" media="all">

    <link href="<?php echo CSS_PATH;?>bootstrap.min.css" rel="stylesheet" media="screen">


</head>

<body>

    <header>

        <?php     include("nav-bar-admin.php");             ?>

    </header>


    <section>


        <div class="container-fluid" id="conteinerIngresar">


            <div class="row" id="caja">

                <div class="col-3">



                    <div class="row" id="filtro">

                        <h2>FILTRO</h2>
                        <div class="col-sm-12">

                            <form action="<?= FRONT_ROOT ?>/Home/AdminHome" method="post">
                                <br>
                                <div class="form-group">
                                    
                                    <label for="exampleFormControlSelect1">Seleccionar genero</label>
                                    <select class="form-control" id="exampleFormControlSelect1" name="genero">

                                    <?php 
                                                                      
                                    
                                        $generos= file_get_contents("http://api.themoviedb.org/3/genre/movie/list?api_key=a813ce03ea202b120e2307c4325bd6c3&language=es-ES");
                                        $generos= json_decode($generos, true)["genres"];   
                                        

                                                echo "<option>Todas</option>";

                                        foreach ($generos as $genero) {

                                            if($genero_filtro==$genero["name"])
                                                echo "<option selected>".$genero["name"]."</option>";
                                            else
                                                echo "<option>".$genero["name"]."</option>";
                                        }
                                    ?>                                        


                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Filtrar por fecha</label>
                                    
                                        <input type="date"  name="fecha" value="2018-07-22"><br>
                                        <input type="radio" name=fecha_action value=on> Activar por fecha
                                        <input type="radio" name=fecha_action value=off checked> Desactivar por fecha
                                    </select>
                                </div>

                               

                                <button type="submit" class="btn btn-primary">filtrar</button>




                            </form>


                        </div>

                    </div>



                </div>

                <div class="col-8">

            




                    <?php 
                    
                    $peliculas=[];
                    $peliculas_filtradas=[];
                    for ($i=1; $i < 10; $i++) { 
                       
                        $peliculas2= file_get_contents("http://api.themoviedb.org/3/movie/upcoming?api_key=a813ce03ea202b120e2307c4325bd6c3&language=es-ES&page=".$i);
                        
                        $peliculas2= json_decode($peliculas2, true)["results"];
                        $peliculas=array_merge($peliculas, $peliculas2);
                    }
                    

                    var_dump($peliculas[0]);
                    
                    $id_genero_form=null;
                    

                    if($genero_filtro=="Todas")
                    {

                        $peliculas_filtradas=$peliculas;                            

                    }
                    else  
                    {

                        for ($i=0; $i <sizeof($generos) ; $i++) 
                        { 

                            if($generos[$i]["name"] ==$genero_filtro)
                            $id_genero_form= $generos[$i]["id"];

                            if (in_array( $id_genero_form, $peliculas[$i]['genre_ids']))
                            {                           

                                array_push($peliculas_filtradas, $peliculas[$i]);                               
                                
                            } 
                        }  

                        
                    }

                    if($fecha_action=="on")
                        { 
                            
                            $peliculas_para_filtrar=$peliculas_filtradas;
                            $peliculas_filtradas=[];

                            for ($i=0; $i <sizeof($peliculas_para_filtrar) ; $i++) 
                            {
                                if($peliculas_para_filtrar[$i]["release_date"]==$fecha_filtro)
                                {
                                    array_push($peliculas_filtradas, $peliculas[$i]);
                                }
                            }
                            
                            
                            
                        }
                   
                         
                    

                        foreach ($peliculas_filtradas as $pelicula ) {
                           
                        
                            
                    
                            
                            ?>

                                    <div class="row" id="card-pelicula">
                                        <div class="col-sm-9">

                                            <div class="card" id="card">
                                                <img src= <?php echo"https://image.tmdb.org/t/p/w342/".$pelicula['poster_path']?>
                                                
                                                    class="card-img-top img-fluid " alt="Responsive image">

                                                <div class="card-body">

                                                    <h5 class="card-title"><?php echo $pelicula['title']?></h5>

                                                    <p class="card-text"><?php echo $pelicula['overview']?></p>
                                                </div>

                                            </div>



                                        </div>

                                        <div class="col-sm-3"><?php                  ?>

                                            <br>
                                            <button type="button" class="btn btn-warning">Warning</button>
                                            <br>
                                            <br>
                                            <button type="button" class="btn btn-danger">Danger</button>
                                        </div>

                                    </div>


                                    <?php

                       
                           
                        }
                            ?>

                   

                    

                    

                 
                            
                                       
                  

                    

                    

                    














                    <br>

                   







                </div>

                <div class="col-1">

                    <h2>col 3</h2>



                </div>

            </div>



        </div>




    </section>



    <footer>

        <a href="<?= FRONT_ROOT ?>/Home/Index" class="btn btn-info" role="button" aria-pressed="true">ir al INDEX</a>

        <br>



    </footer>








































    <script src="https://code.jquery.com/jquery.js"></script>
    <script src="<?php echo JS_PATH;?>bootstrap.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>

</body>

</html>