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
                <h1>Editar Perfil</h1>
                <p>Faça a edição do perfil do estudante aqui.</p>
            </div>
            <div class="col-4 text-end">
                <img src="<?= URL ?>/img/logo_enfermaria.jpeg" class="logo-home" alt="Logo">
            </div>
        </div>
    </div>

    <nav style="--bs-breadcrumb-divider: '>';" class="m-3" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= URL ?>/alunos/visualizarPerfil">Visualizar Perfil</a></li>
            <li class="breadcrumb-item active" aria-current="page">Editar Perfil</li>
        </ol>
    </nav>

    <!-- DADOS PESSOAIS + INFORMAÇÕES DE CONTATO -->
    <form action="<?= URL ?>/usuarios/editarPerfil" method="POST" enctype="multipart/form-data">

        <div class="row g-4 mb-4">
            <!-- FOTO DE PERFIL -->
<div class="col-12 mb-4">
    <div class="card border-0 shadow-sm">
        <div class="card-body text-center">

            <h5 class="text-success fw-bold mb-4">
                <i class="bi bi-person-circle"></i> Foto de Perfil
            </h5>

            <img 
                src="<?= URL ?>/img/user.avif"
                class="usuario-user mb-3"
                alt="Foto de perfil"
            >

            <div class="mt-2">
                <label for="foto" class="form-label">
                    Escolha uma nova foto
                </label>

                <input 
                    type="file" 
                    name="foto" 
                    id="foto"
                    class="form-control"
                    accept="image/jpeg,image/png,image/webp"
                >
            </div>

            <small class="text-muted">
                JPG, PNG ou WEBP. Tamanho máximo: 2 MB.
            </small>

        </div>
    </div>
</div>


            <!-- DADOS PESSOAIS -->
            <div class="col-lg-8">

                <div class="card border-0 shadow-sm h-100">

                    <div class="card-body">

                        <h5 class="text-success fw-bold mb-4">
                            <i class="bi bi-person-fill text-success"></i> Dados Pessoais
                        </h5>

                        <div class="row g-3">

                            <div class="col-md-6">
                                <small class="text-secondary">
                                    Nome completo
                                </small>

                                <div class="bg-light rounded p-2">
                                    Aluno de Tal
                                </div>
                            </div>

                            <div class="col-md-6">
                                <small class="text-secondary">
                                    Data de nascimento
                                </small>

                                <div class="bg-light rounded p-2">
                                    09/09/2009
                                </div>
                            </div>

                            <div class="col-md-6">
                                <small class="text-secondary">
                                    CPF
                                </small>

                                <div class="bg-light rounded p-2">
                                    123.456.789-55
                                </div>
                            </div>

                            <div class="col-md-6">
                                <small class="text-secondary">
                                    Sexo biológico
                                </small>

                                <div class="bg-light rounded p-2">
                                    Masculino
                                </div>
                            </div>

                            <div class="col-md-6">
                                <small class="text-secondary">
                                    Matrícula
                                </small>

                                <div class="bg-light rounded p-2">
                                    123456789
                                </div>
                            </div>

                            <div class="col-md-6">
                                <small class="text-secondary">
                                    Curso
                                </small>

                                <div class="bg-light rounded p-2">
                                    Técnico em Informática
                                </div>
                            </div>

                        </div>

                    </div>

                </div>

            </div>


            <!-- INFORMAÇÕES DE CONTATO -->
            <div class="col-lg-4">

                <div class="card border-0 shadow-sm h-100">

                    <div class="card-body">

                        <h5 class="text-success fw-bold mb-4">
                            ☎ Informações de Contato
                        </h5>

                        <div class="mb-3">
                            <small class="text-secondary">
                                Telefone do aluno
                            </small>

                            <div class="bg-light rounded p-2">
                                (69) 99999-9999
                            </div>
                        </div>

                        <div class="mb-3">
                            <small class="text-secondary">
                                Telefone dos responsáveis
                            </small>

                            <div class="bg-light rounded p-2">
                                (69) 99999-9999
                            </div>
                        </div>

                        <div>
                            <small class="text-secondary">
                                E-mail
                            </small>

                            <div class="bg-light rounded p-2">
                                aluno@email.com
                            </div>
                        </div>

                    </div>

                </div>

            </div>

        </div>


        <!-- INFORMAÇÕES RÁPIDAS -->
        <div class="card border-0 shadow-sm mb-4">

            <div class="card-body">

                <h5 class="text-success fw-bold mb-4">
                    💚 Informações Rápidas
                </h5>

                <div class="row g-3">

                    <div class="col-md-4">

                        <small class="text-secondary">
                            Tipo de escola anterior
                        </small>

                        <div class="bg-light rounded p-2">
                            Escola Pública
                        </div>

                    </div>

                    <div class="col-md-4">

                        <small class="text-secondary">
                            Reprovação
                        </small>

                        <div class="bg-light rounded p-2">
                            Não
                        </div>

                    </div>

                    <div class="col-md-4">

                        <small class="text-secondary">
                            Estudos fora da escola
                        </small>

                        <div class="bg-light rounded p-2">
                            Sim
                        </div>

                    </div>

                    <div class="col-md-4">

                        <small class="text-secondary">
                            Motivo da escolha do IFRO
                        </small>

                        <div class="bg-light rounded p-2">
                            Qualidade do ensino
                        </div>

                    </div>

                    <div class="col-md-4">

                        <small class="text-secondary">
                            Tempo de estudo
                        </small>

                        <div class="bg-light rounded p-2">
                            2 horas
                        </div>

                    </div>

                    <div class="col-md-4">

                        <small class="text-secondary">
                            Motivação para estudar
                        </small>

                        <div class="bg-light rounded p-2">
                            8 / 10
                        </div>

                    </div>

                    <div class="col-md-4">

                        <small class="text-secondary">
                            Acesso ao serviço de saúde
                        </small>

                        <div class="bg-light rounded p-2">
                            SUS
                        </div>

                    </div>

                    <div class="col-md-4">

                        <small class="text-secondary">
                            Alergia alimentar
                        </small>

                        <div class="bg-light rounded p-2">
                            Não
                        </div>

                    </div>

                    <div class="col-md-4">

                        <small class="text-secondary">
                            Doença crônica
                        </small>

                        <div class="bg-light rounded p-2">
                            Não
                        </div>

                    </div>

                </div>

            </div>

        </div>
        <div class="d-flex justify-content-between align-items-center mt-5">
        <button type="submit" class="btn btn-success">
            Salvar alterações
        </button>
    </div>

</div>

<?php include '../App/Views/footer.php'; ?>