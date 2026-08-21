<div class="container-login">
    <div class="container-gustavo">
        <div class="left">
            <img src="<?= URL ?>/public/img/logo_enfermaria.jpeg" alt="Logo Enfermaria" class="logo">
        </div>
        <div class="right">
            <h1>Esqueci minha senha</h1>

            <p>
                Enviamos um código de recuperação para o seu e-mail.<br>
                Verifique e insira o código abaixo.
            </p>

            <form>

                <label>Link de recuperação:</label>

                <input type="text" placeholder="">

                <label class="titulo-aviso">
                    Não recebeu o link?
                </label>

                <div class="aviso">

                    <span class="icone">⚠</span>

                    <span>
                        Verifique sua caixa de entrada ou solicite um novo link
                    </span>

                </div>

                <button type="submit">
                    Validar link →
                </button>

            </form>

            <a href="<?= URL ?>/paginas/index">Reenviar link</a>

        </div>

    </div>

</div>