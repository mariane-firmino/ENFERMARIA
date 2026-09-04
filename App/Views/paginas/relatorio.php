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
                <h1>Relatório</h1>
                <p>Relatório das ações realizadas durante o mês.</p>
            </div>

            <div class="col-4 text-end">
                <img src="<?= URL ?>/img/logo_enfermaria.jpeg" class="logo-home" alt="Logo">
            </div>

        </div>
    </div>

    <!-- ==================================== Primeira Linha =================================================== -->
    <div class="container my-4">
        <div class="row g-3 align-items-end">
            <!-- Campo Período -->
            <div class="col-12 col-sm-6 col-md-3">
                <label for="periodo" class="form-label fw-bold mb-1">Período</label>
                <select id="periodo" class="form-select border-success-subtle py-2">
                    <option selected>01/05/2026 - 10/06/2026</option>
                    <!-- Outras opções aqui -->
                </select>
            </div>

            <!-- Campo Tipo de relatório -->
            <div class="col-12 col-sm-6 col-md-3">
                <label for="tipoRelatorio" class="form-label fw-bold mb-1">Tipo de relatório</label>
                <select id="tipoRelatorio" class="form-select border-success-subtle py-2">
                    <option selected>Todos</option>
                    <!-- Outras opções aqui -->
                </select>
            </div>

            <!-- Campo Turma -->
            <div class="col-12 col-sm-6 col-md-3">
                <label for="turma" class="form-label fw-bold mb-1">Turma</label>
                <select id="turma" class="form-select border-success-subtle py-2">
                    <option selected>Todas</option>
                    <!-- Outras opções aqui -->
                </select>
            </div>

            <!-- Botão Imprimir relatório -->
            <div class="col-12 col-sm-6 col-md-3">
                <button type="button"
                    class="btn btn-light border border-secondary-subtle w-100 py-2 d-flex align-items-center justify-content-center">
                    <i class="bi bi-printer me-2 fs-5 text-success"></i>
                    Imprimir relatório
                </button>
            </div>

        </div>
    </div>
    <!-- ================================ FIM Primeira Linha =================================================== -->

    <!-- ==================================== Segunda Linha =================================================== -->
    <div class="container text-center">
        <div class="row align-items-start">
            <div class="col-12 mt-3 col-sm-12 col-md-4">
                <div class="shadow-lg p-3 mb-5 bg-body-tertiary rounded">
                    <div class="col-12 mt-3 col-sm-12 col-md-12">
                        <div class="d-flex align-items-center gap-2">
                            <i class="bi bi-people-fill text-success fs-3"></i>
                            <h5><b>Total de Consultas</b></h5>
                        </div>
                    </div>
                    <div class="col-12 mt-3 col-sm-12 col-md-12">
                        <h1><b>00</b></h1>
                    </div>
                    <div class="col-12 mt-3 col-sm-12 col-md-12">
                        durante o período.
                    </div>
                </div>
            </div>
            <div class="col-12 mt-3 col-sm-12 col-md-4">
                <div class="shadow-lg p-3 mb-5 bg-body-tertiary rounded">
                    <div class="col-12 mt-3 col-sm-12 col-md-12">
                        <div class="d-flex align-items-center gap-2">
                            <i class="bi bi-person-walking text-success fs-3"></i>
                            <h5><b>Estudantes Atendidos</b></h5>
                        </div>
                    </div>
                    <div class="col-12 mt-3 col-sm-12 col-md-12">
                        <h1><b>00</b></h1>
                    </div>
                    <div class="col-12 mt-3 col-sm-12 col-md-12">
                        durante o período.
                    </div>
                </div>
            </div>
            <div class="col-12 mt-3 col-sm-12 col-md-4">
                <div class="shadow-lg p-3 mb-5 bg-body-tertiary rounded">
                    <div class="col-12 mt-3 col-sm-12 col-md-12">
                        <div class="d-flex align-items-center gap-2">
                            <i class="bi bi-card-list text-success fs-3"></i>
                            <h5><b>Consultas Marcadas</b></h5>
                        </div>
                    </div>
                    <div class="col-12 mt-3 col-sm-12 col-md-12">
                        <h1><b>00</b></h1>
                    </div>
                    <div class="col-12 mt-3 col-sm-12 col-md-12">
                        durante o período.
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ================================ FIM Segunda Linha =================================================== -->

    <!-- ==================================== Terceira Linha =================================================== -->
    <div class="container text-start">
        <div class="row align-items-start">
            <div class="shadow-sm p-3 mb-5 bg-body-tertiary rounded">
                <div class="table-responsive">
                    <table class="table table-hover align-middle">
                        <thead class="table-light">
                            <tr class="fw-bold">
                                <th scope="col" class="text-success">Nome do Relatório</th>
                                <th scope="col" class="text-success">Descrição</th>
                                <th scope="col" class="text-success">Gerado em</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Consultas realizadas</td>
                                <td>Lista de todas as consultas realizadas.</td>
                                <td class="text-muted">20/05/2025 10:05</td>
                            </tr>
                            <tr>
                                <td>Estudantes atendidos</td>
                                <td>Relação de estudantes atendidos</td>
                                <td class="text-muted">14/06/2025 9:24</td>
                            </tr>
                            <tr>
                                <td>Triagens Realizadas</td>
                                <td>Relação de triagens realizadas</td>
                                <td class="text-muted">30/08/2025 7:49</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- ================================ FIM Terceira Linha =================================================== -->


</div>
<?php include '../App/Views/footer.php' ?>