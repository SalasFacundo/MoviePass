<?php 

 include('nav-bar.php');

?>

<html>

<head>
     
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     
</head>
            <h2>Agregar Admin</h2>
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
                <br>
            <h2>Borrar Admin</h2>
            <form action="<?= FRONT_ROOT ?>/Admin/removeAdmin" method="post" >
                
                <p>
                    <label for="user">User Name</label>
                    <input type="text" name="user" min=0 max=5>
                </p>

                <button type="submit">Borrar</button>
                
            </form>
            
            <h2>Agregar Cine</h2>
                <form action="<?= FRONT_ROOT ?>/Cine/Add" method="post" >
                <p>
                    <label for="nombre">Nombre: </label>
                    <input type="text" name="nombre">
                </p>
                <p>
                    <label for="id">Id del Cine:</label>
                    <input type="text" name="id" >
                </p>
                <button type="submit">Agregar</button>
                
                </form>
                <br>
            
            <h2>Borrar Cine</h2>
            <form action="<?= FRONT_ROOT ?>/Cine/removeCine" method="post" >
                
                <p>
                    <label for="user">Ingrese el ID:</label>
                    <input type="number" name="user" min=0>
                </p>

                <button type="submit">Borrar</button>
                
            </form>
            <h2>Agregar sala a un cine</h2>
            <form action="<?= FRONT_ROOT ?>/Cine/addSalaToCine" method="post" >

                <p>
                    <label for="user">Elija el cine:</label>
                    <select name="cineId" id="cine">
                        <option value="1">Cinema1</option>
                        <option value="2">Cinema2</option>
                        <option value="3">Otro cine mas grande</option>
                    </select>
                </p>
                <p>
                    <h4>Descripcion de la sala: </h4>
                    <label for="numeroSala">Numero de Sala:</label>
                    <input type="number" name="numeroSala" min=0>
                    <br>
                    <label for="capacidad">Capacidad:</label>
                    <input type="number" name="capacidad" min=0>

                </p>

                <button type="submit">Agregar Sala</button>
                
            </form>

            <h2>VER SALAS DE UN CINE</h2>
            <form action="<?= FRONT_ROOT ?>/Cine/showSalasFromCineId" method="post">
                <label for="idCine">Cine: </label>
                <input type="number" name="idCine">
                <button>Mostrar Salas</button>
                <br>
            </form>

        
    

    <footer></footer>





</body>



</html>