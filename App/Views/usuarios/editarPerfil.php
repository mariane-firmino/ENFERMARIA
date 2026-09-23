<?php

if (!isset($_SESSION['usuario_id'])) {
    header('Location: ' . URL . '/usuarios/login');
    exit;
}

include '../App/Views/menu.php';

$usuario = $dados['usuario'];

$fotoPerfil = !empty($usuario->serv_foto)
    ? URL . '/uploads/perfis/' . $usuario->serv_foto
    : URL . '/img/user.avif';

?>



<div class="layout">

    <!-- ============================= -->
    <!-- CABEÇALHO -->
    <!-- ============================= -->

    <div class="container-fluid ps-4 pe-4 pt-5 pb-3">

        <div class="row align-items-start">

            <div class="col-8 linha-verde">

                <h1>Perfil</h1>

                <p>
                    Bem-Vindo,
                    <?= htmlspecialchars($_SESSION['usuario_nome']); ?>!
                </p>

            </div>

            <div class="col-4 text-end">

                <img src="<?= URL ?>/img/logo_enfermaria.jpeg" class="logo-home" alt="Logo">

            </div>

        </div>

    </div>


    <!-- ============================= -->
    <!-- BREADCRUMB -->
    <!-- ============================= -->

    <nav style="--bs-breadcrumb-divider: '>';" class="m-3" aria-label="breadcrumb">

        <ol class="breadcrumb">

            <li class="breadcrumb-item">

                <a href="<?= URL ?>/paginas/perfil">
                    Perfil
                </a>

            </li>

            <li class="breadcrumb-item active" aria-current="page">
                Editar Perfil
            </li>

        </ol>

    </nav>


    <!-- ============================= -->
    <!-- FORMULÁRIO -->
    <!-- ============================= -->

    <div class="container mt-5 mb-5">

        <div class="card p-4 mx-auto" style="max-width: 850px;">

            <form action="<?= URL ?>/usuarios/editarPerfil" method="POST" enctype="multipart/form-data">

                <div class="row align-items-center">


                    <!-- ============================= -->
                    <!-- FOTO E BOTÕES -->
                    <!-- ============================= -->

                    <div class="col-12 col-md-4 text-center mb-4 mb-md-0">

                        <div class="position-relative d-inline-block">

                            <img src="<?= htmlspecialchars($fotoPerfil) ?>" id="fotoPreview" alt="Foto do usuário"
                                style="
        width: 150px !important;
        height: 150px !important;
        border-radius: 50% !important;
        object-fit: cover !important;
        display: block;
">


                            <!-- BOTÃO PARA TROCAR FOTO -->

                            <label for="foto" class="position-absolute" style="
                                    bottom: 10px;
                                    right: 10px;
                                    cursor: pointer;
                                ">

                                <img src="<?= URL ?>/img/Canetinha.png" width="30" alt="Alterar foto">

                            </label>


                            <!-- INPUT DA FOTO -->

                            <input type="file" name="foto" id="foto" accept="image/jpeg,image/png,image/webp"
                                style="display: none;">

                        </div>


                        <!-- ============================= -->
                        <!-- BOTÕES -->
                        <!-- ============================= -->

                        <div class="mt-4">

                            <button type="submit" class="btn btn-success rounded-pill w-100 mb-2">
                                Salvar alterações
                            </button>


                            <a href="<?= URL ?>/usuarios/alterarSenha"
                                class="btn btn-outline-success rounded-pill w-100">
                                Alterar senha
                            </a>

                        </div>

                    </div>


                    <!-- ============================= -->
                    <!-- DADOS DO USUÁRIO -->
                    <!-- ============================= -->

                    <div class="col-12 col-md-8">

                        <div class="row g-2">


                            <!-- ============================= -->
                            <!-- NOME -->
                            <!-- ============================= -->

                            <div class="col-12">

                                <label for="nome" class="form-label mb-1">
                                    Nome
                                </label>

                                <input type="text" name="nome" id="nome" class="form-control"
                                    placeholder="Nome completo"
                                    value="<?= htmlspecialchars($usuario->serv_nome ?? '') ?>">

                            </div>


                            <!-- ============================= -->
                            <!-- EMAIL -->
                            <!-- ============================= -->

                            <div class="col-12 col-md-6">

                                <label for="email" class="form-label mb-1">
                                    E-mail
                                </label>

                                <input type="email" name="email" id="email" class="form-control"
                                    placeholder="Email completo"
                                    value="<?= htmlspecialchars($usuario->serv_email ?? '') ?>">

                            </div>


                            <!-- ============================= -->
                            <!-- DATA DE NASCIMENTO -->
                            <!-- ============================= -->

                            <div class="col-12 col-md-6">

                                <label for="data_nascimento" class="form-label mb-1">
                                    Data de Nascimento
                                </label>

                                <input type="date" name="data_nascimento" id="data_nascimento" class="form-control"
                                    value="<?= htmlspecialchars($usuario->serv_dt_nascimento ?? '') ?>">

                            </div>


                            <!-- ============================= -->
                            <!-- TELEFONE -->
                            <!-- ============================= -->

                            <div class="col-12">

                                <label for="telefone" class="form-label mb-1">
                                    Telefone/Celular
                                </label>

                                <input type="text" name="telefone" id="telefone" class="form-control"
                                    placeholder="(00) 00000-0000" maxlength="15"
                                    value="<?= htmlspecialchars($usuario->tele_numero ?? '') ?>">

                            </div>

                        </div>

                    </div>

                </div>

            </form>

        </div>

    </div>

</div>


<!-- ============================= -->
<!-- PRÉVIA DA FOTO -->
<!-- ============================= -->

<script>

    const campoFoto = document.getElementById('foto');

    if (campoFoto) {

        campoFoto.addEventListener('change', function (event) {

            const arquivo = event.target.files[0];

            if (arquivo) {

                const imagem = document.getElementById('fotoPreview');

                imagem.src = URL.createObjectURL(arquivo);

            }

        });

    }

</script>


<!-- ============================= -->
<!-- MÁSCARA DO TELEFONE -->
<!-- ============================= -->

<script>

    const telefone = document.getElementById('telefone');


    function aplicarMascaraTelefone(input) {

        let valor = input.value.replace(/\D/g, '');


        // Máximo de 11 números

        if (valor.length > 11) {

            valor = valor.substring(0, 11);

        }


        // Celular

        if (valor.length > 10) {

            valor = valor.replace(
                /^(\d{2})(\d{5})(\d{0,4}).*/,
                '($1) $2-$3'
            );

        }

        // Telefone fixo

        else {

            valor = valor.replace(
                /^(\d{2})(\d{4})(\d{0,4}).*/,
                '($1) $2-$3'
            );

        }


        input.value = valor;

    }


    if (telefone) {

        // Aplica a máscara enquanto digita

        telefone.addEventListener(
            'input',
            function () {

                aplicarMascaraTelefone(this);

            }
        );


        // Aplica a máscara quando abre a página

        aplicarMascaraTelefone(telefone);

    }

</script>


<?php include '../App/Views/footer.php'; ?>