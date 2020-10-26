<?php require_once(VIEWS_PATH."header.php"); ?>


<main class="container-fluid adm-cine-container">

    <div class="row adm-cine-row">

        <div class="col-3">
            <div class="row container-delete">
                <div class="col-12">
                    <h2 class="subrayadoh2">ELIMINAR SUCURSAL</h2>
                    <form action="#" method="post">
                        <div class="form-group">
                            <label for="">NUMERO DE ID</label>
                            <input type="number" class="form-control" name="id"placeholder="Numero de id de cine a borrar">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-form mb-3">Aceptar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-9">
            <div class="row container-list">

                <div class="col-12">
                    <h2 class="subrayadoh2">LISTA DE SUCURSALES</h2>
                    <table class="table table-striped ">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Nombre cine</th>
                                <th scope="col">Cantidad de salas</th>
                                <th scope="col">Direccion - calle</th>
                                <th scope="col">Direccion - altura</th>
                                <th scope="col">Codigo postal</th>
                                <th scope="col">Precio de la entrada</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>




</main>

<?php         require_once(VIEWS_PATH."footer.php");         ?>