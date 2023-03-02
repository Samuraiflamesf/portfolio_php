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
                    <li class="nav-item border-bottom p-2 border-1 border-white" id="menu1">
                        <a class="nav-link" aria-current="page" href="?page=home">
                            _Olá
                        </a>
                    </li>
                    <li class="nav-item border-bottom p-2 border-1 border-white  " id="menu2">
                        <a class="nav-link " href="?page=projects">
                            _projetos

                        </a>
                    </li>
                    <li class="nav-item border-bottom p-2 border-2 border-danger " id="menu3">
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
        <div class="infoContainer">
            <div class="profileInfo" id="info"></div>
        </div>
        <div class="d-grid gap-2 row">
            <button type="button" 
            class="btn btn-primary btn-lg px-4 col">
                Download CV
            </button>
            <button type="button" 
            class="btn btn-outline-secondary btn-lg px-4 col">
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
<script src="../public/assets/js/jquery.min.js"></script>
<script src="../public/assets/js/axios.min.js"></script>
<script src="../public/assets/js/main.js"></script>