<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

   

    <link href="<?php echo CSS_PATH;?>estilos.css" rel="stylesheet" type="text/css" media="all">

    <link href="<?php echo CSS_PATH;?>bootstrap.min.css" rel="stylesheet" media="screen">


</head>
<body>
    
    

     <header> </header>

     
    
     <section>


     <div class="container-fluid" id="formulario-index">

    
        <div class="row">

        <div class="col-4"></div>

        <div  id="noUser" class="col-4">
        
        <!-- <?= FRONT_ROOT ?>/LoginAdmin/Login -->



        <form action="<?= FRONT_ROOT ?>Login/Login" method="post" >
                        <div class="form-group">
                            <label >Usuario</label>
                            <input type="text" class="form-control" name="adminName"  >
                        
                        </div>
                        <div class="form-group">
                            <label >Password</label>
                            <input type="text" class="form-control" name="pass" >
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Enviar</button>
        </form>

        <br>
        <br>
        <br>
        <a  href="">No tienes usuario</a>

       
    

    
    
    
    
        </div>

        <div class="col-4"></div>

        </div>


        <div class="row">

        <div class="col-2"></div>

        <div class="col-8"> </div>

        <div class="col-2">

            <a href="<?= FRONT_ROOT ?>Home/AdminHome" class="btn btn-success" role="button" aria-pressed="true">IR AL ADMINHOME</a>
        
        
            </div>

        </div>



    </div>




     </section>

    
               


     <footer></footer>








   






























     
        <script src="https://code.jquery.com/jquery.js"></script>
        <script src="<?php echo JS_PATH;?>bootstrap.min.js"></script>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

</body>
</html>