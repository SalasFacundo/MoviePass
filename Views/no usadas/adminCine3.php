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

        <div class="row" id="caja0">




            <div class="col-sm-4" id="caja1">


            </div>
            <div class="col-sm-4" id="caja2">


                <div class="container-delete">
                    <h2>ELIMINAR SUCURSAL</h2>

                    <form action="#" method="post">

                        <div class="form-group">
                            <label for="">NUMERO DE ID</label>

                            <input type="number" class="form-control" name="id"
                                placeholder="Numero de id de cine a borrar">

                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <button type="submit" class="btn btn-primary">Aceptar</button>
                            </div>
                        </div>





                    </form>






                </div>




            </div>
            <div class="col-sm-4" id="caja3"></div>


        </div>

    </main>













    <footer>
        <br>
        <a href="<?= FRONT_ROOT ?>/Home/Index" class="btn btn-info" role="button" aria-pressed="true">ir al INDEX</a>





    </footer>



    <?php      include("jscss.php")            ?>

</body>

</html>