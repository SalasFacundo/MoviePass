<?php require_once(VIEWS_PATH."header.php"); ?>


<main class="container-fluid adm-cine-container">

    <div class="row adm-cine-row">

        <div class="col-3">

            <div class="row container-buscar-user">

                <div class="col-12">
                    <h2>BUSCAR USUARIO</h2>
                    <form action="#" method="post">
                        <div class="form-group">
                            <label for=""> DNI DE USIARIO</label>
                            <input type="number" class="form-control" name="" placeholder="">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Aceptar</button>
                        </div>
                    </form>
                </div>

            </div>
            <div class="row container-rol-usuario">
                <div class="col-12">
                    <h2>TIPO DE USUARIO</h2>
                    <form action="">
                        <div class="form-group ">
                            <label for="">TIPO DE USUARIO</label>
                            <select id="" class="form-control">
                                <option selected>Tipo de usuario...</option>
                                <option>...</option>
                            </select>
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
                    <h2 class="subrayadoh2">LISTA DE USUARIOS</h2>
                    <table class="table table-striped ">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Apellido</th>
                                <th scope="col">Tipo de Dni</th>
                                <th scope="col">Numero de Dni</th>
                                <th scope="col">Edad</th>
                                <th scope="col">Tipo de usuario</th>
                                <th scope="col">Eliminar</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>ADRIAN</td>
                                <td>PEREZ</td>
                                <td>DNI</td>
                                <td>123123123</td>
                                <td>32</td>
                                <td>USER</td>
                                <td>
                                    
                                    <a href="" class=" ml-3"><i class="fas fa-trash"></i> </a>
                                </td>
                            </tr>

                            <tr>
                                <td>1</td>
                                <td>ADRIAN</td>
                                <td>PEREZ</td>
                                <td>DNI</td>
                                <td>123123123</td>
                                <td>32</td>
                                <td>USER</td>
                                <td>
                                    
                                    <a href="" class=" ml-3"><i class="fas fa-trash"></i> </a>
                                </td>
                            </tr>

                
                        </tbody>
                    </table>
                </div>
            </div>

        </div>

    </div>

</main>

<?php         require_once(VIEWS_PATH."footer.php");         ?>