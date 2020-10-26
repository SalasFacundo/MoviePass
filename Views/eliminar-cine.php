<<<<<<< HEAD
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

                <div class="row container-delete">

                    <div class="col-sm-12">

                        <h2>ELIMINAR SUCURSAL</h2>

                        <form action="#" method="post">

                            <div class="form-group">
                                <label for="">NUMERO DE ID</label>
                                

                                <!--- CAMBIAR A UN SELECT QUE MUESTRE LOS NOMBRES DE LOS CINES--->
                                <input type="number" class="form-control" name="id"
                                    placeholder="Numero de id de cine a borrar">

                            </div>
                            <div class="form-group">

                                <button type="submit" class="btn btn-primary">Aceptar</button>

                            </div>





                        </form>


                    </div>


=======
<?php require_once(VIEWS_PATH."header.php"); ?>


<main class="container-fluid adm-cine-container">

    <div class="row adm-cine-row">
        <div class="col-4"><h2>PAGINA A ELIMNINAR</h2></div>
        <div class="col-4">
            <div class="row container-delete">
                <div class="col-12">
                    <h2>ELIMINAR SUCURSAL</h2>
                    <form action="#" method="post">
                        <div class="form-group">
                            <label for="">NUMERO DE ID</label>
                            <input type="number" class="form-control" name="id"
                                placeholder="Numero de id de cine a borrar">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Aceptar</button>
                        </div>
                    </form>
>>>>>>> Nico
                </div>
            </div>
        </div>
        <div class="col-4"></div>
    </div>

</main>

<?php         require_once(VIEWS_PATH."footer.php");         ?>