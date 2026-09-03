<div class="main_ems">
<div class="container_esqueci_minha_seha">
    <div class="left_esqueci_minha_seha">
        <img src="<?=URL?>/img/logo_enfermaria.jpeg" class="logo_esqueci_minha_seha">
    </div>

    <div class="right_esqueci_minha_seha">
        <h1>Esqueci minha senha</h1>
        <p>
            Informe seu e-mail cadastrado e enviaremos
            <br>
            um código de recuperação
        </p>

            <form>
                <label class="ems-label">E-mail:</label>
            <input
                type="email"
                placeholder=""
                required
                class="ems-input"
            >
            <button type="submit" class="ems-button">
                Enviar link de recuperação
                <i class="fa-solid fa-arrow-right"></i>
            </button>
        </form>
        <div class="divisor_esqueci_minha_seha">
            <hr>
            <span>ou</span>
            <hr>
        </div>

        <a class="ems-a" href="<?=URL?>/usuarios/login">voltar para login</a>
    </div>
</div>
</div>