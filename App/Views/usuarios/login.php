<div class="container-login">

    <div class="card-login">

        <!-- LADO DA LOGO -->
        <div class="lado-logo">
            <img
                src="<?= URL ?>/public/img/logo_enfermaria.jpeg"
                alt="Logo Enfermaria"
            >
        </div>

        <!-- LADO DO FORMULÁRIO -->
        <div class="lado-form">

            <h2>REALIZAR LOGIN</h2>

            <!-- Mensagem da sessão -->
            <?= Sessao::mensagem('usuario') ?>

            <form action="<?= URL ?>/usuarios/login" method="post">

                <!-- E-MAIL -->
                <div class="campo-login">
                    <label
                        class="login-label"
                        for="email"
                    >
                        E-mail:
                    </label>

                    <input
                        type="email"
                        id="email"
                        name="email"
                        class="login-form-control <?= !empty($dados['email_erro']) ? 'is-invalid' : '' ?>"
                        placeholder="Digite seu e-mail"
                        value="<?= htmlspecialchars($dados['email'] ?? '') ?>"
                        required
                    >

                    <?php if (!empty($dados['email_erro'])): ?>
                        <div class="invalid-feedback">
                            <?= htmlspecialchars($dados['email_erro']) ?>
                        </div>
                    <?php endif; ?>
                </div>


                <!-- SENHA -->
                <div class="campo-login">
                    <label
                        class="login-label"
                        for="senha"
                    >
                        Senha:
                    </label>

                    <input
                        type="password"
                        id="senha"
                        name="senha"
                        class="login-form-control <?= !empty($dados['senha_erro']) ? 'is-invalid' : '' ?>"
                        placeholder="Digite sua senha"
                        required
                    >

                    <?php if (!empty($dados['senha_erro'])): ?>
                        <div class="invalid-feedback">
                            <?= htmlspecialchars($dados['senha_erro']) ?>
                        </div>
                    <?php endif; ?>
                </div>


                <!-- BOTÃO -->
                <button
                    type="submit"
                    class="btn-login"
                >
                    Realizar Login
                </button>

            </form>


            <!-- LINKS -->
            <div class="links">

                <p>
                    Esqueceu a senha?
                    <a href="<?= URL ?>/usuarios/esqueciMinhaSenha1">
                        Esqueci a senha
                    </a>
                </p>

                <p>
                    Ainda não está cadastrado?
                    <a href="<?= URL ?>/usuarios/cadastrar">
                        Cadastre-se
                    </a>
                </p>

            </div>

        </div>

    </div>

</div>
