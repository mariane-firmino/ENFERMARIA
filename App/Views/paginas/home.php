<?php 
    if(!isset($_SESSION['usuario_id'])){
        header('Location: '.URL.'/login');
        exit;
    }

    include '../App/Views/menu.php' 
    ?>
<div class="layout">
    <main class="conteudo">
        <div class="container-fluid ps-4 pe-4 pt-5 pb-3">
        <div class="row align-items-start">

            <div class="col-8 linha-verde">
                <h1>Início</h1>
                <p>Bem-Vindo, <?= $_SESSION['usuario_nome'];?>!</p>
            </div>

            <div class="col-4 text-end">
                <img src="<?=URL?>/img/logo_enfermaria.jpeg" class="logo-home" alt="Logo">
            </div>

        </div>
    </div>

        <section class="home-cards">
            <div class="home-card">
                <h3>Novas<br>Notificações</h3>
                <span>00</span>
            </div>
            <div class="home-card">
                <h3>Qtd de Alunos<br>Cadastrados</h3>
                <span>000</span>
            </div>
            <div class="home-card">
                <h3>Atendimentos<br>Realizados Hoje</h3>
                <span>00</span>
            </div>
            <div class="home-card">
                <h3>Qtd de Atendimentos<br>Periódicos</h3>
                <span>00</span>
            </div>
        </section>
    </main>
</div>

<?php include '../App/Views/footer.php' ?>