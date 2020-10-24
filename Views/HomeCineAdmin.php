<!DOCTYPE html>
<html lang="en">



<?php


    if(isset($_POST["genero"]))    
    {

        $genero_filtro=$_POST["genero"];
        $fecha_filtro=$_POST["fecha"];
        $fecha_action=$_POST["fecha_action"];


        
    }        
    else
    {
        $fecha_action="off";
        $genero_filtro="Todas";
    }
        
        

?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php      include("linkcss.php")            ?>
   


</head>

<body>

    <header>

        <?php     include("nav-bar-admin.php");             ?>

    </header>


    
    <main class="container-fluid" id="inicio" >
    
     
    
    </main>













    <footer>
    <br>
        <a href="<?= FRONT_ROOT ?>/Home/Index" class="btn btn-info" role="button" aria-pressed="true">ir al INDEX</a>

       



    </footer>


    
    <?php      include("jscss.php")            ?>

</body>

</html>