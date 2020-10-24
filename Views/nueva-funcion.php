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

            <div class="col-sm-4" id="caja1"> </div>

            <div class="col-sm-4" id="caja2"> <!-- CAJA DE NUEVA FUNCION--->
               
            
            <div class="row container-form">

                    <div class="col-sm-12">
                    <h2>NUEVA FUNCION</h2>

                    <form action="">
                    <div class="form-group">
                        <label for=""> NUMERO DE SALA</label>
                        <input type="number" class="form-control" name="" placeholder="">
                    </div>

                    <div class="form-group">
                        <label for=""> ID PELICULA</label>
                        <input type="number" class="form-control" name="" placeholder="">
                    </div>
                    
                    <div class="form-group">
                        <label for=""> FECHA</label>
                        <input type="date" class="form-control" name="" placeholder="">
                    </div>

                    <div class="form-group">
                        <label for=""> HORA DE INICIO</label>
                        <input type="time" class="form-control" name="" placeholder="">
                    </div>

                    <div class="form-group">
                        <label for=""> HORA DE FINALIZACION</label>
                        <input type="time" class="form-control" name="" placeholder="">
                    </div>

                    
                    
                   
                    

                    <button type="submit" class="btn btn-primary mb-2">ACEPTAR</button>
                    
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