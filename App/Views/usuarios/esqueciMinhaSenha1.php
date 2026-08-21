<div class="container-login">
    <div class="container-gustavo">


        <div class="left">

            <img src="<?= URL ?>/public/img/logo_enfermaria.jpeg" alt="Logo Enfermaria" class="logo">

        </div>

        <div class="right">

            <h1>Esqueci minha senha</h1>

            <p>
                Informe seu e-mail cadastrado e enviaremos
                <br>
                um código de recuperação
            </p>

            <form>

                <label>E-mail:</label>

                <input
                    type="email"
                    placeholder=""
                    required
                >

                <button type="submit">
                    Enviar link de recuperação
                    <i class="fa-solid fa-arrow-right"></i>
                </button>

            </form>

            <div class="divisor">

                <hr>

                <span>ou</span>

                <hr>

            </div>

            <a href="<?= URL ?>/paginas/index">voltar para login</a>

        </div>

    </div>
</div>

