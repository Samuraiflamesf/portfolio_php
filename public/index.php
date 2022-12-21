<?php
require_once('../int/conexao.php');

//Menus do Painel
$menu1 = 'home';
$menu2 = 'projetos';
$menu3 = 'sobre';


//Recuperar e direcionar pagina 
if (@$_GET['pag'] == "") {
    $pag = $menu1;
} else {
    $pag = @$_GET['pag'];
}
?>
<!DOCTYPE html>
<html lang="pt">

<head>
    <!-- Titulo -->
    <title>
        <?php echo $nome_sistema ?>
    </title>
    <!-- Meta tags Obrigatórias -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="../assets/vendor/bootstrap/bootstrap.min.css">
    <script type="text/javascript" src="../assets/vendor/bootstrap/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="../assets/vendor/bootstrap/jquery-3.6.0.min.js"></script>
    <!-- Animate Custom -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <!-- Styles Custom -->
    <link rel="stylesheet" href="../assets/css/styles.css">
    <link rel="stylesheet" href="../assets/css/roadmap.css">
    <link rel="stylesheet" href="../assets/css/game.css">
    <!-- Font Awesome -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <!-- Ícone e Nome do site -->
    <link rel="shortcut icon" href="FlameBox.ico">
</head>

<body class="container-fluid p-0">
    <header class="mb-auto ">
        <nav class="navbar navbar-expand-md navbar-dark bg2 p-0">
            <div class="container-fluid">
                <a class="navbar-brand p-2 col order-first" href="https://bernardonogueira8.netlify.app/">
                    BernardoNogueira8
                </a>
                <!--Menu collaapse-->
                <button class="navbar-toggler  colorder-last" type="button" data-bs-toggle="collapse" data-bs-target="#menu" aria-controls="menu" aria-expanded="false">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse p-0" id="menu">
                    <ul class="navbar-nav me-auto mb-lg-0 p-0 ">
                        <li class="nav-item border-bottom p-2 border-2 border-danger" id="menu1">
                            <a class="nav-link active" aria-current="page" href="index.php?pag=<?php echo $menu1 ?>">
                                _Olá
                            </a>
                        </li>
                        <li class="nav-item border-bottom p-2 border-1 border-white  " id="menu2">
                            <a class="nav-link " href="index.php?pag=<?php echo $menu2 ?>">
                                _projetos

                            </a>
                        </li>
                        <li class="nav-item border-bottom p-2 border-1 border-white " id="menu3">
                            <a class="nav-link" href="index.php?pag=<?php echo $menu3 ?>">
                                _sobre-mim
                            </a>
                        </li>

                    </ul>
                </div>
        </nav>
    </header>

    <div class="container-fluid" id="container">
        <?php
        require_once('../view/' . $pag . '.php');
        ?>
    </div>

    <?php
    if (@$_GET['pag'] == "projetos") {
        //Pag 2
    ?>
        <script>
            //Outros
            document.querySelector('#menu1').classList.remove('border-2')
            document.querySelector('#menu1').classList.remove('border-danger')
            document.querySelector('#menu1 a').classList.remove('active')
            document.querySelector('#menu3').classList.remove('border-2')
            document.querySelector('#menu3').classList.remove('border-danger')
            document.querySelector('#menu3 a').classList.remove('active')
            //Selecionado
            document.querySelector('#menu2').classList.remove('border-1')
            document.querySelector('#menu2').classList.remove('border-white')
            document.querySelector('#menu2').classList.add('border-2')
            document.querySelector('#menu2').classList.add('border-danger')
            document.querySelector('#menu2 a').classList.add('active')
            console.log('feito');
        </script>
    <?php
    } ?>
    <?php
    if (@$_GET['pag'] == "sobre") {
        //Pag 2
    ?>
        <script>
            //Outros
            document.querySelector('#menu1').classList.remove('border-2')
            document.querySelector('#menu1').classList.remove('border-danger')
            document.querySelector('#menu1 a').classList.remove('active')
            document.querySelector('#menu2').classList.remove('border-2')
            document.querySelector('#menu2').classList.remove('border-danger')
            document.querySelector('#menu2 a').classList.remove('active')
            //Selecionado
            document.querySelector('#menu3').classList.remove('border-1')
            document.querySelector('#menu3').classList.remove('border-white')
            document.querySelector('#menu3').classList.add('border-2')
            document.querySelector('#menu3').classList.add('border-danger')
            document.querySelector('#menu3 a').classList.add('active')
            console.log('feito');
        </script>
    <?php
    } ?>



    <!-- Rodapé -->
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 m-0 border-top bg2 fixed-bottom">
        <div class="col d-flex align-items-center">
            <span class=" ms-4 text-muted">© 2022 Bernardo Nogueira</span>
        </div>

        <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
            <li class="ms-3">
                <a class="text-muted text-decoration-none" href="https://www.instagram.com/bernardo.nogueira8/">
                    <i class="ri-instagram-line ri-xl"></i>
            </li>
            <li class="ms-3">
                <a class="text-muted text-decoration-none" href="https://www.linkedin.com/in/bernardo-nogueira8/">
                    <i class="ri-linkedin-fill ri-xl"></i>
            </li>
            <li class="ms-3 mx-4">
                <a class="text-muted text-decoration-none" href="https://github.com/Samuraiflamesf/">
                    <i class="ri-github-fill ri-xl"></i>
            </li>
        </ul>
    </footer>
</body>

</html>