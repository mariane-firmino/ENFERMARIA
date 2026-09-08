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
                <h1>Gerenciar Dispositivos</h1>
                <p>Gerencie a configuração do sistema.</p>
            </div>

            <div class="col-4 text-end">
                <img src="<?= URL ?>/img/logo_enfermaria.jpeg" class="logo-home" alt="Logo">
            </div>

        </div>
    </div>

    <div class="container mt-5">

        <!-- CARDS -->
        <div class="row g-3">

            <!-- Dispositivos Ativos -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="card h-100">
                    <div class="card-body">

                        <h5 class="card-title d-flex align-items-center">
                            <img src="<?= URL ?>/img/Monitor.png" width="22" class="me-2" alt="">
                            <span>Dispositivos Ativos</span>
                        </h5>

                        <h6 class="card-subtitle mb-2">1</h6>

                        <p class="card-text mb-0">
                            Sessão ativa agora
                        </p>

                    </div>
                </div>
            </div>


            <!-- Últimas atividades -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="card h-100">
                    <div class="card-body">

                        <h5 class="card-title d-flex align-items-center">
                            <img src="<?= URL ?>/img/Clock.png" width="22" class="me-2" alt="">
                            <span>Últimas atividades</span>
                        </h5>
                        <h6 class="card-subtitle mb-2">
                            Hoje - 09:15
                        </h6>

                    </div>
                </div>
            </div>


            <!-- Locais de acesso -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="card h-100">
                    <div class="card-body">

                        <h5 class="card-title d-flex align-items-center">
                            <img src="<?= URL ?>/img/Location.png" width="22" class="me-2" alt="">
                            <span>Locais de acesso</span>
                        </h5>

                        <h6 class="card-subtitle mb-2">
                            A 1 hora
                        </h6>

                        <p class="card-text text-body-secondary mb-0">
                            Guajará-Mirim, RO
                        </p>

                    </div>
                </div>
            </div>

            <!-- Encerrar sessões -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="card h-100">
                    <div class="card-body">

                        <h5 class="card-title d-flex align-items-center">
                            <img src="<?= URL ?>/img/Error.png" width="22" class="me-2" alt="">
                            <span>Encerrar todas as sessões</span>
                        </h5>

                        <button type="button" class="btn btn-outline-danger">
                            Encerrar
                        </button>
                    </div>
                </div>
            </div>

        </div>


        <!-- TABELA -->
        <div class="card mt-4">
            <div class="card-body">

                <!-- ALERTA -->
                <div class="alert alert-success mt-2" role="alert">
                    <strong>!</strong>
                    Você pode encerrar sessão em outros dispositivos remotamente.
                </div>

                <!-- TABELA RESPONSIVA -->
                <div class="table-responsive">

                    <table class="table table-hover align-middle mb-0">

                        <thead>
                            <tr>
                                <th>Dispositivos</th>
                                <th>Navegador</th>
                                <th>Localização</th>
                                <th>Status</th>
                                <th>Ações</th>
                            </tr>
                        </thead>

                        <tbody>

                            <tr>
                                <th>Windows</th>
                                <td>Chrome</td>
                                <td>Guajará-Mirim, RO</td>
                                <td>Ativo</td>
                                <td>
                                    <button type="button"
                                        class="btn btn-outline-danger btn-sm">
                                        Sair
                                    </button>
                                </td>
                            </tr>

                            <tr>
                                <th>Ipad</th>
                                <td>Safari</td>
                                <td>Guajará-Mirim, RO</td>
                                <td>Ativo</td>
                                <td>
                                    <button type="button"
                                        class="btn btn-outline-danger btn-sm">
                                        Sair
                                    </button>
                                </td>
                            </tr>

                            <tr>
                                <th>Samsung</th>
                                <td>Chrome</td>
                                <td>Guajará-Mirim, RO</td>
                                <td>Ativo</td>
                                <td>
                                    <button type="button"
                                        class="btn btn-outline-danger btn-sm">
                                        Sair
                                    </button>
                                </td>
                            </tr>

                            <tr>
                                <th>Notebook</th>
                                <td>Edge</td>
                                <td>Guajará-Mirim, RO</td>
                                <td>Ativo</td>
                                <td>
                                    <button type="button"
                                        class="btn btn-outline-danger btn-sm">
                                        Sair
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


</div>
<?php include '../App/Views/footer.php'; ?>