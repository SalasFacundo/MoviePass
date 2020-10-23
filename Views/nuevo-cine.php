<!DOCTYPE html>
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




            <div class="col-sm-4" id="caja1"></div>
            <div class="col-sm-4" id="caja2">


                <div class="row container-form">

                    <div class="col-sm-12">
                    <h2>NUEVA SUCURSAL</h2>

                    <div class="form-group">
                        <label for="">Nombre de la sucursal </label>
                        <input type="text" class="form-control" name="nombre" placeholder="Nombre de la sucursal...">
                    </div>

                    
                    
                   
                    <div class="form-group">
                        <label for="">Direccion - Nombre calle</label>
                        <input type="text" class="form-control" name="" placeholder="Nombre de la calle...">
                    </div>

                    <div class="form-group">
                        <label for="">Direccion - Numero calle</label>
                        <input type="Number" class="form-control" name="" placeholder="Numero de la calle...">
                    </div>

                    <div class="form-group">
                        <label for="">Precio de la entrada</label>
                        <input type="Number" class="form-control" name="" placeholder="Precio de la entrada...">
                    </div>

                    <div class="form-group">
                        <label for="">Cantidad de salas</label>
                        <input type="Number" class="form-control" name="" placeholder="Cantidad de salas...">
                    </div>


                    <button type="submit" class="btn btn-primary mb-2">ACEPTAR</button>
                    
                    
                    
                    
                    
                    
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