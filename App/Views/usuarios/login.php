<div class="container-login">


<div class="card-login">
    <div class="lado-logo">
        <img src="<?= URL ?>/public/img/logo_enfermaria.jpeg" alt="Logo Enfermaria">
    </div>

    <div class="lado-form">
        <h2>REALIZAR LOGIN</h2>
         <?=Sessao::mensagem('usuario')?>
        <form action="<?=URL?>/usuarios/login" method="post">
            <label for="email">E-mail:</label>
            <input
                type="email"
                id="email"
                name="email"
                class="form-control <?= $dados['email_erro'] ? 'is-invalid' : '' ?>"
                
                placeholder="Digite seu e-mail"
                required>
                <div class='invalid-feedback'>
                        <?= $dados['email_erro'] ?>
                    </div>
            <label for="senha">Senha:</label>
            <input
                type="password"
                id="senha"
                name="senha"
                class="form-control <?= $dados['senha_erro'] ? 'is-invalid' : '' ?>"
                placeholder="Digite sua senha"
                required>
                <div class="invalid-feedback">
                        <?= $dados['senha_erro'] ?>
                    </div>
            <button type="submit" class="btn-login">
                Realizar Login
            </button>

        </form>

        <div class="links">
            <p>Esqueceu a senha? <a href="<?= URL ?>/usuarios/esqueciMinhaSenha1">Esqueci a senha</a></p>
            <p>Ainda não está cadastrado? <a href="<?= URL ?>/usuarios/cadastrar">Cadastre-se</a></p>
        </div>

    </div>

</div>
</div>
