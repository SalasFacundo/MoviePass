<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="<?php echo CSS_PATH;?>estilos.css" rel="stylesheet" type="text/css" media="all">

    <link href="<?php echo CSS_PATH;?>bootstrap.min.css" rel="stylesheet" media="screen">

    <?php 

    use DAO\CineDao as CineDao;
    $cineDao = new CineDao();

    $todosLosCines = $cineDao->getAll()
    
    ?>

</head>

<body>


    <header>

        <?php     include("nav-bar-admin.php");  ?>

    </header>


    <section>


        <div class="container-fluid" id="conteinerCine">


            <div class="row" style="background-color: white;">


                <div class="col-sm-12" style="text-align: center;">
                    <h3>INGRESAR UN NUEVO CINE</h3>
                </div>

                <div class="col-sm-4"></div>
                <div class="col-sm-4">


                    <form action="<?= FRONT_ROOT ?>Cine/Add" method="post">

                        <div class="form-group">
                            <label for="" class="col-sm-4 col-form-label">NOMBRE CINE</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="nombre" placeholder="Nombre del cine...">
                            </div>
                        </div>

                        <div class="form-group ">
                            <label for="" class="col-sm-4 col-form-label">ID CINE</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" name="id" placeholder="ID cine....">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="" class="col-sm-4 col-form-label">DIRECCION</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="direccion"
                                    placeholder="Nombre de la calle - numero...">
                            </div>
                        </div>



                        <div class="form-group">
                            <label for="" class="col-sm-4 col-form-label">PRECIO ENTRADA</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="precio" placeholder="$...">
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="" class="col-sm-4 col-form-label">CANTIDAD SALAS</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" name="salas"
                                    placeholder="Numero de total de salas...">
                            </div>
                        </div>





                        <div class="form-group">
                            <div class="col-sm-12">
                                <button type="submit" class="btn btn-secondary">Aceptar</button>
                            </div>
                        </div>

                    </form>




                </div>


            </div>






        </div>
        <div class="col-sm-4"></div>



        </div>


        <div class="row" style="background-color:#ff8a8a;">

            <div class="col-sm-12" style="text-align: center;">
                <h3>Moficicar cine</h3>
            </div>

            <div class="col-sm-4"></div>
            <div class="col-sm-4" style="text-align: center;">
                

                <form action="<?= FRONT_ROOT ?>Cine/EditCine" method="post">
                <div class="form-group">
                    <label for="" class="col-sm-4 col-form-label">Cine:</label>
                    <div class="col-sm-10">
                        <select name="id" id="" class="form-control">
                            <option value="">--Selecciona un Cine--</option>

                            <?php 
                        if(isset($todosLosCines)){
                            foreach ($todosLosCines as $cine){ 
                                   
                                echo "<option value=".$cine->getIdCine().">".$cine->getNombreCine()."</option>";
                            }
                        }
                        ?>
                        </select>

                    </div>


                    <div class="form-group">
                        <label for="" class="col-sm-4 col-form-label">NOMBRE CINE</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="nombre" placeholder="Nombre del cine...">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="" class="col-sm-4 col-form-label">DIRECCION</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="direccion"
                                placeholder="Nombre de la calle - numero...">
                        </div>
                    </div>



                    <div class="form-group">
                        <label for="" class="col-sm-4 col-form-label">PRECIO ENTRADA</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="precio" placeholder="$...">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="" class="col-sm-4 col-form-label">CANTIDAD SALAS</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" name="salas"
                                placeholder="Numero de total de salas...">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <button type="submit" class="btn btn-secondary">Modificar</button>
                        </div>
                    </div>

            </form>
            </div>
            
        </div>


        <div class="col-sm-4"></div>




        </div>

        <div class="row" style="background-color:#f01d1d;">
            <div class="col-sm-12" style="text-align: center;">
                <h3>ELIMINAR CINE</h3>
            </div>

            <div class="col-sm-4"></div>
            <div class="col-sm-4">

                <form action="<?= FRONT_ROOT ?>Cine/removeCine" method="post">

                    <div class="form-group">
                        <label for="" class="col-sm-4 col-form-label">NUMERO DE ID</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" name="id"
                                placeholder="Numero de id de cine a borrar">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <button type="submit" class="btn btn-secondary">Aceptar</button>
                        </div>
                    </div>





                </form>






            </div>
            <div class="col-sm-4"></div>



        </div>


        <div class="row">
            <div class="col-sm-12" style="text-align: center;">
                <h3>LISTAR CINES</h3>
            </div>

            <div class="col-sm-4"></div>
            <div class="col-sm-4" style="text-align: center;">

                <table class="table table-striped table-dark">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nombre cine</th>
                            <th scope="col">Cantidad de salas</th>
                            <th scope="col">Direccion</th>
                            <th scope="col">Precio de la entrada</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <?php 
                        
                        if(isset($todosLosCines)){
                            foreach ($todosLosCines as $cine){ 
                                   
                                echo "<tr>
                                <td>". $cine->getIdCine()."</td>
                                 <td>" .$cine->getNombreCine() ."</td>
                                  
                                  <td>". $cine->getSalas()."</td>
                                  <td>". $cine->getDireccion()."</td>
                                  <td>". $cine->getPrecio() ."</td>

                                 </tr>";
                            }
                        }?>

                        </tr>



                    </tbody>
                </table>








            </div>
            <div class="col-sm-4"></div>



        </div>





        </div>




    </section>



    <footer>

        <a href="<?= FRONT_ROOT ?>/Home/Index" class="btn btn-info" role="button" aria-pressed="true">ir al INDEX</a>

        <br>






    </footer>



































    <script src="https://code.jquery.com/jquery.js"></script>
    <script src="<?php echo JS_PATH;?>bootstrap.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>

</body>

</html>