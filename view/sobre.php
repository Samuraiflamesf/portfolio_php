<?php
require_once('../int/conexao.php');

?>

<div>
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

</div>
<?php
        require_once('skills.php');
        ?>
<?php
        require_once('roadmap.php');
        ?>