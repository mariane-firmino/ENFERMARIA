<?php
    if(!isset($_SESSION['usuario_id'])){
        header('Location: '.URL.'/login');
        exit;
    }

    include '../App/Views/menu.php';
?>
<div class="layout">
    <div class="container-fluid ps-4 pe-4 pt-5 pb-3">
        <div class="row align-items-start">

            <div class="col-8 linha-verde">
                <h1>Configuração</h1>
                <p>Gerencie a configuração do sistema.</p>
            </div>

            <div class="col-4 text-end">
                <img src="<?=URL?>/img/logo_enfermaria.jpeg" class="logo-home" alt="Logo">
            </div>

        </div>
    </div>

    <div class="container text-justify mt-4 mb-5">
        <div class="row align-items-start">
            <div class="col-12 col-lg-6">
                <div class="shadow p-3 mb-5 bg- rounded">
                    <div class="container text-justify">
                        <div class="row row-cols-1">
                            <div class="col">
                                <h4 class="text-success"><i class="bi bi-person text-success"></i> Perfil e Conta</h4>
                            </div>
                        </div>
                        <div class="row row-cols-2 border-top p-2">
                            <div class="col">
                                <b>Nome do Usuário</b>
                            </div>
                            <div class="col"><?= $_SESSION['usuario_nome'];?></div>
                        </div>
                        <div class="row row-cols-2 border-top p-2">
                            <div class="col">
                                <b>Email</b>
                            </div>
                            <div class="col"><?= $_SESSION['usuario_email'];?></div>
                        </div>
                        <div class="row row-cols-1 border-top p-2">
                            <div class="col">
                                <b>Senha</b>
                            </div>
                        </div>
                        <div class="row row-cols-1 border-top p-2">
                            <div class="col">
                                <b>Alterar Senha</b>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="shadow p-3 mb-5 rounded">
                    <div class="container text-justify">
                        <div class="row row-cols-1">
                            <div class="col">
                                <h4 class="text-success"><i class="bi bi-bell text-success"></i> Notificações</h4>
                            </div>
                        </div>
                        <div class="row row-cols-2 border-top p-2">
                            <div class="col">
                                <b>Avisos de Consulta</b>
                            </div>
                            <div class="col">
                                <div class="form-check form-switch float-end" >
                                    <input class="form-check-input" type="checkbox" role="switch"
                                        id="switchCheckDefault">
                                </div>
                            </div>
                        </div>
                        <div class="row row-cols-2 border-top p-2">
                            <div class="col">
                                <b>Novas Triagens</b>
                            </div>
                            <div class="col">
                                <div class="form-check form-switch float-end">
                                    <input class="form-check-input" type="checkbox" role="switch"
                                        id="switchCheckDefault">
                                </div>
                            </div>
                        </div>
                        <div class="row row-cols-2 border-top p-2">
                            <div class="col">
                                <b>Relatórios Prontos</b>
                            </div>
                            <div class="col">
                                <div class="form-check form-switch float-end">
                                    <input class="form-check-input" type="checkbox" role="switch"
                                        id="switchCheckDefault">
                                </div>
                            </div>
                        </div>
                        <div class="row row-cols-2 border-top p-2">
                            <div class="col">
                                <b>Comunicados Gerais</b>
                            </div>
                            <div class="col">
                                <div class="form-check form-switch float-end">
                                    <input class="form-check-input" type="checkbox" role="switch"
                                        id="switchCheckDefault">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row align-items-start">
            <div class="col-12 col-lg-6">
                <div class="shadow p-3 mb-5 rounded">
                    <div class="container text-justify">
                        <div class="row row-cols-1">
                            <div class="col">
                                <h4 class="text-success"><i class="bi bi-briefcase text-success"></i> Segurança</h4>
                            </div>
                        </div>
                        <div class="row row-cols-1 border-top p-2">
                            <div class="col">
                                <b>Sessão atual</b>
                            </div>
                        </div>
                        <div class="row row-cols-1 border-top p-2">
                            <div class="col">
                                <b>Gerenciar dispositivos</b>
                            </div>
                        </div>
                        <div class="row row-cols-1 border-top p-2">
                            <div class="col">
                                <b>Atividades recentes</b>
                            </div>
                        </div>
                        <div class="row row-cols-1 border-top p-2">
                            <div class="col">
                                <b>Encerrar sessão</b>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="shadow p-3 mb-5 rounded">
                    <div class="container text-justify">
                        <div class="row row-cols-1">
                            <div class="col">
                                <h4 class="text-success"><i class="bi bi-info-circle-fill text-success"></i> Sobre o Sistema</h4>
                            </div>
                        </div>
                        <div class="row row-cols-2 border-top p-2">
                            <div class="col">
                                <b>Instituição</b>
                            </div>
                            <div class="col">Instituto Federal de Rondônia</div>
                        </div>
                        <div class="row row-cols-2 border-top p-2">
                            <div class="col">
                                <b>Sistema</b>
                            </div>
                            <div class="col">Enfermaria - Sistema de Triagem</div>
                        </div>
                        <div class="row row-cols-2 border-top p-2">
                            <div class="col"><b>Licença</b></div>
                            <div class="col">Uso interno</div>
                        </div>
                        <div class="row row-cols-2 border-top p-2">
                            <div class="col"><b>Suporte</b></div>
                            <div class="col">email@tal | 99 9999-0000</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<?php include '../App/Views/footer.php' ?>