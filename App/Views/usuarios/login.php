<div class="card-login">
    <div class="lado-logo">
        <img src="<?= URL ?>/public/img/logo_enfermaria.jpeg" alt="Logo Enfermaria">
    </div>

    <div class="lado-form">
        <h2>REALIZAR LOGIN</h2>

        <form action="#" method="post">
            <label for="email">E-mail:</label>
            <input
                type="email"
                id="email"
                class="form-control"
                placeholder="Digite seu e-mail"
                required>

            <label for="senha">Senha:</label>
            <input
                type="password"
                id="senha"
                class="form-control"
                placeholder="Digite sua senha"
                required>

            <button type="submit" class="btn-login">
                Realizar Login
            </button>

        </form>

        <div class="links">
            <p>Esqueceu a senha? <a href="<?= URL ?>">Esqueci a senha</a></p>
            <p>Ainda não está cadastrado? <a href="<?= URL ?>/usuarios/cadastrar">Cadastre-se</a></p>
        </div>

    </div>

</div>