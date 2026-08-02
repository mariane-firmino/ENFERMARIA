<div class="container" style="max-width: 900px;">
    <div class="row bg-white rounded-4 shadow">
        <div class="col-md-5 d-flex justify-content-center align-items-center p-4">
            <img src="<?= URL ?>/public/img/logo_enfermaria.jpeg" class="img-fluid w-70" alt="Logo">
        </div>
        <div class="col-md-7 bg-success text-white p-4 rounded-end-4">
            <h3 class="text-center fw-bold mb-3">
                CADASTRO DE SERVIDOR
            </h3>
            <?= Sessao::mensagem('usuarios') ?>
            <form class="row g-2" action="<?= URL ?>/usuarios/cadastrar" method="POST">
                <div class="col-12">
                    <h6>Dados Pessoais</h6>
                </div>
                <div class="col-md-6">
                    <label class="form-label">Nome completo</label>
                    <input type="text" name="nome" class="form-control <?= !empty($dados['nome_erro']) ? 'is-invalid' : '' ?>" placeholder="Digite seu nome completo" value="<?= isset($dados['nome']) ? $dados['nome'] : '' ?>">
                    <?php if (!empty($dados['nome_erro'])) : ?>
                        <div class="invalid-feedback">
                            <?= $dados['nome_erro'] ?>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="col-md-6">
                    <label class="form-label">Email</label>
                    <input type="email" name="email" class="form-control <?= !empty($dados['email_erro']) ? 'is-invalid' : '' ?>" placeholder="Digite seu email" value="<?= isset($dados['email']) ? $dados['email'] : '' ?>">
                    <?php if (!empty($dados['email_erro'])) : ?>
                        <div class="invalid-feedback">
                            <?= $dados['email_erro'] ?>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="col-md-6">
                    <label class="form-label">CPF</label>
                    <input type="text" id="cpf" maxlength="14" name="cpf" class="form-control <?= !empty($dados['cpf_erro']) ? 'is-invalid' : '' ?>" placeholder="Digite seu CPF" value="<?= isset($dados['cpf']) ? $dados['cpf'] : '' ?>">
                    <?php if (!empty($dados['cpf_erro'])) : ?>
                        <div class="invalid-feedback">
                            <?= $dados['cpf_erro'] ?>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="col-md-6">
                    <label class="form-label">Data de Nascimento</label>
                    <input type="date" name="data_nascimento" class="form-control <?= !empty($dados['data_nascimento_erro']) ? 'is-invalid' : '' ?>" placeholder="Selecione a data de nascimento">
                    <?php if (!empty($dados['data_nascimento_erro'])) : ?>
                        <div class="invalid-feedback">
                            <?= $dados['data_nascimento_erro'] ?>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="col-md-6">
                    <label class="form-label">Telefone/Celular</label>
                    <input type="text" id="telefone" maxlength="15" name="telefone" class="form-control <?= !empty($dados['telefone_erro']) ? 'is-invalid' : '' ?>" placeholder="Digite seu telefone/celular" value="<?= isset($dados['telefone']) ? $dados['telefone'] : '' ?>">
                    <?php if (!empty($dados['telefone_erro'])) : ?>
                        <div class="invalid-feedback">
                            <?= $dados['telefone_erro'] ?>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="col-md-6">
                    <label class="form-label">SIAPE</label>
                    <input type="text" name="siape" maxlength="7" class="form-control <?= !empty($dados['siape_erro']) ? 'is-invalid' : '' ?>" placeholder="Digite seu SIAPE" value="<?= isset($dados['siape']) ? $dados['siape'] : '' ?>">
                    <?php if (!empty($dados['siape_erro'])) : ?>
                        <div class="invalid-feedback">
                            <?= $dados['siape_erro'] ?>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="col-12 mt-2">
                    <h6>Dados Profissionais</h6>
                </div>
                <div class="col-12">
                    <label class="form-label">Função</label>
                    <select class="form-select <?= !empty($dados['funcao_erro']) ? 'is-invalid' : '' ?>" name="funcao">
                        <option selected>Selecione</option>
                        <?php foreach ($dados['funcoes'] as $funcao): ?>
                            <option value="<?= $funcao->func_id; ?>">
                                <?= $funcao->func_nome; ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                    <?php if (!empty($dados['funcao_erro'])) : ?>
                        <div class="invalid-feedback">
                            <?= $dados['funcao_erro'] ?>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="col-12 mt-2">
                    <h6>Segurança</h6>
                </div>
                <div class="col-md-6">
                    <label class="form-label">Senha</label>
                    <input type="password" name="senha" class="form-control <?= !empty($dados['senha_erro']) ? 'is-invalid' : '' ?>" placeholder="Digite sua senha">
                    <?php if (!empty($dados['senha_erro'])) : ?>
                        <div class="invalid-feedback">
                            <?= $dados['senha_erro'] ?>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="col-md-6">
                    <label class="form-label">Confirmar Senha</label>
                    <input type="password" name="confirmar_senha" class="form-control <?= !empty($dados['confirmar_senha_erro']) ? 'is-invalid' : '' ?>" placeholder="Confirme sua senha">
                    <?php if (!empty($dados['confirmar_senha_erro'])) : ?>
                        <div class="invalid-feedback">
                            <?= $dados['confirmar_senha_erro'] ?>
                        </div>
                    <?php endif; ?>
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