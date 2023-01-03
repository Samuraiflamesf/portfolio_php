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
            <div class="col-lg-6 mx-auto">

                <div class=" d-grid gap-2 d-sm-flex justify-content-sm-center ">
                    <a type="button" class="btn btn-primary btn-lg px-4 " href="index.php?pag=<?php echo $menu2 ?>">
                        _projetos
                    </a>
                    <a type="button" class="btn btn-dark btn-lg px-4" href="index.php?pag=<?php echo $menu3 ?>">
                        _sobre-mim
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-10 mx-auto col-lg-5">
            <?php
            require_once('game.php');
            ?>
        </div>
    </div>





</div>
<script>
document.querySelector('menu1').classList.remove('')
</script>