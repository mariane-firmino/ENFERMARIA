<nav class="navbar  fixed-top">
    <div class="container-fluid">

        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
            aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar"
            aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">

                <a href="<?= URL ?>/notificacoes/notificacao" class="btn btn-success position-relative">
                    <i class="bi bi-bell text-white fs-4"></i>

                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                        4
                    </span>
                </a>

                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                    aria-label="Close">
                </button>

            </div>

            <div class="offcanvas-body">

                <!--IMG de usuário-->
                <div class="d-flex align-items-center usuario-img gap-2 mb-4">
                    <img src="<?= URL ?>/img/user.avif" alt="User Avatar" class="rounded-circle" width="50" height="50">

                    <div>
                        <h6 class="mb-0 text-white">
                            <?= $_SESSION['usuario_nome']; ?>
                        </h6>
                        <small class="text-white">Administrador</small>
                    </div>
                </div>
                <!--FIM img user-->


                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="<?= URL ?>/paginas/home"><i class="bi bi-house-door-fill"></i>
                            HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="<?= URL ?>/paginas/perfil"><i class="bi bi-person-fill"></i>
                            PERFIL</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= URL ?>/alunos/aluno"><i class="bi bi-mortarboard-fill"></i> CADASTRO DE ALUNO</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= URL ?>/alunos/consulta"><i class="bi bi-file-earmark-person-fill"></i> CONSULTAR ALUNO</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="bi bi-calendar3"></i> CALENDÁRIO</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="bi bi-file-earmark-bar-graph-fill"></i> RELATÓRIO</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= URL ?>/paginas/configuracao"><i class="bi bi-gear-wide-connected"></i> CONFIGURAÇÕES</a>
                    </li>
                    <li class="nav-item"
                        data-bs-toggle="modal"
                        data-bs-target="#staticBackdrop"
                        style="cursor: pointer;">

                        <a class="nav-link">
                            <i class="bi bi-person-walking"></i>
                            SAIR
                        </a>

                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
<!-- ===================================== -->
<!-- MODAL -->
<!-- ===================================== -->

<div class="modal fade"
    id="staticBackdrop"
    data-bs-backdrop="static"
    data-bs-keyboard="false"
    tabindex="-1"
    aria-labelledby="staticBackdropLabel"
    aria-hidden="true">

    <div class="modal-dialog">

        <div class="modal-content">

            <div class="modal-header">

                <h1 class="modal-title fs-5" id="staticBackdropLabel">
                    Sair
                </h1>

                <button type="button"
                    class="btn-close"
                    data-bs-dismiss="modal"
                    aria-label="Close">
                </button>

            </div>

            <div class="modal-body">
                Tem certeza que deseja sair?
            </div>

            <div class="modal-footer">

                <button type="button"
                    class="btn btn-secondary"
                    data-bs-dismiss="modal">
                    Cancelar
                </button>

                <a href="<?= URL ?>/usuarios/logout"
                    class="btn btn-danger">
                    Sair
                </a>

            </div>

        </div>

    </div>

</div>