
<nav class="navbar navbar-expand-lg navbar-dark sticky-top "style="background-color:black">
<a id="logo" class="navbar-brand font-weight-bold" href="<?= FRONT_ROOT ?>/Home/AdminHome">ADMINISTRADOR CINE</a>   

  <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    
  <ul class="navbar-nav   ml-auto text-center" >

        <li class="nav-item  ">
        <a class="nav-link " href="<?= FRONT_ROOT ?>/Home/AdminHome">INGRESAR PELICULA </a>
        </li>


        <li class="nav-item">
        <a class="nav-link" href="<?= FRONT_ROOT ?>/Home/AdminCine">ADMINISTRAR CINE</a>
        </li>

        <li class="nav-item">
        <a class="nav-link" href="<?= FRONT_ROOT ?>/Home/AdminUsers">ADMINISTRAR USUARIOS</a>
        </li>

        <li class="nav-item">
        <a class="nav-link" href="<?= FRONT_ROOT ?>/Home/AdminEmpleados">ADMINISTRAR EMPLEADOS</a>
        </li>

    </ul>


    <form class="form-inline my-2 my-lg-0 ml-auto ">
    
    

    <a href="<?= FRONT_ROOT ?>/Login/Logout" class="btn btn-success" role="button" aria-pressed="true">cerrar sesion</a>

    </form>

    

  </div>
  
</nav>