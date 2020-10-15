<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="<?php echo CSS_PATH;?>estilos.css" rel="stylesheet" type="text/css" media="all">

    <link href="<?php echo CSS_PATH;?>bootstrap.min.css" rel="stylesheet" media="screen">


</head>

<body>

    <header>

        <?php     include("nav-bar-admin.php");             ?>

    </header>


    <section>


        <div class="container-fluid" id="conteinerIngresar">


            <div class="row" id="caja">

                <div class="col-3">



                    <div class="row" id="filtro">

                        <h2>FILTRO</h2>
                        <div class="col-sm-12">

                            <form action="">
                                <br>
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Seleccionar genero</label>
                                    <select class="form-control" id="exampleFormControlSelect1">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Example select</label>
                                    <select class="form-control" id="exampleFormControlSelect1">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Example select</label>
                                    <select class="form-control" id="exampleFormControlSelect1">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>

                                <button type="submit" class="btn btn-primary">filtrar</button>




                            </form>


                        </div>

                    </div>



                </div>

                <div class="col-8">

            


                    <div class="row" id="card-pelicula">
                        <div class="col-sm-9">

                            <div class="card" id="card">
                                <img src="https://ep01.epimg.net/cultura/imagenes/2019/07/22/actualidad/1563791717_146941_1563803892_noticia_normal.jpg"
                                    class="card-img-top img-fluid " alt="Responsive image">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk of the card's content.</p>
                                </div>

                            </div>



                        </div>

                        <div class="col-sm-3"><?php                  ?>

                            <br>
                            <button type="button" class="btn btn-warning">Warning</button>
                            <br>
                            <br>
                            <button type="button" class="btn btn-danger">Danger</button>
                        </div>

                    </div>

                    <br>

                   







                </div>

                <div class="col-1">

                    <h2>col 3</h2>



                </div>

            </div>



        </div>




    </section>



    <footer>

        <a href="<?= FRONT_ROOT ?>/Home/Index" class="btn btn-info" role="button" aria-pressed="true">ir al INDEX</a>

        <br>



    </footer>








































    <script src="https://code.jquery.com/jquery.js"></script>
    <script src="<?php echo JS_PATH;?>bootstrap.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>

</body>

</html>