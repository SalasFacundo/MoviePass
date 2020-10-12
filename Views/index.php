<?php 

 include('nav-bar.php');

?>

<html>

<head>
     
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     
</head>
    
<div class="container-fluid">

    
    <section>

    <div class="row" id="caja1">
        
        <div class="col-2"><h2>columna 1</h2></div>

        <div class="col-8"> <h2>columna 2</h2></div>

        <div class="col-2"><h2>columna 3</h2></div>

        <div id="caja2">
                <form action="<?= FRONT_ROOT ?>/Admin/Add" method="post" >
                <p>
                    <label for="nombre">Nombre: </label>
                    <input type="text" name="id">
                </p>
                <p>
                    <label for="user">User Name</label>
                    <input type="text" name="user" min=0 max=5>
                </p>
                <p>
                    <label for="password">Contraseña:</label>
                    <input type="text" name="password" >
                </p>
                <button type="submit">Agregar</button>
                
            </form>

        </div>
        
        
    </div>



    <div class="row"id="caja2">
        
        <div class="col-3"><h2>columna 1</h2></div>

        <div class="col-6"> <h2>columna 2</h2></div>

        <div class="col-3"><h2>columna 3</h2></div>
        
    </div>
        


    </section>
    


    

    <footer></footer>




 </div>





</body>



</html>