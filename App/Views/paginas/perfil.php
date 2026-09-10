<?php
    if(!isset($_SESSION['usuario_id'])){
        header('Location: '.URL.'/login');
        exit;
    }

    include '../App/Views/menu.php';
?>
<div class="layout">
    <div class="container-fluid ps-4 pe-4 pt-5 pb-3">
        <div class="row align-items-start">

            <div class="col-8 linha-verde">
                <h1>Perfil</h1>
                <p>Bem-Vindo, <?= $_SESSION['usuario_nome'];?>!</p>
            </div>

            <div class="col-4 text-end">
                <img src="<?=URL?>/img/logo_enfermaria.jpeg" class="logo-home" alt="Logo">
            </div>

        </div>
    </div>

    <div class="container">
        <div class="card-user">
            <div class="row">
                <div class="col-12 col-md-4 text-center">
                    <img src="<?=URL?>/img/user.avif" class="usuario-user" alt="Usuário">
                    <br><br>

                    <a class="btn btn-success button-user" href="<?= URL ?>/usuarios/editarPerfil">
                        Editar Perfil
                    </a>

                    <br><br>
                    <a class="btn btn-outline-success button-user" href="<?= URL ?>/usuarios/alterarSenha">
                        Alterar Senha
                    </a>

                </div>


                <div class="col-12 col-md-8">

                    <div class="row">
                        <div class="col-12 campo-user">
                            <label class="label-user">Nome</label>
                            <p><?= $_SESSION['usuario_nome'];?></p>
                        </div>

                        


                        <div class="col-12 col-md-6 campo-user">
                            <label class="label-user">E-mail</label>
                            <p><?= $_SESSION['usuario_email'];?></p>
                        </div>


                        <div class="col-12 col-md-6 campo-user">
                            <label class="label-user">Data de Nascimento</label>
                            <p><p><?= date('d/m/Y', strtotime($_SESSION['usuario_dt_nascimento'])) ?></p></p>
                        </div>


                        <div class="col-12 col-md-6 campo-user">
                            <label class="label-user">Telefone/Celular</label>
                            <p><?= $_SESSION['usuario_telefone'];?></p>
                        </div>



                        <div class="col-12 col-md-6 campo-user">
                            <label class="label-user">CPF</label>
                            <p><?= $_SESSION['usuario_cpf'];?></p>
                        </div>



                        <div class="col-12 col-md-6 campo-user">
                            <label class="label-user">SIAPE</label>
                            <p><?= $_SESSION['usuario_siape'];?></p>
                        </div>



                        <div class="col-12 col-md-6 campo-user">
                            <label class="label-user">Função</label>
                            <p>Nome da função</p>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>
</div>
<?php include '../App/Views/footer.php' ?>