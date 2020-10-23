<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php      include("linkcss.php")            ?>
    

    <?php 

    use DAO\CineDao as CineDao;
    $cineDao = new CineDao();

    $todosLosCines = $cineDao->getAll()
    
    ?>

</head>

<body>


    <header>

        <?php     include("nav-bar-admin.php");  ?>

    </header>


    <section>


        <div class="container-fluid" id="conteinerCine">


            
        <div class="row">
            <div class="col-sm-12" style="text-align: center;">
                <h3>LISTAR CINES</h3>
            </div>

            <div class="col-sm-4"></div>
            <div class="col-sm-4" style="text-align: center;">

                <table class="table table-striped table-dark">
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
                            <?php 
                        
                        if(isset($todosLosCines)){
                            foreach ($todosLosCines as $cine){ 
                                   
                                echo "<tr>
                                <td>". $cine->getIdCine()."</td>
                                 <td>" .$cine->getNombreCine() ."</td>
                                  
                                  <td>". $cine->getSalas()."</td>
                                  <td>". $cine->getDireccion()."</td>
                                  <td>". $cine->getPrecio() ."</td>

                                 </tr>";
                            }
                        }?>

                        </tr>



                    </tbody>
                </table>








            </div>
            <div class="col-sm-4"></div>



        </div>

        
       


        





        </div>




    </section>



    <footer>

        <a href="<?= FRONT_ROOT ?>/Home/Index" class="btn btn-info" role="button" aria-pressed="true">ir al INDEX</a>

        <br>






    </footer>



































    <?php      include("jscss.php")            ?>

</body>

</html>