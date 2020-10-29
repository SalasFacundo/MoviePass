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
                        <?php if(count($allCinemas) > 0) { ?>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Nombre cine</th>
                                <th scope="col">Direccion - calle</th>
                                <th scope="col">Direccion - altura</th>
                                <th scope="col">Codigo postal</th>
                                <th scope="col">Cantidad de salas</th>
                                <th scope="col">Acciones</th>
                              
                            </tr>
                        </thead>
                        <tbody>
                            
                            
                                
                                <?php foreach($allCinemas as $cine) :?>
                                    <tr>
                                <td><?php echo $cine->getIdCine() ?></td>
                                <td><?php echo $cine->getNombre() ?></td>
                                <td><?php echo $cine->getCalle() ?></td>
                                <td><?php echo $cine->getAltura() ?></td>
                                <td><?php echo $cine->getCodigoPostal()?></td>
                                <td><?php echo $cine->getCantidadSalas()?></td>
                                
                                <td>
                                    <a href="<?= FRONT_ROOT ?>/Home/AdminCine4?id=<?php echo $cine->getIdCine() ?>" class=" ml-3"><i class="fas fa-edit"></i> </a>
                                    <a href="" class=" ml-3"><i class="fas fa-trash"></i> </a>
                                </td>
                                </tr>
                                <?php endforeach ?>
                                
                           
                            
                            
                            <?php } else {?>
                                    <p class="alert bg-danger">No hay sucursales cargadas</p>
                            <?php }?>
                        </tbody>
                    </table>
                </div>
                <?php if($_GET): ?>
                    <?php  if($cine_editar) { ?>
                    
                    <h3>Editar Informacion del cine</h3>
                    <div class="col-12">
                    <form method="POST" action="<?= FRONT_ROOT ?>/Home/EditCine" class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" name="nombre" class="form-control" value="<?php echo $cine_editar->getNombre()?>">
                        <label for="nombre">Calle</label>
                        <input type="text" name="calle" class="form-control" value="<?php echo $cine_editar->getCalle()?>">
                        <label for="nombre">Altura</label>
                        <input type="text" name="altura" class="form-control" value="<?php echo $cine_editar->getAltura()?>">
                        <label for="nombre">Codigo Postal</label>
                        <input type="text" name="codigoPostal" class="form-control" value="<?php echo $cine_editar->getCodigoPostal()?>">
                        <label for="nombre">Cantidad de salas</label>
                        <input type="text" name="cantidadSalas" class="form-control" value="<?php echo $cine_editar->getCantidadSalas()?>">
                    
                        <input type="hidden" name="id" value="<?php echo $cine_editar->getIdCine()?>">
                        <button type="sumit" class="btn btn-block btn-primary mt-3">Editar</button>
                        
                        
                    </form>
                    </div>
                    
                
                <?php } else{ ?>
                    
                    <p class="alert bg-danger">No se encontraron resultados</p>
                <?php } ?>
                <?php endif; ?>
            
            </div>
        </div>
    </div>




</main>

<?php         require_once(VIEWS_PATH."footer.php");         ?>