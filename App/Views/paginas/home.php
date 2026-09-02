<?php 
    if(!isset($_SESSION['usuario_id'])){
        header('Location: '.URL.'/login');
        exit;
    }

    include '../App/Views/menu.php' 
    ?>
<div class="layout">
    <main class="conteudo">
        <header class="topo">
            <div class="titulo-inicio">
                <h1>Início</h1>
                <p>Bem-Vindo, <?= $_SESSION['usuario_nome'];?>!</p>
            </div>
            <img src="<?=URL?>/img/logo_enfermaria.jpeg" class="logo-home" alt="Logo">
        </header>

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