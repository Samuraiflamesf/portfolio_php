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
                    <li class="nav-item border-bottom p-2 border-2 border-danger" id="menu1">
                        <a class="nav-link active" aria-current="page" href="?page=home">
                            _Olá
                        </a>
                    </li>
                    <li class="nav-item border-bottom p-2 border-1 border-white  " id="menu2">
                        <a class="nav-link " href="?page=projects">
                            _projetos

                        </a>
                    </li>
                    <li class="nav-item border-bottom p-2 border-1 border-white " id="menu3">
                        <a class="nav-link" href="?page=about">
                            _sobre-mim
                        </a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
</header>
<div class="container d-flex justify-content-center" id="box">
    <div class="row align-items-center">
        <div class=" col-lg-7 text-center">
            <h5 class="text-light">
                Olá a todos, Eu sou</h5>
            <h1 class="display-5 lh-1 mb-3 text-light db">
                Bernardo Nogueira,
            </h1>
            <h4 class="mb-3 text-blue db">
                > Analista Desenvolvedor PHP Jr <br>
                > Analista Requisitos
            </h4>
            <div class="col-lg-8 mx-auto">

                <div class=" d-grid gap-2 d-sm-flex justify-content-sm-center ">
                    <a type="button" class="btn btn-primary btn-lg px-4 me-md-2" href="?page=projects">
                        _projetos
                    </a>
                    
                    <a type="button" class="btn btn-dark btn-lg px-4 me-md-2" href="?page=about">
                        _sobre-mim
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-10 mx-auto col-lg-5 my-auto">
            <?php
            require_once('../public/pages/etc/game.php');
            ?>
        </div>
    </div>


</div>
<?php
require_once('../public/pages/etc/footer.php');
?>
<script src="../public/assets/js/game.js"></script>