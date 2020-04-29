<!doctype html>
<html lang="fr">

<head>
    <title>L'EDITO</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body class="m-4">
    <header class="row">
        <div id="meteo" class="border col-lg-2 d-flex flex-wrap align-content-center justify-content-center col-sm-6 order-1 order-lg-1">
            <h3>METEO</h3>
        </div>
        <!-- titre edito -->
        <div id="titre" class="col-lg-8 text-center col-sm-12 order-lg-2">
            <a href="index.php" class="nav-link text-dark">
                <h1>L'EDITO</h1>
            </a>
            <h3 class="bg-danger col-3 offset-5" style="transform : rotate(-10deg);color:azure">L'info, la vraie</h3>
        </div>
        <!-- onglet contact -->
        <div id="connexion" class="border col-lg-2 order-sm-2 col-sm-6 order-2 order-lg-3">
            la redac: xxxxxxxxx@xxx.xx<br>
            Fax: xxxxxxxxxxxxxxx<br>
            Tel: xxxxxxxxxxxxxxx<br>
            <br>
            <p>Service-abonné:xxxxxxxxxxxxxxxxxxx</p>
            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModalCenter">S'abonner</button>
            <button type="button" class="btn btn-danger"><img src="img/iconeShare.png" alt="icon share"></button>
        </div>
        <div class="col-lg-11 text-right order-lg-4" id="date">
            <?php
            function quelleDate()
            {
                $date = date("d/m/Y");
                return $date;
            }
            echo quelleDate(); ?>
        </div>
    </header>

    <hr>
    <nav class="container-fluid navbar order-lg-5 navbar-expand-lg">
        <button class="navbar-toggler navbar-light" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <ul class="navbar-nav nav-justified container-fluid">
                <li class="nav-item active">
                    <a class="nav-link text-dark " href="international.php">International<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link text-dark " href="#!">France<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link text-dark " href="#!">Grand-Est<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link text-dark " href="#!">Economie<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link text-dark " href="#!">Culture<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link text-dark " href="#!">Le dossier de l'Edito<span class="sr-only">(current)</span></a>
                </li>
            </ul>
        </div>
    </nav>

    <section class="row mt-4">
        <aside class="border col-lg-2">
            <h4 class="mt-n3"><span class="badge badge-secondary badge-danger">Group</span></h4>
            <p>
                <h2><b>Lorem ipsum ...</h2></b><br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio dolor culpa incidunt natus nihil, voluptatibus quasi, vero vel est fugit itaque quisquam!
            </p>
            <img src="https://via.placeholder.com/150" class="img-fluid" alt="Responsive image">
            <p>
                <h2><b>Lorem ipsum ...</h2></b><br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio dolor culpa incidunt natus nihil, voluptatibus quasi, vero vel est fugit itaque quisquam!
            </p>
            <img src="https://via.placeholder.com/150" class="img-fluid" alt="Responsive image">
            <p>
                <h2><b>Lorem ipsum ...</h2></b><br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio dolor culpa incidunt natus nihil, voluptatibus quasi, vero vel est fugit itaque quisquam!
            </p>
        </aside>


        <article class="border col-lg-10">
            <h4 class="mt-n3"><span class="badge badge-secondary badge-danger">International</span></h4>
            <div class="d-flex w-100 h-50 ml-5 mt-5">
                <div class="d-flex w-50">
                    <img src="https://via.placeholder.com/600x300" class="img-fluid" alt="Responsive image">
                </div>
                <div class="align-items-start w-25 mx-auto text-justify">
                    <p>
                        <h2><b>Lorem ipsum dolor</h2></b><br>
                    </p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio dolor culpa incidunt natus nihil, voluptatibus quasi, vero vel est fugit itaque quisquam!Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio dolor culpa incidunt natus nihil, voluptatibus quasi, vero vel est fugit itaque quisquam!Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio dolor culpa incidunt natus nihil, voluptatibus quasi, vero vel est fugit itaque quisquam!Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio dolor culpa incidunt natus nihil, voluptatibus quasi, vero vel est fugit itaque quisquam!Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio dolor culpa incidunt natus nihil, voluptatibus quasi, vero vel est fugit itaque quisquam!<br><br>Lire la suite ...</p>
                </div>
            </div>
            <div class="d-flex flex-column text-justify ml-5 mt-5 mr-5">
                <p><b>
                        <h1>Lorem ipsum dolor</h1>
                    </b></p>
                <p>sit amet consectetur adipisicing elit. Optio dolor culpa incidunt natus nihil, voluptatibus quasi, vero vel est fugit itaque quisquam!Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio dolor culpa incidunt natus nihil, voluptatibus quasi, vero vel est fugit itaque quisquam!Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio dolor culpa incidunt natus nihil, voluptatibus quasi, vero vel est fugit itaque quisquam!Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio dolor culpa incidunt natus nihil, voluptatibus quasi, vero vel est fugit itaque quisquam!Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio dolor culpa incidunt natus nihil, voluptatibus quasi, vero vel est fugit itaque quisquam!sit amet consectetur adipisicing elit. Optio dolor culpa incidunt natus nihil, voluptatibus quasi, vero vel est fugit itaque quisquam!Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio dolor culpa incidunt natus nihil, voluptatibus quasi, vero vel est fugit itaque quisquam!Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio dolor culpa incidunt natus nihil, voluptatibus quasi, vero vel est fugit itaque quisquam!Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio dolor culpa incidunt natus nihil, voluptatibus quasi, vero vel est fugit itaque quisquam!Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio dolor culpa incidunt natus nihil, voluptatibus quasi, vero vel est fugit itaque quisquam! Optio dolor culpa incidunt natus nihil, voluptatibus quasi, vero vel est fugit itaque quisquam!Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio dolor culpa incidunt natus nihil, voluptatibus quasi, vero vel est fugit itaque quisquam!Loi, vero vel est fugit itaque quisquam!sit amet consectetur adipisicing elit. Optio dolor culpa incidunt natus nihil, voluptatibus quasi, vero vel est fugit itaque quisquam!Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio dolor culpa incidunt natus nihil, voluptatibus quasi, vero vel est fugit i<br><br></p>
                <p class="text-center">Lire la suite ...</p>
            </div>
        </article>
    </section>

    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content pr-5 pl-5">
                <div class="modal-body text-center">
                    <h5 class="modal-title font-weight-bold text-white" id="exampleModalCenteredLabel">Formulaire d'abonnement
                    </h5>
                </div>
                <div class="col-auto">
                    <label class="sr-only" for="inlineFormInputGroup"></label>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><img src="img/mail.png" alt=""></div>
                        </div>
                        <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="xxxx@xxxx.xxx">
                    </div>
                </div>
                <div class="col-auto">
                    <label class="sr-only" for="inlineFormInputGroup"></label>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><img src="img/asterisque.png" alt=""></div>
                        </div>
                        <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="*******">
                    </div>
                </div>
                <div class="col-auto">
                    <label class="sr-only" for="inlineFormInputGroup"></label>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><img src="img/asterisque.png" alt=""></div>
                        </div>
                        <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="*******">
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 ml-3 text-left">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheckPaypal">
                            <label class="form-check-label" for="gridCheckPaypal">
                                Paypal
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheckCB">
                            <label class="form-check-label" for="gridCheckCB">
                                CB Visa
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck">
                            <label class="form-check-label" for="gridCheck">
                                Mastercard
                            </label>
                        </div>
                    </div>
                    <div class="input-group-prepend col-5 mr-n3">
                        <div class="btn-group">
                            <div type="button" class="btn btn-muted">choix <br> abonnement</div>
                            <button type="button" class="btn btn-light dropdown-toggle dropdown-toggle-split" id="dropdownMenuReference" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-reference="parent">
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuReference">
                                <a class="dropdown-item" href="#">Quotidient</a>
                                <a class="dropdown-item" href="#">Mensuel</a>
                                <a class="dropdown-item" href="#">Annuel</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="form-check col-8">
                        <input class="form-check-input" type="checkbox" id="gridCheck">
                        <label class="form-check-label" for="gridCheck">
                            Remember me
                        </label>
                    </div>
                    <button type="button" class="d-flex w-100 mx-auto mt-2 justify-content-center align-items-center btn btn-success">Soumettre</button>
                </div>
            </div>
        </div>
    </div>

    <div class="d-flex justify-content-between align-items-center w-100">
        <div class="text-center mt-4 w-100">
            <div class="d-flex img-size">
                <img src="https://www.kindpng.com/picc/b/102/1022212.png" class="img-fluid" alt="Responsive image" width="100">
            </div>
            <h1>L'enquête de Yan peters:</h1><br>
            <p>
                <h4>Ou est passé le grisbi chez total ?</h4>
            </p>
            <p class="text-justify">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas expedita asperiores nemo quibusdam repellat dolorum odit hic. Eveniet, doloribus. Perferendis atque, tempora pariatur porro vitae vero quidem ut iure quam aspernatur esse repellat deserunt fuga accusantium minima rem debitis ex, quis ducimus quo perspiciatis? Aut dolore numquam accusantium iusto qui?m ipsum dolor sit amet consectetur adipisicing elit. Voluptas expedita asperiores nemo quibusdam repellat dolorum odit hic. Eveniet, doloribus. Perferendis atque, tempora pariatur porro vitae vero quidem ut iure quam aspernatur esse repellat deserunt fuga accusantium minima rem debitis ex, quis ducimus quo perspiciatis? Aut dolorm ipsum dolor sit amet consectetur adipisicing elit. Voluptas expedita asperiores nemo quibusdam repellat dolorum odit hic. Eveniet, doloribus. Perferendis atque, tempora pariatur porro vitae vero quidem ut iure quam aspernatur esse repellat deserunt fuga accusantium minima rem debitis ex, quis ducimus quo perspiciatis? Aut dolor
            </p>
            <p class="text-left">Lire la suite ...</p>
        </div>
        <div class="ml-5 mr-n3 w-100 d-block">
            <iframe src="https://www.youtube.com/embed/s5Bc2qHa-HY" height="400" width="100%" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </div>
    <footer>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>