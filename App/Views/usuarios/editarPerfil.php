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

    <div class="container mt-5">
        <div class="card p-4 mx-auto" style="max-width: 600px;">
            <div class="row align-items-center">
                <div class="col-12 col-md-4 text-center">
                    <div class="position-relative d-inline-block">
                        <img src="<?= URL ?>/img/user.avif" class="rounded-circle img-fluid" width="150" alt="Usuário">
                        <label for="foto"
                            class="position-absolute"
                            style="bottom: 10px; right: 10px; cursor: pointer;">
                            <img src="<?= URL ?>/img/Canetinha.png" width="25" alt="Editar">
                        </label>
                        <input type="file" id="foto" accept="image/*" style="display: none;">
                    </div>
                    <button type="submit" class="btn btn-success rounded-pill mb-2 w-100">
                        Salvar alterações
                    </button>
                    <a href="<?= URL ?>/usuarios/alterarSenha" class="btn btn-outline-success rounded-pill w-100">
                        Alterar senha
                    </a>
                </div>
                <div class="col-12 col-md-8">
                    <form class="row g-4">
                        <div class="col-12">
                            <label for="nome completo" class="form-label">Nome completo</label>
                            <input type="nome completo" class="form-control" id="nome completo">
                        </div>
                        <div class="col-12 col-md-6">
                            <label for="Email" class="form-label">Email</label>
                            <input type="Email" class="form-control" id="Email">
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="form-label text-nowrap">Data de Nascimento</label>
                            <input type="date" class="form-control">
                        </div>
                        <div class="col-12">
                            <label for="telefone celular" class="form-label">Telefone Celular</label>
                            <input type="text" class="form-control" id="inputAddress" placeholder="(00) 00000-0000">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
<?php include '../App/Views/footer.php' ?>