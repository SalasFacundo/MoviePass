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

    <?php     include("nav-bar-admin.php");             ?>

     </header>


     <section>


        <div class="container-fluid">

        
            <div class="row">

                <div class="col-4"></div>
                <div class="col-4"><h2>ingresar peliculas</h2><br><br></div>
                <div class="col-4"></div>

            </div>



            <div class="row">

                <div class="col-4"></div>
                <div class="col-4">

                    <form action="">

                    <div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label">1</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label">2</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="">
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label">3</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label">4</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label">5</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="">
                        </div>
                    </div>  


                    <div class="form-group row">
                        <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Aplicar</button>
                        </div>
                    </div>





    


                    </form>



                </div>
                <div class="col-4"></div>

            </div>




            

        </div>





     </section>



     <footer>

     <a href="<?= FRONT_ROOT ?>/Home/Index" class="btn btn-info" role="button" aria-pressed="true">ir al INDEX</a>

     <br>

        

     </footer>








   






























     
        <script src="https://code.jquery.com/jquery.js"></script>
        <script src="<?php echo JS_PATH;?>bootstrap.min.js"></script>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

</body>
</html>