<?php
use DAO\CineDao as CineDao;

$cineDao = new CineDao();

$allCinemas = $cineDao->getAll();

//var_dump($allCinemas);


require_once(VIEWS_PATH."header.php"); 



?>


<main class="container-fluid adm-cine-container">

    <div class="row adm-cine-row">
        <div class="col-4"></div>
        <div class="col-4">
            
            <div class="row container-form">
                <div class="col-12">
                    <h2 class="subrayadoh2">MODIFICAR SUCURSAL</h2>
                    <form action="">
                        <div class="form-group">
                            <label for=""> SELECCIONE EL CINE </label>
                            <form action="">
                            <select class="form-control">
                                <option value="" name="idCine">--Seleccione una Sucursal--</option>
                                <?php foreach($allCinemas as $cine)?>
                                    <option value=<?php echo $cine->getIdCine(); ?>><?php echo $cine->getNombre()?></option>
                                <?php ?>
                            </select>
                            <button type="submit" class="btn btn-dark">Modificar</button>
                            </form>
                            
                        </div>
                        <div class="form-group">
                            <label for="">NOMBRE CINE</label>
                            <input type="text" class="form-control" name="" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="">DIRECCION -CALLE</label>
                            <input type="text" class="form-control" name=""
                                placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="">DIRECCION -ALTURA</label>
                            <input type="text" class="form-control" name=""
                                placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="">CODIGO POSTAL</label>
                            <input type="text" class="form-control" name=""
                                placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="">PRECIO ENTRADA</label>
                            <input type="text" class="form-control" name="" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="">CANTIDAD SALAS</label>
                            <input type="number" class="form-control" name=""
                                placeholder="">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-form mb-3">ACEPTAR</button>
                        </div>
                    </form>
                </div>

            </div>
            
        </div>
        <div class="col-4"></div>

</main>

<?php         require_once(VIEWS_PATH."footer.php");         ?>