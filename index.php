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

<!-- meteo -->

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
            <p>Service-abonné:xxxxxxxxxx</p>
            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModalCenter">S'abonner</button>
            <button type="button" class="btn btn-danger"><img src="img/iconeShare.png" alt="icon share"></button>
        </div>

        <!-- date -->
        <div class="col-lg-12 text-right order-lg-4" id="date">
            <div class="date">
                <?php
                function quelleDate()
                {
                    $date = date("d/m/Y");
                    return $date;
                }
                echo quelleDate(); ?>
            </div>
            <hr class="ml-5 mr-5 hidden-hr">
        </div>

        <!-- navbar -->
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
    </header>

    <!-- group section -->
    <section class="row mt-3">
        <div class="col-lg-3 p-1 d-none d-lg-block">
            <aside class="border col-lg-12 h-100" style="border-radius: 25px">
                <h4 class="mt-n3"><span class="badge badge-secondary badge-danger">Group</span></h4>
                <h3>Lorem ipsum...</h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae molestias numquam odit aspernatur consequuntur
                </p>
                <img class="img-fluid" src="https://via.placeholder.com/250x250" alt="">
                <h3>Lorem ipsum...</h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae molestias numquam odit aspernatur consequuntur
                </p>
                <img class="img-fluid" src="https://via.placeholder.com/250x250" alt="">
                <h3>Lorem ipsum...</h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae molestias numquam odit aspernatur consequuntur
                </p>
            </aside>
        </div>

        <!-- international section -->
        <div class="col-lg-9 p-1">
            <article class="border col-lg-12 h-100" style="border-radius: 25px">
                <h4 class="mt-n3"><span class="badge badge-secondary badge-danger">International</span></h4>
                <img class="float-left m-3 img-fluid" src="https://via.placeholder.com/500x350" alt="">
                <div class="mt-3">
                    <h3>Lorem ipsumdolor</h3>
                    <p class="clearfix text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit provident repudiandae neque quam ad architecto minus in qui porro deleniti! Dolores corrupti ad fuga itaque, ipsam mollitia culpa veniam consectetur id earum et adipisci. Possimus, aperiam molestiae, similique nulla debitis totam architecto cum qui consectetur et amet nemo quaerat minus aspernatur. Nostrum non recusandae officia impedit hic laudantium minima voluptatem, voluptates mollitia ad quibusdam enim ipsa alias. Ipsum, at. Eaque, magnam error facere dolor nemo fuga laborum alias asperiores natus iure quaerat mollitia voluptate labore veniam aliquam et? Dignissimos eius labore aut consectetur aliquid cumque vel aperiam fugit necessitatibus asperiores.<br><br>Lire la suite...</p>
                    <div class="ml-3">
                        <h3>Lorem ipsumdolor</h3>
                        <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit provident repudiandae neque quam ad architecto minus in qui porro deleniti! Dolores corrupti ad fuga itaque, ipsam mollitia culpa veniam consectetur id earum et adipisci. Possimus, aperiam molestiae, similique nulla debitis totam architecto cum qui consectetur et amet nemo quaerat minus aspernatur. Nostrum non recusandae officia impedit hic laudantium minima voluptatem, voluptates mollitia ad quibusdam enim ipsa alias. Ipsum, at. Eaque, magnam error facere dolor nemo fuga laborum alias asperiores natus iure quaerat mollitia voluptateipsam mollitia culpa veniam consectetur id earum et adipisci. Possimus, aperiam molestiae, similique nulla debitis totam architecto cum qui consectetur et amet nemo quaerat minus aspernatur. Nostrum non recusandae officia impedit hic laudantium minima voluptatem, voluptates mollitia ad quibusdam enim ipsa alias. Ipsum, at. Eaque, magnam error facere dolor n labore veniam aliquam et? Dignissimos eius labore aut consectetur aliquid cumque vel aperiam fugit necessitatibus asperiores.</p>
                        <p class="text-center">Lire la suite...</p>
                    </div>
                </div>
            </article>
        </div>
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
                        <input type="password" class="form-control" id="inlineFormInputGroup" placeholder="*******">
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

    <!-- footer & video -->
    <footer class="row">
        <div class="col-7 d-none d-lg-block">
            <img src="https://www.kindpng.com/picc/b/102/1022212.png" alt="" width="100" class="float-left">
            <h3 class="text-center mt-5 p-5">L'enquête de Yan peters</h3>
            <div class="ml-5">
                <h5 class="clearfix text-center text-justify margin-top-50%">Où est passé le Grisbi chez Total</h5><br>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente necessitatibus, non unde dignissimos esse adipisci, sed nemo veniam molestias voluptatem nesciunt ut ipsa quaerat maiores itaque alias quibusdam minima! Aliquid quaerat nesciunt ex officia libero, sint reprehenderit, quae ullam quo ad, facilis voluptas. Earum harum accusamus provident in itaque delectus facilis cum distinctio nesciunt, fugiat culpa labore tempora? Molestias libero fugiat distinctio exercitationem minima quam expedita recusandae neque repellendus tempore harum dignissimos, eaque explicabo molestiae rerum amet provident commodi. Incidunt numquam totam ipsum hic, nobis doloribus mollitia blanditiis nesciunt, fugiat culpa labore tempora? Molestias libero fugiat distinctio exercitationem minima quam expedita recusandae neque repellendus tempore harum dignissimos, eaque explicabo molestiae.</p>
                <p>Lire la suite...</p>
                </a>
            </div>
        </div>

        <div class="col-lg-4 offset-lg-1 mt-lg-5 col-sm-12">
            <iframe width="100%" height="400" src="https://www.youtube.com/embed/s5Bc2qHa-HY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>