<?php require_once(VIEWS_PATH."header.php"); ?>


<main class="container-fluid adm-cine-container">

    <div class="row adm-cine-row">
        <div class="col-4"></div>
        <div class="col-4">

            <div class="row container-sala">

                <div class="col-12">

                            <h2 class="subrayadoh2">INGRESAR DATOS A LA SALA</h2>
                            <br>

                    <form action="">

                    <div class="form-group">
                            <label for="">ID SALA</label>
                            <select class="form-control">
                                <option value="">--Seleccione ID de la sala-</option>
                                <option value="">-----------------------------</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="">NOMBRE DE LA SALA</label>
                            <input type="text" class="form-control" name="" placeholder="">
                        </div>

                        <div class="form-group">
                            <label for="">CAPACIDAD</label>
                            <input type="number" min="0" max="250" class="form-control" name="" placeholder="">
                        </div>


                        <div class="form-group">
                            <label for="">PRECIO</label>
                            <input type="number" min="0" max="500" class="form-control" name="" placeholder="">
                        </div>

                        <div class="form-group">
                            <label for="">ID CINE</label>
                            <select class="form-control">
                                <option value="">--Seleccione el cine-</option>
                                <option value="">-----------------------------</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="">TIPO DE SALA</label>
                            <select class="form-control">
                                <option value="">--Seleccione el tipo de sala-</option>
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





<!---- 

Id_sala	        INT             NOT NULL AUTO_INCREMENT,
    Nombre      	VARCHAR(20)     NOT NULL,
    Capacidad     	INT             NOT NULL,
    Precio	   		DOUBLE		    NOT NULL,
    Id_cine	  		INT			    		,
    Id_tipo_sala	INT		

    --->