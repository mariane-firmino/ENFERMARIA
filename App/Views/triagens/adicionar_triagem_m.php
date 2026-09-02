<?php
if (!isset($_SESSION['usuario_id'])) {
    header('Location: ' . URL . '/login');
    exit;
}

include '../App/Views/menu.php';
?>
<div class="layout">
    <div class="container-fluid ps-4 pe-4 pt-5 pb-3">
        <div class="row align-items-start">

            <div class="col-8 linha-verde">
                <h1>Triagem do Estudante</h1>
                <p>Faça a triagem do estudante preenchendo os campos abaixo.</p>
            </div>

            <div class="col-4 text-end">
                <img src="<?= URL ?>/img/logo_enfermaria.jpeg" class="logo-home" alt="Logo">
            </div>
        </div>
    </div>

    <form action="" method="POST">
        <div class="shadow p-3 mb-5 rounded">

            <div class="container text-justify">
                <div class="row g-4">
                    <!-- titulo -->
                    <div class="col-12 col-md-6">
                        <h3>Situação Psicoemocional</h3>
                    </div>
                </div>
                <div class="row g-4 mt-3">
                    <!-- Pergunta 1 -->
                    <div class="col-12 col-md-6">
                        <label for="pergunta1" class="form-label">
                            Quando você olha no espelho, você fica: <sub>*</sub>
                        </label>

                        <select class="form-select" id="pergunta1" name="pergunta1" required>
                            <option value="" selected disabled>Selecione uma opção</option>
                            <option value="feliz">Satisfeito</option>
                            <option value="triste">Insatisfeito</option>
                            <option value="indiferente">Indiferente</option>
                        </select>
                    </div>

                    <!-- Pergunta 2 -->
                    <div class="col-12 col-md-6">
                        <label for="pergunta2" class="form-label">
                            Diariamente você se sente: <sub>*</sub>
                        </label>

                        <select class="form-select" id="pergunta2" name="pergunta2" required>
                            <option value="" selected disabled>Selecione uma opção</option>
                            <option value="feliz">Motivado</option>
                            <option value="triste">Desmotivado</option>
                            <option value="indiferente">Irritado</option>
                            <option value="indiferente">Calmo</option>
                        </select>
                    </div>
                </div>
                <div class="row g-4 mt-2">
                    <!-- Pergunta 3 -->
                    <div class="col-12 col-md-6">
                        <label for="pergunta3" class="form-label">
                            O que você mais gosta em si mesmo? <sub>*</sub>
                        </label>

                        <input type="text" class="form-control" id="pergunta3" name="pergunta3" required>
                    </div>

                    <!-- Pergunta 4 -->
                    <div class="col-12 col-md-6">
                        <label for="pergunta4" class="form-label">
                            Qual é o seu hobby? (O que você mais gosta de fazer?) <sub>*</sub>
                        </label>

                        <input type="text" class="form-control" id="pergunta4" name="pergunta4" required>
                    </div>
                </div>
                <div class="row g-4 mt-2">
                    <!-- Pergunta 5 -->
                    <div class="col-12 col-md-6">
                        <label for="pergunta5" class="form-label">
                            Você possui algum objetivo de vida? <sub>*</sub>
                        </label>

                        <select class="form-select" id="pergunta5" name="pergunta5" required>
                            <option value="" selected disabled>Selecione uma opção</option>
                            <option value="feliz">Sim</option>
                            <option value="triste">Não</option>
                            <option value="indiferente">Nenhum / Nunca pensei nisso antes</option>
                        </select>
                    </div>

                    <!-- Pergunta 6 -->
                    <div class="col-12 col-md-6">
                        <label for="pergunta6" class="form-label">
                            Geralmente, como são seus pensamentos? <sub>*</sub>
                        </label>

                        <select class="form-select" id="pergunta6" name="pergunta6" required>
                            <option value="" selected disabled>Selecione uma opção</option>
                            <option value="feliz">Bons / Motivadores / Esperançosos</option>
                            <option value="triste">Ruins / Desanimadores / Desesperançosos</option>
                            <option value="indiferente">Não sei</option>
                        </select>
                    </div>
                </div>

                <div class="row g-4 mt-4">
                    <!-- titulo -->
                    <div class="col-12 col-md-6">
                        <h3>Saúde Sexual e Reprodutiva de Adolescentes</h3>
                        <h5>Para meninos</h5>
                    </div>
                </div>
                <div class="row g-4 mt-3">
                    <!-- Pergunta 7 -->
                    <div class="col-12 col-md-6">
                        <label for="pergunta7" class="form-label">
                            Você possui vida sexual ativa?
                            ou (Já teve a primeira relação sexual?) <sub>*</sub>
                        </label>

                        <select class="form-select" id="pergunta7" name="pergunta7" required>
                            <option value="" selected disabled>Selecione uma opção</option>
                            <option value="feliz">Sim</option>
                            <option value="triste">Não</option>
                        </select>
                    </div>

                    <!-- Pergunta 8 -->
                    <div class="col-12 col-md-6">
                        <label for="pergunta8" class="form-label">
                            Quando você tem ralações sexuais, faz uso de
                            preservativo? <sub>*</sub>
                        </label>

                        <select class="form-select" id="pergunta8" name="pergunta8" required>
                            <option value="" selected disabled>Selecione uma opção</option>
                            <option value="feliz">Sim</option>
                            <option value="triste">Não</option>
                        </select>
                    </div>
                </div>
                <div class="row g-4 mt-2">
                    <!-- Pergunta 9 -->
                    <div class="col-12 col-md-6">
                        <label for="pergunta9" class="form-label">
                            Por quê?
                            (caso a responsta anterior seja NÃO)
                        </label>

                        <select class="form-select" id="pergunta9" name="pergunta9">
                            <option value="" selected disabled>Selecione uma opção</option>
                            <option value="feliz">Não QUER usar</option>
                            <option value="triste">Não SABE usar</option>
                            <option value="indiferente">Sente vergonha</option>
                        </select>
                    </div>

                    <!-- Pergunta 10 -->
                    <div class="col-12 col-md-6">
                        <label for="pergunta10" class="form-label">
                            Você sabe o que é IST?
                            (Infecção sexualmente transmissível) <sub>*</sub>
                        </label>

                        <select class="form-select" id="pergunta10" name="pergunta10" required>
                            <option value="" selected disabled>Selecione uma opção</option>
                            <option value="feliz">Sim</option>
                            <option value="triste">Não</option>
                            <option value="indiferente">Nunca ouvi falar</option>
                            <option value="indiferente">Já ouvi falar, mas não sei o que é</option>
                        </select>
                    </div>
                </div>

                <div class="row g-4 mt-2">
                    <!-- Pergunta 9 -->
                    <div class="col-12 col-md-6">
                        <button type="reset" class="btn btn-danger">
                            Deletar informações
                        </button>
                    </div>

                    <!-- Pergunta 10 -->
                    <div class="col-12 col-md-6">
                        <button type="submit" class="btn btn-success w-100">
                            Salvar informações
                        </button>
                    </div>
                </div>
            </div>

        </div>

    </form>

</div>
<?php include '../App/Views/footer.php' ?>