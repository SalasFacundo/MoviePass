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
                            </div>
                        </div>
                    </div>
                </div>
                 <!--   fin  de LA CARD  -->

                 
           
            </div>


        </section>














    </div>

</main>
<?php         require_once(VIEWS_PATH."footer.php");         ?>