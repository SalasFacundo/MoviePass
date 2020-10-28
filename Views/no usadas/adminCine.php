<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php      include("linkcss.php")            ?>
    

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


                <div class="col-sm-12">
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


      

       


        





        </div>




    </section>



    <footer>

        <a href="<?= FRONT_ROOT ?>/Home/Index" class="btn btn-info" role="button" aria-pressed="true">ir al INDEX</a>

        <br>






    </footer>



































    
    <?php      include("jscss.php")            ?>
</body>

</html>