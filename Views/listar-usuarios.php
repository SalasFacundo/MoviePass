<?php require_once(VIEWS_PATH."header.php"); 

$resultado_busqueda = $false;




?>


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
                                <th scope="col">DNI</th>
                                <th scope="col">Fecha Nac.</th>
                                <th scope="col">Tipo de usuario</th>
                                
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
                                    <a href="" class=" ml-3"><i class="fas fa-edit"></i> </a>
                                    <a href="" class=" ml-3"><i class="fas fa-trash"></i> </a>
                                </td>
                            </tr>

                            

                
                        </tbody>
                    </table>
                </div>
            </div> 

            
            <?php if($resultado_busqueda) {?>
                <div class="my-5  container">
                    <h3>Editar info del usuario </h3>
                    
                    <form method="GET" action="editar.php">
                    
                    <div class="form-group">
                        <label for="">NOMBRE </label>
                        <input type="text" class="form-control" name="edit_nombre" value="<?php echo $resultado_busqueda['nombre']?>">
                    </div>
                    <div class="form-group">
                        <label for="">APELLIDO </label>
                        <input type="text" class="form-control" name="edit_nombre" value="<?php echo $resultado_busqueda['apellido']?>">
                    </div>
                    <div class="form-group">
                        <label for="">DNI</label>
                        <input type="number" min="5000000" max="50000000" class="form-control" name="edit_apellido" value="<?php echo $resultado_busqueda['dni']?>">
                    </div>
                    <div class="form-group">
                        <label for="">FECHA DE NACIMIENTO </label>
                        <input type="date" class="form-control" name="edit_nombre" value="<?php echo $resultado_busqueda['fechaNac']?>">
                    </div>
                    
                    
                    <div class="form-group">
                        <label for="">EMAIL </label>
                        <input type="email" class="form-control" name="edit_nombre" value="<?php echo $resultado_busqueda['email']?>">
                    </div>

                    <div class="form-group">
                        <label for="">PASSWORD </label>
                        <input type="email" class="form-control" name="edit_pass1" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="">REPITA LA PASSWORD </label>
                        <input type="email" class="form-control" name="edit_pass2" placeholder="">
                    </div>
                    
                    <input type="hidden" name="id" value="<?php echo $resultado_busqueda['id']?>">

                    <button type="submit" class="btn btn-dark  ">Modificar</button>
                        
                        
                        
                    </form>
                </div> 
            <?php }else { ?> 

                <p class="alert bg-warning mt-4 font-weight-bold">No se encontraron resultados</p>
            <?php } ?>

        </div>


        
    </div>

</main>

<?php         require_once(VIEWS_PATH."footer.php");         ?>