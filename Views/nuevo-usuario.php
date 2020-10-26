<?php require_once(VIEWS_PATH."header.php"); ?>


<main class="container-fluid adm-cine-container">

    <div class="row adm-cine-row">
        <div class="col-4"></div>
        <div class="col-4">
            <div class="row container-form">
                <div class="col-12">
                    <h2 class="subrayadoh2">NUEVO USUARIO</h2>
                    <form action="">
                        <div class="form-group">
                            <label for="">NOMBRE </label>
                            <input type="text" class="form-control" name="" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="">APELLIDO </label>
                            <input type="text" class="form-control" name="" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="">EDAD</label>
                            <input type="number" class="form-control" name="" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="">TIPO DE DNI</label>
                            <select class="form-control" id="" name="">
                                    <option selected>Seleccionar tipo de dni</option>
                                    <option >LIBRETA ELECTORAL O DNI</option>
                                    <option >CARNET DE EXTRANJERIA</option>
                                    <option >CARNET DE EXTRANJERIA</option>
                                    <option >PASAPORTE</option>
                                    <option >OTROS</option>
                                </select>
                        </div>
                        <div class="form-group">
                            <label for="">NUMERO DE DNI</label>
                            <input type="number" class="form-control" name="" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="">EMAIL </label>
                            <input type="email" class="form-control" name="" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="">PASSWORD</label>
                            <input type="password" class="form-control" name="" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="">REPITA PASSWORD</label>
                            <input type="password" class="form-control" name="" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for=""> TIPO DE USUARIO</label>
                            <select class="form-control">
                                <option value="">--Seleccione tipo de usuario-</option>
                                <option value="">-----------------------------</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-form mb-3">ACEPTAR</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-4"></div>
    </div>

</main>

<?php         require_once(VIEWS_PATH."footer.php");         ?>