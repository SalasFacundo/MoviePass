<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="<?php echo CSS_PATH;?>estilos.css" rel="stylesheet" type="text/css" media="all">

    <link href="<?php echo CSS_PATH;?>bootstrap.min.css" rel="stylesheet" media="screen">


</head>

<body>


    <header>

        <?php     include("nav-bar-admin.php");  ?>

    </header>


    <section>


        <div class="container-fluid" id="conteinerCine">





            <div class="row" style="background-color: blue;">


                <div class="col-sm-12" style="text-align: center;">
                    <h3>TITULO</h3>
                </div>

                <div class="col-sm-4"></div>
                <div class="col-sm-4" style="text-align: center;">
                    <h3>fromulario</h3>
                </div>
                <div class="col-sm-4"></div>



            </div>







            <div class="row" style="background-color: yellow;">

                <div class="col-sm-12" style="text-align: center;">
                    <h3>moficicar cine</h3>
                </div>

                <div class="col-sm-4" ></div>
                <div class="col-sm-4" style="text-align: center;">
                    <h3>fromulario</h3>
                </div>
                <div class="col-sm-4" ></div>




            </div>

            <div class="row" style="background-color: orange;"> 
            <div class="col-sm-12" style="text-align: center;">
                    <h3>moficicar sala</h3>
                </div>

                <div class="col-sm-4" ></div>
                <div class="col-sm-4" style="text-align: center;">
                    <h3>fromulario</h3>
                </div>
                <div class="col-sm-4" ></div>
         
         
         
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