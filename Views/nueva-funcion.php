<?php require_once(VIEWS_PATH."header.php"); ?>


<main class="container-fluid adm-cine-container">

    <div class="row adm-cine-row">
        <div class="col-4 "></div>
        <div class="col-4 ">
            <div class="row container-form">
                <div class="col-12">
                    <h2 class="subrayadoh2">NUEVA FUNCION</h2>
                    <form action="">
                        <div class="form-group">
                            <label for=""> NUMERO DE SALA</label>
                            <input type="number" class="form-control" name="" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for=""> ID PELICULA</label>
                            <input type="number" class="form-control" name="" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for=""> FECHA</label>
                            <input type="date" class="form-control" name="" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for=""> HORA DE INICIO</label>
                            <input type="time" class="form-control" name="" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for=""> HORA DE FINALIZACION</label>
                            <input type="time" class="form-control" name="" placeholder="">
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