
<?php      include("linkcss.php")            ?>
    <main class="container-fluid">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6">
                <div class="row container-formulario-registrar">
                    <div class="col-12 formulario-registro">
                        <h2>REGISTRARSE</h2>
                        <br>
                         <form>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="">NOMBRE</label>
                                    <input type="text" class="form-control" id="">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="">APELLIDO</label>
                                    <input type="text" class="form-control" id="">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputPassword4">EDAD</label>
                                    <input type="number" class="form-control" id="">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputPassword4">TIPO DE DNI</label>
                                    <input type="number" class="form-control" id="">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputPassword4">NUMERO DE DNI</label>
                                    <input type="number" class="form-control" id="">
                                </div>

                            </div>
                            <div class="form-group">
                                <label for="inputAddress">E-MAIL</label>
                                <input type="email" class="form-control" id="" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="inputAddress">PASSWORD</label>
                                <input type="password" class="form-control" id="" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="inputAddress">REPITA LA PASSWORD</label>
                                <input type="password" class="form-control" id="" placeholder="">
                            </div>
                            <button type="submit" class="btn btn-primary">Sign in</button>
                        </form>
                    </div>
                    <div class="col-12 formulario-registro-facebook">
                        <h3>REGISTRARSE CON FACEBOOK</h3>
                        <div class="social-inline">
                            <a href="#" class="btn btn-login-redes "><span class="icon-facebook"></span>  
                             FACEEBOOK</a> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-3">

            <a href="<?= FRONT_ROOT ?>Home/AdminHome" class="btn btn-success" role="button" aria-pressed="true">IR
                AL ADMINHOME</a>
        </div>
        </div>
    </main>
    <?php      include("jscss.php")            ?>
