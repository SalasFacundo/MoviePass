<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php      include("linkcss.php")            ?>



</head>

<body>

    <header>

        <?php     include("nav-bar-admin.php");             ?>

    </header>



    <main class="container-fluid" id="adm-cine">

        <section class="row" id="caja0">


            <div class="col-sm-4" id="caja1">


            </div>
            <div class="col-sm-4" id="caja2">


                <div class="row container-form">

                    <div class="col-sm-12">

                    <h2>MODIFICAR SUCURSAL</h2>

                    <form action="">



                        <div class="form-group">
                            <label for=""> LISTA DE SUCURSALES</label>
                            <select class="form-control">
                                <option value="">--Seleccione una Sucursal--</option>
                            </select>
                        </div>



                        <div class="form-group">
                            <label for="">NOMBRE CINE</label>
                            <input type="text" class="form-control" name="nombre" placeholder="Nombre del cine...">
                        </div>

                        <div class="form-group">
                            <label for="">DIRECCION</label>

                            <input type="text" class="form-control" name="direccion"
                                placeholder="Nombre de la calle - numero...">

                        </div>

                        <div class="form-group">
                            <label for="">PRECIO ENTRADA</label>

                            <input type="text" class="form-control" name="precio" placeholder="$..." min="100">

                        </div>

                        <div class="form-group">
                            <label for="">CANTIDAD SALAS</label>

                            <input type="number" class="form-control" name="salas"
                                placeholder="Numero de total de salas..." min="0">

                        </div>

                        <div class="form-group">

                            <button type="submit" class="btn btn-primary mb-2">ACEPTAR</button>

                        </div>


                    </form>



                </div>



                </div>

                



            </div>
            <div class="col-sm-4" id="caja3"></div>


        </section>

    </main>













    <footer>
        <br>
        <a href="<?= FRONT_ROOT ?>/Home/Index" class="btn btn-info" role="button" aria-pressed="true">ir al INDEX</a>





    </footer>



    <?php      include("jscss.php")            ?>

</body>

</html>