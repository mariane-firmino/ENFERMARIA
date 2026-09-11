<?php
if (!isset($_SESSION['usuario_id'])) {
    header('Location: ' . URL . '/login');
    exit;
}

include '../App/Views/menu.php';
?>
<div class="layout">
    <div class="container-fluid ps-4 pe-4 pt-5 pb-3">
        <div class="row align-items-start">
            <div class="col-8 linha-verde">
                <h1>Perfil</h1>
                <p>Bem-Vindo, <?= $_SESSION['usuario_nome']; ?>!</p>
            </div>
            <div class="col-4 text-end">
                <img src="<?= URL ?>/img/logo_enfermaria.jpeg" class="logo-home" alt="Logo">
            </div>
        </div>
    </div>

    <?php if (isset($_SESSION['erro'])): ?>
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                alert("<?= addslashes($_SESSION['erro']) ?>");
            });
        </script>
        <?php unset($_SESSION['erro']); ?>
    <?php endif; ?>


   
    <div class="shadow p-3 mb-5 rounded position-absolute top-50 start-50 translate-middle formulario-senha">
        <div class="container text-justify">
            <div class="row row-cols-1">
                <div class="col">
                    <h4>Meus Dados - Alterar Senha</h4>
                </div>
            </div>
            <div class="row row-cols-1 border-top p-2">
               <form method="POST" action="<?= URL ?>/usuarios/salvarSenha">

    <div class="mb-3">
        <label for="senha" class="form-label">
            Digite a senha atual <sup>*</sup>
        </label>

        <input 
            type="password" 
            class="form-control" 
            id="senha"
            name="senha"
            required
        >
    </div>

    <div class="mb-3">
        <label for="novaSenha" class="form-label">
            Nova Senha <sup>*</sup>
        </label>

        <input 
            type="password" 
            class="form-control" 
            id="novaSenha"
            name="novaSenha"
            required
        >
    </div>

    <div class="mb-3">
        <label for="confirmarSenha" class="form-label">
            Confirmar Nova Senha <sup>*</sup>
        </label>

        <input 
            type="password" 
            class="form-control" 
            id="confirmarSenha"
            name="confirmarSenha"
            required
        >
    </div>

    <div class="mb-3 text-end">
        <button type="submit" class="btn btn-success">
            Salvar Alterações
        </button>
    </div>

</form>
            </div>
        </div>
    </div>
</div>
</div>
<?php include '../App/Views/footer.php' ?>