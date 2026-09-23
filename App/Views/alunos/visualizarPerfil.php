<?php
if (!isset($_SESSION['usuario_id'])) {
    header('Location: ' . URL . '/login');
    exit;
}

include '../App/Views/menu.php';
?>
<?php
$telefone = preg_replace('/\D/', '', $aluno->tele_numero ?? '');

if (strlen($telefone) == 11) {
    $telefone = '(' . substr($telefone, 0, 2) . ') ' .
                substr($telefone, 2, 5) . '-' .
                substr($telefone, 7, 4);
} elseif (strlen($telefone) == 10) {
    $telefone = '(' . substr($telefone, 0, 2) . ') ' .
                substr($telefone, 2, 4) . '-' .
                substr($telefone, 6, 4);
}

?>
<div class="layout">
    <div class="container-fluid ps-4 pe-4 pt-5 pb-3">
        <div class="row align-items-start">
            <div class="col-8 linha-verde">
                <h1>Consultar Aluno</h1>
                <p>Faça a consulta do estudante aqui.</p>
            </div>
            <div class="col-4 text-end">
                <img src="<?= URL ?>/img/logo_enfermaria.jpeg" class="logo-home" alt="Logo">
            </div>
        </div>
    </div>

    <!-- ===================================== Primeira linha ======================================= -->

    <div class="container">
        <div class="d-flex flex-column flex-sm-row justify-content-between align-items-stretch align-items-sm-center gap-2">

            <!-- Botão Adicionar Triagem -->
            <a href="<?= URL ?>/triagens/triagemFeminina"
                class="btn btn-success fw-bold px-3 py-2">
                Adicionar Triagem
            </a>

            <!-- Botões Voltar e Editar -->
            <div class="d-flex gap-2">
                <!-- Botão Voltar -->
                <a href="<?= URL ?>/alunos/consulta"
                    class="btn btn-light border-0 text-success fw-bold px-3 py-2"
                    style="background-color: #f5f0f0;">
                    <i class="bi bi-arrow-left me-1"></i>
                    Voltar
                </a>

                <!-- Botão Editar Aluno -->
                <a href="<?= URL ?>/alunos/editarPerfil"
                    class="btn btn-success fw-bold px-3 py-2">
                    <i class="bi bi-pencil-fill me-2"></i>
                    Editar Aluno
                </a>
            </div>

        </div>
    </div>

    <!-- ===================================== Segunda linha ======================================= -->

    <div class="container text-center mt-4">
        <div class="shadow p-3 mb-5 rounded">
            <div class="row align-items-center g-3">
                <!-- Usuário -->
                <div class="col-12 col-lg-2 d-flex justify-content-center align-items-center">
                    <img src="<?= URL ?>/img/user.avif"
                        class="usuario-user rounded-circle img-fluid"
                        alt="Usuário">
                </div>

                <!-- Dados do aluno -->
                <div class="col-12 col-lg-4 text-center text-lg-start">
                    <h5>Aluno de tal</h5>
                    <div class="row">
                        <div class="col-6">
                            <p>17 anos</p>
                        </div>

                        <div class="col-6">
                            <p>Nascimento: 00/00/0000</p>
                        </div>
                    </div>

                    <!-- Turma / Turno / Matrícula -->
                    <div class="row g-2">
                        <div class="col-4">
                            <div class="shadow-sm p-1 rounded">
                                <small>Turma: 2º</small>
                            </div>
                        </div>

                        <div class="col-4">
                            <div class="shadow-sm p-1 rounded">
                                <small>Turno: matutino</small>
                            </div>
                        </div>

                        <div class="col-4">
                            <div class="shadow-sm p-1 rounded">
                                <small>Matrícula: 2024109100026</small>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- Informações físicas -->
                <div class="col-12 col-lg-6">
                    <div class="row g-2">
                        <!-- Altura -->
                        <div class="col-6 col-lg-3">
                            <div class="shadow-sm p-3 bg-body-tertiary rounded h-100">
                                <i class="bi bi-rulers text-success fs-3"></i>
                                <h5 class="mb-0">
                                    <b>1,66</b>
                                </h5>
                                <small>Altura</small>
                            </div>
                        </div>


                        <!-- Peso -->
                        <div class="col-6 col-lg-3">
                            <div class="shadow-sm p-3 bg-body-tertiary rounded h-100">
                                <i class="bi bi-speedometer2 text-success fs-3"></i>
                                <h5 class="mb-0">
                                    <b>90 kg</b>
                                </h5>
                                <small>Peso</small>
                            </div>
                        </div>

                        <!-- Tipo sanguíneo -->
                        <div class="col-6 col-lg-3">
                            <div class="shadow-sm p-3 bg-body-tertiary rounded h-100">
                                <i class="bi bi-droplet-fill text-success fs-3"></i>
                                <h5 class="mb-0">
                                    <b>O +</b>
                                </h5>
                                <small>Tipo Sanguíneo</small>
                            </div>
                        </div>


                        <!-- Última atualização -->
                        <div class="col-6 col-lg-3">
                            <div class="shadow-sm p-3 bg-body-tertiary rounded h-100">
                                <i class="bi bi-calendar-fill text-success fs-3"></i>
                                <h5 class="mb-0">
                                    <b>00/00/0000</b>
                                </h5>
                                <small>Última Atualização</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- ===================================== Terceira linha ======================================= -->

    <div class="container text-start">
        <div class="row g-3">
            <!-- ================= Dados Pessoais ================= -->
            <div class="col-12 col-lg-6">
                <div class="shadow-sm p-3 mb-3 bg-body-tertiary rounded h-100">
                    <!-- Título -->
                    <div class="d-flex align-items-center gap-2 mb-3">
                        <i class="bi bi-person-fill text-success fs-3"></i>
                        <h5 class="mb-0">
                            <b>Dados Pessoais</b>
                        </h5>
                    </div>


                    <div class="row">
                        <!-- Nome -->
                        <div class="col-12 col-sm-6 col-lg-12">
                            <small>Nome Completo</small>
                            <p>
                                <b>Aluno de tal</b>
                            </p>
                        </div>

                        <!-- CPF -->
                        <div class="col-12 col-sm-6 col-lg-12">
                            <small>CPF</small>
                            <p>
                                <b>000.000.000-00</b>
                            </p>
                        </div>

                        <!-- Telefone -->
                        <div class="col-12 col-sm-6 col-lg-12">
                            <small>Telefone do responsável</small>
                            <p>
                                <b><?= htmlspecialchars($telefone) ?></b>
                            </p>
                        </div>

                        <!-- Endereço -->
                        <div class="col-12 col-sm-6 col-lg-12">
                            <small>Endereço</small>
                            <p class="text-break">
                                <b>Rua alguma coisa, 1111, bairro, ...</b>
                            </p>
                        </div>


                        <!-- Data de nascimento -->
                        <div class="col-12 col-sm-6 col-lg-12">
                            <small>Data de Nascimento</small>
                            <p>
                                <b>00/00/0000</b>
                            </p>
                        </div>


                        <!-- RG -->
                        <div class="col-12 col-sm-6 col-lg-12">
                            <small>RG</small>
                            <p>
                                <b>123456</b>
                            </p>
                        </div>


                        <!-- Email -->
                        <div class="col-12">
                            <small>Email do responsável</small>
                            <p class="text-break">
                                <b>emailalgumacoisa@gmail.com</b>
                            </p>
                        </div>
                    </div>
                </div>
            </div>


            <!-- ================= Informações Rápidas ================= -->

            <div class="col-12 col-lg-6">
                <div class="shadow-sm p-3 mb-3 bg-success-subtle rounded h-100">
                    <!-- Título -->
                    <div class="d-flex align-items-center gap-2 mb-3">
                        <i class="bi bi-heart-fill text-success fs-3"></i>

                        <h5 class="mb-0">
                            <b>Informações Rápidas</b>
                        </h5>
                    </div>
                    <div class="row">
                        <!-- Alergias -->
                        <div class="col-12 col-sm-6 col-lg-12">
                            <small class="text-success">
                                <b>Alergias</b>
                            </small>
                            <p>
                                <b>Penicilina, poeira</b>
                            </p>
                        </div>

                        <!-- Doenças -->
                        <div class="col-12 col-sm-6 col-lg-12">
                            <small class="text-success">
                                <b>Doenças</b>
                            </small>
                            <p>
                                <b>Nenhuma</b>
                            </p>
                        </div>

                        <!-- Medicamentos -->
                        <div class="col-12 col-sm-6 col-lg-12">
                            <small class="text-success">
                                <b>Uso Contínuo de Medicamentos</b>
                            </small>

                            <p>
                                <b>Algum aí</b>
                            </p>
                        </div>

                        <!-- Observações -->
                        <div class="col-12 col-sm-6 col-lg-12">
                            <small class="text-success">
                                <b>Observações Importantes</b>
                            </small>

                            <p class="text-break">
                                <b>Evitar poeira e exercícios intensos</b>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ===================================== Quarta linha ======================================= -->
    <div class="container text-start">
        <div class="row">
            <div class="col-12">
                <div class="shadow-sm p-3 mb-5 bg-body-tertiary rounded">
                    <!-- Título -->
                    <div class="d-flex align-items-center gap-2 mb-3">
                        <svg xmlns="http://w3.org"
                            width="32"
                            height="32"
                            fill="#198754"
                            class="bi bi-clipboard-text flex-shrink-0"
                            viewBox="0 0 16 16">

                            <path fill-rule="evenodd"
                                d="M6.146 8.146a.5.5 0 0 1 .708 0L8 9.293l1.146-1.147a.5.5 0 1 1 .708.708L8.707 10l1.147 1.146a.5.5 0 0 1-.708.708L8 10.707l-1.146 1.147a.5.5 0 0 1-.708-.708L7.293 10 6.146 8.854a.5.5 0 0 1 0-.708" />
                            <path
                                d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1z" />
                            <path
                                d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0z" />
                        </svg>

                        <h3 class="text-success mb-0 fs-4">
                            <b>Histórico de Visitas Recentes</b>
                        </h3>
                    </div>

                    <!-- Tabela -->
                    <div class="table-responsive">
                        <table class="table table-hover align-middle mb-0">
                            <thead class="table-light">
                                <tr class="fw-bold">
                                    <th scope="col" class="text-success">
                                        Data
                                    </th>
                                    <th scope="col" class="text-success">
                                        Motivo
                                    </th>
                                    <th scope="col" class="text-success">
                                        Sintomas
                                    </th>
                                    <th scope="col" class="text-success">
                                        Atendimento
                                    </th>
                                    <th scope="col" class="text-success">
                                        Profissional
                                    </th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td class="text-muted">
                                        20/05/2025 10:05
                                    </td>
                                    <td>
                                        Dor de Cabeça
                                    </td>
                                    <td>
                                        Cefaleia Leve
                                    </td>
                                    <td>
                                        Repouso e Hidratação
                                    </td>
                                    <td>
                                        Enfermeira
                                    </td>
                                </tr>

                                <tr>
                                    <td class="text-muted">
                                        14/06/2025 9:24
                                    </td>

                                    <td>
                                        Dor Abdominal
                                    </td>

                                    <td>
                                        Nausea
                                    </td>

                                    <td>
                                        Observação
                                    </td>

                                    <td>
                                        Enfermeira
                                    </td>

                                </tr>


                                <tr>

                                    <td class="text-muted">
                                        30/08/2025 7:49
                                    </td>

                                    <td>
                                        Corte no Joelho
                                    </td>

                                    <td>
                                        Sangramento Leve
                                    </td>

                                    <td>
                                        Limpeza e curativo
                                    </td>

                                    <td>
                                        Enfermeira
                                    </td>

                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <!-- Ver todas -->
                    <div class="d-flex align-items-center gap-2 mt-3">

                        <a href="#" class="text-success">
                            Ver todas as visitas
                        </a>

                        <i class="bi bi-chevron-right text-success fs-3"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ===================================== FIM Quarta linha ======================================= -->

</div>
<?php include '../App/Views/footer.php' ?>