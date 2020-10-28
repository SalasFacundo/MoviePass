

  <nav class="navbar navbar-expand-lg navbar-light bg-light" id="menu" >

<a id="logo" class="navbar-brand font-weight-bold" href="<?= FRONT_ROOT ?>/Home/Inicio">ADMINISTRADOR CINE</a>

<button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarSupportedContent">

    <ul class="navbar-nav   ml-auto text-center">
        
        <li class="nav-item  ">
            <a class="nav-link " href="<?= FRONT_ROOT ?>/Home/Inicio">INICIO </a>
        </li>


        <li class="nav-item  ">
            <a class="nav-link " href="<?= FRONT_ROOT ?>/Home/AdminHome">INGRESAR PELICULA </a>
        </li>


        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                SUCURSALES
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="<?= FRONT_ROOT ?>/Home/AdminCine">Ingresar nuevo cine</a>
                <a class="dropdown-item" href="<?= FRONT_ROOT ?>/Home/AdminCine2">Modificar cine</a>
                <a class="dropdown-item" href="<?= FRONT_ROOT ?>/Home/AdminCine3">Eliminar cine</a>
                <a class="dropdown-item" href="<?= FRONT_ROOT ?>/Home/AdminCine4">Lista de cines</a>
            </div>
        </li>

        <li class="nav-item dropdown  ">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                SALAS
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="<?= FRONT_ROOT ?>/Home/AdminIngresarDatoSalas">Ingresar datos a la sala</a>
                <a class="dropdown-item" href="<?= FRONT_ROOT ?>/Home/AdminListarSalas">Lista de salas</a>
                
            </div>

        </li>
        
        <li class="nav-item dropdown  ">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                CARTELERA
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="<?= FRONT_ROOT ?>/Home/AdminNuevaFuncion">Ingresar nueva funcion</a>
                <a class="dropdown-item" href="">Lista de funciones</a>
                
            </div>

        </li>


        

        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                 USUARIOS
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="<?= FRONT_ROOT ?>/Home/AdminAgregarUsuario">Ingresar nuevo usuario</a>
                <a class="dropdown-item" href="<?= FRONT_ROOT ?>/Home/AdminModificarUsuario">Modificar usuario</a>
                <a class="dropdown-item" href="">Eliminar usuarios</a>
                <a class="dropdown-item" href="<?= FRONT_ROOT ?>/Home/AdminListarUsuarios">Lista de usuarios</a>
            </div>
        </li>

        

        
        
        

    </ul>

    <!--
    <form class="form-inline my-2 my-lg-0 ">



        <a href="<?= FRONT_ROOT ?>/Login/Logout" class="btn btn-success" role="button" aria-pressed="true">cerrar
            sesion</a>

    </form>

    -->



</div>

</nav>
