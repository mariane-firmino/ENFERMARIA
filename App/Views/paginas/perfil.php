<?php

// Verifica se o usuário está logado
if (!isset($_SESSION['usuario_id'])) {
    header('Location: ' . URL . '/login');
    exit;
}

// Inclui o menu
include '../App/Views/menu.php';

// Define a foto do usuário
if (!empty($_SESSION['usuario_foto'])) {
    $fotoPerfil = URL . '/uploads/perfis/' . $_SESSION['usuario_foto'];
} else {
    $fotoPerfil = URL . '/img/user.avif';
}

?>

<div class="layout">

    <!-- CABEÇALHO -->
    <div class="container-fluid px-4 pt-5 pb-3">

        <div class="row align-items-center">

            <!-- TÍTULO -->
            <div class="col-12 col-md-8 linha-verde">
                <h1>Perfil</h1>

                <p>
                    Bem-vindo,
                    <?= htmlspecialchars($_SESSION['usuario_nome'] ?? 'Usuário') ?>!
                </p>
            </div>

            <!-- LOGO -->
            <div class="col-12 col-md-4 text-center text-md-end mt-3 mt-md-0">
                <img
                    src="<?= URL ?>/img/logo_enfermaria.jpeg"
                    class="logo-home"
                    alt="Logo Enfermaria">
            </div>

        </div>

    </div>


    <!-- CARD DO PERFIL -->
    <div class="container pb-5">

        <div class="card-user">

            <div class="row g-4 align-items-center">

                <!-- FOTO E BOTÕES -->
                <div class="col-12 col-md-4 text-center">

                    <img
                        src="<?= $fotoPerfil ?>"
                        class="usuario-user img-fluid"
                        alt="Foto de perfil">

                    <div class="d-flex flex-column align-items-center gap-2 mt-4">

                        <a
                            class="btn btn-success button-user"
                            href="<?= URL ?>/usuarios/editarPerfil">
                            Editar Perfil
                        </a>

                        <a
                            class="btn btn-outline-success button-user"
                            href="<?= URL ?>/usuarios/alterarSenha">
                            Alterar Senha
                        </a>

                    </div>

                </div>


                <!-- INFORMAÇÕES DO USUÁRIO -->
                <div class="col-12 col-md-8">

                    <div class="row g-3">

                        <!-- NOME -->
                        <div class="col-12 campo-user">

                            <label class="label-user">
                                Nome
                            </label>

                            <p>
                                <?= htmlspecialchars($_SESSION['usuario_nome'] ?? '') ?>
                            </p>

                        </div>


                        <!-- E-MAIL -->
                        <div class="col-12 col-md-6 campo-user">

                            <label class="label-user">
                                E-mail
                            </label>

                            <p>
                                <?= htmlspecialchars($_SESSION['usuario_email'] ?? '') ?>
                            </p>

                        </div>


                        <!-- DATA DE NASCIMENTO -->
                        <div class="col-12 col-md-6 campo-user">

                            <label class="label-user">
                                Data de Nascimento
                            </label>

                            <p>

                                <?php
                                if (!empty($_SESSION['usuario_dt_nascimento'])) {
                                    echo date(
                                        'd/m/Y',
                                        strtotime($_SESSION['usuario_dt_nascimento'])
                                    );
                                } else {
                                    echo 'Não informado';
                                }
                                ?>

                            </p>

                        </div>


                        <!-- TELEFONE -->
                        <div class="col-12 col-md-6 campo-user">

                            <label class="label-user">
                                Telefone/Celular
                            </label>

                            <p>
                                <?= htmlspecialchars($_SESSION['usuario_telefone'] ?? 'Não informado') ?>
                            </p>

                        </div>


                        <!-- CPF -->
                        <div class="col-12 col-md-6 campo-user">

                            <label class="label-user">
                                CPF
                            </label>

                            <p>
                                <?= htmlspecialchars($_SESSION['usuario_cpf'] ?? '') ?>
                            </p>

                        </div>


                        <!-- SIAPE -->
                        <div class="col-12 col-md-6 campo-user">

                            <label class="label-user">
                                SIAPE
                            </label>

                            <p>
                                <?= htmlspecialchars($_SESSION['usuario_siape'] ?? '') ?>
                            </p>

                        </div>


                        <!-- FUNÇÃO -->
                        <div class="col-12 col-md-6 campo-user">

                            <label class="label-user">
                                Função
                            </label>

                            <p>
                                <?= htmlspecialchars($_SESSION['usuario_funcao'] ?? '') ?>
                            </p>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>


<?php include '../App/Views/footer.php'; ?>