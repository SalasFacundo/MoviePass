<?php require_once(VIEWS_PATH."header.php"); 




?>


<main class="container-fluid adm-cine-container">

    <div class="row adm-cine-row">
        <div class="col-4 "></div>
        <div class="col-4 ">
            <div class="row container-form">
                <div class="col-12">
                    <h2 class="subrayadoh2">NUEVA FUNCION</h2>
                    <form action="<?= FRONT_ROOT ?>/Home/AddFuncion" method="POST">
                        <div class="form-group">
                            <label for=""> CINE</label>
                            <input type="number" class="form-control" name="cine" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for=""> NUMERO DE SALA</label>
                            <input type="number" class="form-control" name="numeroSala" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="">PELICULA</label>
                            <select name="pelicula" id="">
                                <option value="">--Seleccione la Pelicula---</option>
                                <?php 
                                echo '<pre>';
                                var_dump($peliculasBD);
                                echo '</pre>';
                                foreach($peliculasBD as $pelicula) :?>
                                    
                                    <option value=<?php echo  $pelicula->getIdPelicula();?>><?php echo  $pelicula->getTitulo();?></option>

                                <?php endforeach?>

                            </select>
                        </div>
                        <div class="form-group">
                            <label for=""> FECHA Y HORA DE INICIO</label>
                            <input type="datetime-local" class="form-control" name="fechaHoraInicio" placeholder="">
                        </div>
                        <button type="submit" class="btn btn-form mb-3">ACEPTAR</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-4 "></div>
        </div>
    </div>
    

</main>

<?php         require_once(VIEWS_PATH."footer.php");         ?>