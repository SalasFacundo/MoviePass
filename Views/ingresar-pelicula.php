<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">



    <?php      include("linkcss.php")            ?>

    



</head>

<body>

    <header>

        <?php     include("nav-bar-admin.php");             ?>

    </header>



    <main class="container-fluid" id="adm-cine">

        <div class="row" id="caja0">

            <section class=col-sm-3 id="caja1">

                <div class="row container-filtro p-4">


                    <div class="col-sm-12">

                        <h2>FILTRO</h2>

                        <form action="" method="post">
                            <br>
                            <div class="form-group ">

                                <label for="">Seleccionar genero</label>
                                <select class="form-control  id="exampleFormControlSelect1" name="genero">

                                <option value="">--Seleccionar genero--</option>
                                <?php foreach ($generos as $genero) : ?> 

                                    <?php 
                                        if ($genero_filtro == $genero["name"]){
                                            echo "<option selected>" . $genero["name"] . "</option>";
                                        } else{
                                            echo "<option>". $genero['name'] ."</option>";
                                        }
                                        
                                    ?>
                                    
                                    
            
                                
                                <?php endforeach ?>   

                                </select>
                            </div>

                            <div class="form-group ">
                                <label for="">Fecha</label>

                                <input type="date" name="fecha" value="2018-07-22">
                                <br>
                                <input class="form-check-input" type="radio" name=fecha_action value=on
                                    id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                    Activar por fecha
                                </label>
                                <br>
                                <input class="form-check-input" type="radio" name=fecha_action value=off
                                    id="defaultCheck2" checked>
                                <label class="form-check-label" for="defaultCheck2">
                                    Desactivar por fecha
                                </label>


                            </div>

                            <button type="submit" class="btn btn-dark px-4">FILTRAR</button>

                        </form>
                        <?php if(count($peliculas_filtradas) < 1): ?>
                                <div class="alert alert-danger mt-3" role="alert">
                                NO HAY RESULTADOS
                            </div>
                        <?php endif?>


                    </div>



                </div>




            </section>




            <section class=col-sm-8 id="caja2"> <!-- SECCION DE LA PARTE DE LAS CARDS-->


                <div class="row contendor-card ">
                            
               
                

                <?php foreach ($peliculas_filtradas as $pelicula) : ?>
                    <!--   inicio  ESTO ES LA CARD  -->
                    <div class="col-sm-6  card6" > <!-- CAMBIARLE EL NOMBRE-->

                        <div class="row">

                            <div class="col-sm-4 card-imagen-pelicula ">
                                <!--   LUGAR DONDE VA LA IMAGEN     -->

                                <img src=<?php echo"https://image.tmdb.org/t/p/w342/" . $pelicula['poster_path'] ?>
                                    class="imagen-card">


                            </div>

                            <div class="col-sm-8" id="caja9"><!-- CAJA DE TEXTO-->
                                

                                <div class="row">

                                    <div class="col-sm-12 card-body" id="caja10">
                                        <!-- ACA VA EL TEXTO-->

                                        <h5 class="card-title"><?php echo $pelicula['title'] ?></h5>
                                        <p class="card-text"><?php echo $pelicula['overview'] ?></p>
                                    </div>

                                    <div class="col-12 boton-card" id="caja11">
                                        <!-- ACA VA EL BOTON-->

                                        <button type="button" class="btn btn-info">Agregar</button>

                                    </div>

                                </div>

=======
<?php require_once(VIEWS_PATH."header.php"); ?>

<main class="container-fluid adm-cine-container">

    <div class="row adm-cine-row ">

        <section class="col-3">
            <div class="row container-filtro  ">
                <div class="col-12 ">
                    <h2 class="subrayadoh2">FILTRO</h2>
                    <form action="" method="post">
                        <div class="form-group ">
                            <label for="">Seleccionar genero</label>
                            <select class="form-control" id="" name="genero">
                                <option selected>Seleccionar genero</option>
                            </select>
                        </div>
                        <div class="form-group ">
                            <label for="">Fecha</label>
                            <input type="date" name="fecha" value="2018-07-22">
                            <br>
                            <input class="form-check-input" type="radio" name=fecha_action value=on id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                                Activar por fecha
                            </label>
                            <br>
                            <input class="form-check-input" type="radio" name=fecha_action value=off id="defaultCheck2"
                                checked>
                            <label class="form-check-label" for="defaultCheck2">
                                Desactivar por fecha
                            </label>
                        </div>
                        <button type="submit" class="btn btn-form">filtrar</button>
                    </form>
                </div>
            </div>
        </section>

        <section class="col-9 "><!-- SECCION DE LA PARTE DE LAS CARDS-->
            
            <div class="row contenedor-card">
                <!--   inicio  de LA CARD  -->
                <div class="col-6 card-pelicula">
                    <div class="row  ">
                        <div class="col-4 col-img-card">
                            <img class="imagen-card" src="https://image.tmdb.org/t/p/w342/4BgSWFMW2MJ0dT5metLzsRWO7IJ.jpg">
                        </div>
                        <div class="col-8 card-body d-flex flex-column justify-content-between ">
                            <div>
                                <h5 class="card-title">Train To Busan 2: Peninsula</h5>
                                <p class="card-text">Después de que la infección que se extendió hace 4 años,
                                    solo
                                    algunas partes de Corea del Sur permanecen resguardadas, aunque la Península
                                    de
                                    Busan es la única parte en donde pueden buscar refugio los coreanos, muchos
                                    aún
                                    mantienen la esperanza de ser rescatados por ayuda internacional. </p>
                            </div>
                            <div>
                            <a href="#" class="btn btn-peliculas ">Agregae</a>
>>>>>>> Nico
                            </div>
                        </div>
<<<<<<< HEAD



                    </div><!--   FIN   ESTO ES LA CARD  -->

                    <?php endforeach ?>

                 


                    









=======
                    </div>
>>>>>>> Nico
                </div>
                 <!--   fin  de LA CARD  -->

                 
           
            </div>


        </section>














    </div>

</main>
<?php         require_once(VIEWS_PATH."footer.php");         ?>