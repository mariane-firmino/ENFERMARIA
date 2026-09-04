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
                <h1>Cadastro de Aluno</h1>
                <p>Faça o cadastro dos alunos nessa página.</p>
            </div>
            <div class="col-4 text-end">
                <img src="<?=URL?>/img/logo_enfermaria.jpeg" class="logo-home" alt="Logo">
            </div>
        </div>
    </div>

    <main class="container enf-conteudo">
        <div class="row enf-cards">
            <div class="col-12 col-sm-6 col-md-3">
                <div class="card enf-perfil">
                    <div class="card-body enf-corpo">
                        <h2 class="enf-card-titulo">
                            Qtd de Alunos<br>
                            Cadastrados
                        </h2>

                        <div class="enf-card-numero">
                            000
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-3">
                <div class="card enf-perfil">
                    <div class="card-body enf-corpo">
                        <h2 class="enf-card-titulo">
                            Quantidades de<br>
                            Meninos
                        </h2>
                        <div class="enf-card-numero">
                            00
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-3">
                <div class="card enf-perfil">
                    <div class="card-body enf-corpo">
                        <h2 class="enf-card-titulo">
                            Quantidades de<br>
                            Meninas
                        </h2>

                        <div class="enf-card-numero">
                            00
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-12 col-sm-6 col-md-3">
                <div class="card enf-perfil">
                    <div class="card-body enf-corpo">

                        <h2 class="enf-card-titulo">
                            Quantidades de<br>
                            Alunos com doenças
                        </h2>

                        <div class="enf-card-numero">
                            00
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="enf-botao-area">

            <a type="button" class="btn enf-cadastrar" href="<?= URL ?>/alunos/cadastrar">
                Cadastrar Aluno
            </a>

        </div>

    </main>

</div>
<?php include '../App/Views/footer.php' ?>