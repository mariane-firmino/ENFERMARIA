<?php
session_start();
include "./../App/configuracao.php";
include "./../App/autoload.php";

$db = new Database;
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=APP_NOME?></title>
    <!-- linkando com o css -->
    <link rel="stylesheet" href="<?= URL ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= URL ?>/css/login.css">
</head>
<body>
    <?php
    $rotas = new Rota();
    ?>
</body>
<!-- linkando js -->
<script src="<?= URL ?>/js/bootstrap.bundle.min.js"></script>
<script src="<?= URL ?>/js/formatacao.js"></script>
</html>