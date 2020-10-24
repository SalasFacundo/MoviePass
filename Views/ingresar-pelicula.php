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

                <div class="row container-filtro">


                    <div class="col-sm-12">

                        <h2>FILTRO</h2>

                        <form action="" method="post">
                            <br>
                            <div class="form-group ">

                                <label for="">Seleccionar genero</label>
                                <select class="form-control" id="exampleFormControlSelect1" name="genero">
                                    <option selected>Seleccionar genero</option>
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

                            <button type="submit" class="btn btn-primary">filtrar</button>

                        </form>


                    </div>



                </div>




            </section>




            <section class=col-sm-8 id="caja2"> <!-- SECCION DE LA PARTE DE LAS CARDS-->


                <div class="row contendor-card ">


                    <!--   inicio  ESTO ES LA CARD  -->
                    <div class="col-sm-6  card6" > <!-- CAMBIARLE EL NOMBRE-->

                        <div class="row">

                            <div class="col-sm-4 card-imagen-pelicula ">
                                <!--   LUGAR DONDE VA LA IMAGEN     -->

                                <img src="https://image.tmdb.org/t/p/w342/4BgSWFMW2MJ0dT5metLzsRWO7IJ.jpg"
                                    class="imagen-card">


                            </div>

                            <div class="col-sm-8" id="caja9"><!-- CAJA DE TEXTO-->
                                

                                <div class="row">

                                    <div class="col-sm-12 card-body" id="caja10">
                                        <!-- ACA VA EL TEXTO-->

                                        <h5 class="card-title">Train To Busan 2: Peninsula</h5>
                                        <p class="card-text">Después de que la infección que se extendió hace 4 años,
                                            solo
                                            algunas partes de Corea del Sur permanecen resguardadas, aunque la Península
                                            de
                                            Busan es la única parte en donde pueden buscar refugio los coreanos, muchos
                                            aún
                                            mantienen la esperanza de ser rescatados por ayuda internacional.</p>
                                    </div>

                                    <div class="col-12 boton-card" id="caja11">
                                        <!-- ACA VA EL BOTON-->

                                        <button type="button" class="btn btn-dark">Dark</button>

                                    </div>

                                </div>

                            </div>



                        </div>



                    </div><!--   FIN   ESTO ES LA CARD  -->

                     


                    


                     


                    









                </div>









            </section>














        </div>

    </main>













    <footer>
        





    </footer>



    <?php      include("jscss.php")            ?>

</body>

</html>