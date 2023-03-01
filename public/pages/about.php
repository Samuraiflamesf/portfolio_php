<header class="mb-auto">
    <nav class="navbar navbar-expand-md navbar-dark bg2 p-0">
        <div class="container-fluid">
            <a class="navbar-brand p-2 col order-first" href="<?php echo $link_mySite ?>">
                BernardoNogueira8
            </a>
            <!--Menu collaapse-->
            <button class="navbar-toggler  colorder-last" type="button" data-bs-toggle="collapse" data-bs-target="#menu" aria-controls="menu" aria-expanded="false">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse p-0" id="menu">
                <ul class="navbar-nav me-auto mb-lg-0 p-0 ">
                    <li class="nav-item border-bottom p-2 border-2 border-white" id="menu1">
                        <a class="nav-link" aria-current="page" href="?page=home">
                            _Olá
                        </a>
                    </li>
                    <li class="nav-item border-bottom p-2 border-1 border-white  " id="menu2">
                        <a class="nav-link " href="?page=projects">
                            _projetos

                        </a>
                    </li>
                    <li class="nav-item border-bottom p-2 border-1 border-danger " id="menu3">
                        <a class="nav-link active" href="?page=about">
                            _sobre-mim
                        </a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
</header>
<div class="container">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
        <div class="col-10 col-sm col-lg-6">
            <img src="../assets/img/Fotodoperfil.jpg" class="d-block mx-auto img-fluid" alt="Foto de Perfil">
        </div>
        <div class="col-lg-6">
            <h1 class="display-5 lh-1 mb-3 text-light text-md text-center">
                Bernardo Nogueira da Silva
            </h1>
            <p class="lead">
                Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular
                front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive
                prebuilt components, and powerful JavaScript plugins.
            </p>
            <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                <button type="button" class="btn btn-primary btn-lg px-4 me-md-2">
                    Download CV
                </button>
                <button type="button" class="btn btn-outline-secondary btn-lg px-4">
                    Entrar em contato
                </button>
            </div>
        </div>
    </div>

    <?php
    require_once('../public/pages/etc/skills.php');
    ?>
    <?php
    require_once('../public/pages/etc/roadmap.php');
    ?>
</div>

<?php
require_once('../public/pages/etc/footer.php');
?>