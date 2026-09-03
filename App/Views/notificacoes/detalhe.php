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
                <h1>Notificações</h1>
                <p>Veja todas as notificações aqui.</p>
            </div>

            <div class="col-4 text-end">
                <img src="<?= URL ?>/img/logo_enfermaria.jpeg" class="logo-home" alt="Logo">
            </div>
        </div>
    </div>

    <!-- =========== Como acessar as notificações =========== -->
    <div class="container-fluid px-3 px-md-4">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb flex-wrap">
                <li class="breadcrumb-item">
                    <a href="<?= URL ?>/notificacoes/notificacao">
                        Notificação
                    </a>
                </li>

                <li class="breadcrumb-item active" aria-current="page">
                    Visualizar detalhes
                </li>
            </ol>
        </nav>
    </div>
    <!-- =========== FIM Como acessar as notificações =========== -->

    <!-- =========== Detalhes da notificação =========== -->
    <div class="container-fluid px-3 px-md-4">
        <div class="mt-4">
            <h3>Título da Notificação</h3>
            <small class="text-muted">
                Data: 01/01/2023 às 10:00
            </small>
            <div class="shadow p-3 p-md-4 mt-3 mb-3 rounded">
                <p class="mb-0">
                    Conteúdo da notificação. Lorem ipsum dolor sit amet,
                    consectetur adipiscing elit. Sed do eiusmod tempor
                    incididunt ut labore et dolore magna aliqua.
                </p>
            </div>
            <button type="submit" class="btn btn-success">
                Marcar como lida
            </button>
        </div>

    </div>

</div>
<?php include '../App/Views/footer.php' ?>