<?php
require "../bootstrap.php"
?>
<!DOCTYPE html>
<html lang="pt">

<head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php echo $nome_sistema ?>
    </title>
    <!-- Ícone e Nome do site -->
    <link rel="shortcut icon" href="FlameBox.ico">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="../vendor/bootstrap/bootstrap.min.css">
    <script type="text/javascript" src="../vendor/bootstrap/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="../vendor/bootstrap/jquery-3.6.0.min.js"></script>
    <!-- Animate Custom -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <!-- Styles Custom -->
    <link rel="stylesheet" href="../public/assets/css/style.css">
    <link rel="stylesheet" href="../public/assets/css/repor.css">
    <link rel="stylesheet" href="../public/assets/css/roadmap.css">
    <!-- Font Awesome -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid">
        <?php
        try {
            require load();
        } catch (Exception $th) {
            echo $th->getMessage();
        }

        ?>
    </div>
</body>

</html>
