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

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- linkando com o css -->
    <link rel="stylesheet" href="<?= URL ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= URL ?>/css/login.css">
    <link rel="stylesheet" href="<?= URL ?>/css/esqueciSenha.css">
    <link rel="stylesheet" href="<?= URL ?>/css/home.css">
    <link rel="stylesheet" href="<?= URL ?>/css/footer.css">
    <link rel="stylesheet" href="<?= URL ?>/css/menu.css">
    <link rel="stylesheet" href="<?= URL ?>/css/perfil.css">
    <link rel="stylesheet" href="<?= URL ?>/css/sobre.css">
    <link rel="stylesheet" href="<?= URL ?>/css/notificacao.css">
    <link rel="stylesheet" href="<?= URL ?>/css/aluno.css">
    <link rel="stylesheet" href="<?= URL ?>/css/consulta.css">
    <link rel="stylesheet" href="<?= URL ?>/css/alterarSenha.css">
</head>
<body>
    <?php
    $rotas = new Rota();
    ?>
</body>
<!-- linkando js -->
<script src="<?= URL ?>/js/bootstrap.bundle.min.js"></script>
<script src="<?= URL ?>/js/formatacao.js"></script>
<script src="<?= URL ?>/js/consulta.js"></script>
</html>