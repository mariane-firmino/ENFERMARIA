<div class="container" style="max-width: 900px;">
    <div class="row bg-white rounded-4 shadow">
        <div class="col-md-5 d-flex justify-content-center align-items-center p-4">
            <img src="<?= URL ?>/public/img/logo_enfermaria.jpeg" class="img-fluid w-70" alt="Logo">
        </div>
        <div class="col-md-7 bg-success text-white p-4 rounded-end-4">
            <h3 class="text-center fw-bold mb-3">
                CADASTRO DE SERVIDOR
            </h3>
            <form class="row g-2">
                <div class="col-12">
                    <h6>Dados Pessoais</h6>
                </div>
                <div class="col-md-6">
                    <label class="form-label">Nome completo</label>
                    <input type="text" class="form-control">
                </div>
                <div class="col-md-6">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control">
                </div>
                <div class="col-md-6">
                    <label class="form-label">CPF</label>
                    <input type="text" class="form-control">
                </div>
                <div class="col-md-6">
                    <label class="form-label">Data de Nascimento</label>
                    <input type="date" class="form-control">
                </div>
                <div class="col-md-6">
                    <label class="form-label">Telefone/Celular</label>
                    <input type="text" class="form-control">
                </div>
                <div class="col-md-6">
                    <label class="form-label">SUAP</label>
                    <input type="text" class="form-control">
                </div>
                <div class="col-12 mt-2">
                    <h6>Dados Profissionais</h6>
                </div>
                <div class="col-12">
                    <label class="form-label">Função</label>
                    <select class="form-select">
                        <option selected>Selecione</option>
                        <option>Professor</option>
                        <option>Enfermeira</option>
                        <option>Psicologa</option>
                    </select>
                </div>
                <div class="col-12 mt-2">
                    <h6>Segurança</h6>
                </div>
                <div class="col-md-6">
                    <label class="form-label">Senha</label>
                    <input type="password" class="form-control">
                </div>
                <div class="col-md-6">
                    <label class="form-label">Confirmar Senha</label>
                    <input type="password" class="form-control">
                </div>
                <div class="col-12 mt-3">
                    <button type="submit" class="btn btn-danger w-100 rounded-pill">
                        Realizar Cadastro
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>