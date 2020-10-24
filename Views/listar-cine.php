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

                <div class="row container-list" >

                    <div class="col-sm-12">

                        <h2>LISTA DE SUCURSALES</h2>

                        <table class="table table-striped ">
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


                                <tr>
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