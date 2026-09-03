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
                <h1>Notificação</h1>
                <p>Veja todas as notificações aqui.</p>
            </div>

            <div class="col-4 text-end">
                <img src="<?= URL ?>/img/logo_enfermaria.jpeg" class="logo-home" alt="Logo">
            </div>
        </div>
    </div>

    <div class="container text-center">
        <div class="row align-items-center g-3 noti-responsive">

            <!-- FILTROS -->
            <div class="col-12 col-lg-5">
                <div class="d-flex justify-content-center flex-wrap gap-2">

                    <input type="radio" class="btn-check" name="options-base"
                        id="option5" autocomplete="off" checked>
                    <label class="btn verde" for="option5">
                        Todas
                    </label>


                    <input type="radio" class="btn-check" name="options-base"
                        id="option6" autocomplete="off">
                    <label class="btn verde" for="option6">
                        Não Lidas
                    </label>


                    <input type="radio" class="btn-check" name="options-base"
                        id="option8" autocomplete="off">
                    <label class="btn verde" for="option8">
                        Lidas
                    </label>

                </div>
            </div>


            <!-- PESQUISA -->
            <div class="col-12 col-md-7 col-lg-4">

                <div class="input-group">

                    <span class="input-group-text">
                        <i class="bi bi-search"></i>
                    </span>

                    <input
                        class="form-control"
                        type="text"
                        placeholder="Pesquise alguma coisa"
                        aria-label="Pesquise alguma coisa">

                </div>

            </div>


            <!-- DATA -->
            <div class="col-12 col-md-5 col-lg-3">

                <input
                    type="date"
                    class="form-control"
                    id="data"
                    name="data">

            </div>

        </div>
    </div>

    <div class="alert alert-outline-success mt-3 mx-3" role="alert">
        <div class="row align-items-center">

            <!-- Título e descrição -->
            <div class="col">
                <h6 class="mb-1">
                    <strong>Título da Notificação</strong>
                </h6>
                <small>
                    Descrição da notificação...
                </small>
            </div>

            <!-- Data -->
            <div class="col-auto d-flex align-items-center">
                <small class="text-nowrap">
                    Há 3 dias
                </small>
            </div>

            <!-- Três pontinhos -->
            <div class="col-auto">
                <div class="dropdown">
                    <button
                        class="btn p-0 border-0"
                        type="button"
                        data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <b class="tres-pontos">...</b>
                    </button>

                    <ul class="dropdown-menu dropdown-menu-end">
                        <li>
                            <a class="dropdown-item" href="<?= URL ?>/notificacoes/detalhe">
                                Visualizar
                            </a>
                        </li>

                        <li>
                            <a class="dropdown-item" href="#">
                                Marcar como lida
                            </a>
                        </li>

                        <li>
                            <a
                                class="dropdown-item"
                                href="#"
                                data-bs-toggle="modal"
                                data-bs-target="#staticBackdrop">
                                Excluir
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Modal de confirmação de exclusão-->
<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Confirmação de Exclusão</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Tem certeza de que deseja excluir esta notificação?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <a type="button" class="btn btn-primary" href="#">Confirmar</a>
            </div>
        </div>
    </div>
</div>
<?php include '../App/Views/footer.php' ?>