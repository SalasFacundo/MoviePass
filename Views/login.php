
<?php      include("linkcss.php")?>

<main class="container-fluid">

        <div class="row">
            <div class="col-4"></div>
            <div class="col-4">
                <div class="container-formulario-login">
                    <h3>INICIAR SESION</h3>
                    <br>
                    <form>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp"> 
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <br><br>
                        <div class="form-group">
                            <span>No tienes cuenta?</span><a href="<?= FRONT_ROOT ?>Login/Registrarse"> Registrate</a>
                        </div>
                        <br>
                        <h4>O</h4>
                        <br>
                        <div class="social-inline">
                        <a href="#" class="btn btn-login-redes "><span class="icon-facebook"></span>  
                        INICIAR SESION CON FACEEBOOK</a>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-4">
                <a href="<?= FRONT_ROOT ?>Home/AdminHome" class="btn btn-success" role="button" aria-pressed="true">IR AL ADMINHOME</a>
            </div>
        </div>

    </main>
    <?php      include("jscss.php")            ?>
