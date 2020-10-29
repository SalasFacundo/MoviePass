<?php require_once(VIEWS_PATH."header.php"); ?>

<main class="container-fluid adm-cine-container">

    <div class="row adm-cine-row ">

        <section class="col-3">
            <div class="row container-filtro  ">
                <div class="col-12 p-4">
                    <h2 class="subrayadoh2">FILTRO</h2>
                    <form action="<?= FRONT_ROOT ?>/Home/AdminHome" method="POST">
                        <div class="form-group ">
                            <label for="">Seleccionar genero</label>
                            
                            <select class="form-control" id="" name="genero">
                            <option selected>Seleccionar genero</option>
                            <option value="Todas">Todas</option>
                            <?php foreach($generos as $genero) :?>
                                <?php if($genero_filtro == $genero["name"] ){?>
                                    <option selected><?php echo $genero["name"] ?></option>
                                <?php }else {?>
                                    <option><?php echo $genero["name"] ?></option>
                                <?php }?>
                            <?php endforeach ;?>
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
       
        <section class="col-9 col-span-2"><!-- SECCION DE LA PARTE DE LAS CARDS-->
        <div class="row contenedor-card col-12 ">
            <?php// echo count($peliculas_filtradas); ?>
            
            <?php /* foreach($peliculas_filtradas as $pelicula)  */  
          
            
            for($i=0; $i< count($peliculas_filtradas) ; $i++) :?>
            
                <!--   inicio  de LA CARD  -->
                <div class="col-6 card-pelicula ">
                    <div class="row col-span-2">
                        <div class="col-4 col-img-card ">
                            <img class="imagen-card img img-fluid" src="<?php echo'https://image.tmdb.org/t/p/w342/' . $peliculas_filtradas[$i]['poster_path'] ?>">
                        </div>
                        <div class="col-8 card-body d-flex flex-column justify-content-between ">
                            <div>
                                <h5 class="card-title"><?php echo $peliculas_filtradas[$i]['title'] ?></h5>
                                <p class="card-text"><?php echo $peliculas_filtradas[$i]['overview'] ?></p>
                            </div>
                            <div>
                            <form action="<?= FRONT_ROOT ?>/Home/AddMovie" method="POST">
                                <input type="hidden" name="id" value="<?php echo $peliculas_filtradas[$i]['id'] ?>">
                                <button type="submit">Agregar Pelicula</button>
                            </form>
                            
                            </div>
                        </div>
                    </div>
                </div>

                
                 <!--   fin  de LA CARD  -->
            
            <?php endfor; ?>
            </div>


        </section>
      









    </div>

</main>
<?php         require_once(VIEWS_PATH."footer.php");         ?>