<?php require_once(VIEWS_PATH."header.php"); ?>


<main class="container-fluid adm-cine-container">

    <div class="row adm-cine-row">
        <div class="col-4"></div>
        <div class="col-4">
            <div class="row container-form">
                <div class="col-12">
                    <h2 class="subrayadoh2">NUEVA SUCURSAL</h2>
                      <form action="<?= FRONT_ROOT ?>/Home/AddCine" method="POST">
                        <div class="form-group">
                            <label for="">Nombre de la sucursal </label>
                            <input type="text" class="form-control" name="nombre"
                                placeholder="Nombre de la sucursal...">
                        </div>
                        <div class="form-group">
                            <label for="">Direccion - Calle</label>
                            <input type="text" class="form-control" name="calle" placeholder="Nombre de la calle...">
                        </div>
                        <div class="form-group">
                            <label for="">Direccion - Altura</label>
                            <input type="Number" class="form-control" name="altura" placeholder="Altura de la calle...">
                        </div>
                        <div class="form-group">
                            <label for="">Codigo postal</label>
                            <input type="Number" class="form-control" name="codPostal" placeholder="Numero de codigo postal">
                        </div>
                        <div class="form-group">
                            <label for="">Cantidad de salas</label>
                            <input type="Number" class="form-control" name="cantSalas" placeholder="Cantidad de salas...">
                        </div>
                        <button type="submit" class="btn btn-form mb-3">ACEPTAR</button>
                    </form>
                </div>
            </div>

        </div>
        <div class="col-4"></div>
    </div>

</main>

<?php         require_once(VIEWS_PATH."footer.php");         ?>