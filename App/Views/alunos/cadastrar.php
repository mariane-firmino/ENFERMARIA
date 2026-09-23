<?php
if (!isset($_SESSION['usuario_id'])) {
    header('Location: ' . URL . '/login');
    exit;
}

include '../App/Views/menu.php';

if (!function_exists('valor')) {
    function valor($dados, $campo)
    {
        return htmlspecialchars($dados[$campo] ?? '');
    }
}

if (!function_exists('erro')) {
    function erro($dados, $campo)
    {
        if (!empty($dados[$campo . '_erro'])) {
            echo '<div class="text-danger small mt-1">' . htmlspecialchars($dados[$campo . '_erro']) . '</div>';
        }
    }
}

if (!function_exists('opcoes')) {
    function opcoes($atual, array $lista)
    {
        foreach ($lista as $valor) {
            $selecionado = ($atual === $valor) ? ' selected' : '';
            echo '<option value="' . htmlspecialchars($valor) . '"' . $selecionado . '>' . htmlspecialchars($valor) . '</option>';
        }
    }
}
?>
<div class="layout">
    <div class="container-fluid ps-4 pe-4 pt-5 pb-3">
        <div class="row align-items-start">
            <div class="col-8 linha-verde">
                <h1>Cadastro de Aluno</h1>
                <p>Faça o cadastro dos alunos nessa página.</p>
            </div>
            <div class="col-4 text-end">
                <img src="<?= URL ?>/img/logo_enfermaria.jpeg" class="logo-home" alt="Logo">
            </div>
        </div>
    </div>

    <nav style="--bs-breadcrumb-divider: '>';" class="m-3" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= URL ?>/alunos/aluno">Alunos</a></li>
            <li class="breadcrumb-item active" aria-current="page">Cadastrar Aluno</li>
        </ol>
    </nav>

    <div class="container mt-5 mb-5">
        <div class="card p-4 shadow mx-auto" style="max-width: 1200px;">

            <h2 class="mt-4 fs-3">Cadastro de aluno</h2>

            <form class="row g-3" method="post" action="<?= URL ?>/alunos/cadastrar">

                <div class="col-md-6">
                    <label for="inputnomealuno" class="form-label">Nome aluno</label>
                    <input type="text" class="form-control" id="inputnomealuno" name="nome" value="<?= valor($dados, 'nome') ?>">
                    <?php erro($dados, 'nome'); ?>
                </div>
                <div class="col-md-6">
                    <label for="inputdatadenascimento" class="form-label">Data de nascimento</label>
                    <input type="date" class="form-control" id="inputdatadenascimento" name="data_nascimento" value="<?= valor($dados, 'data_nascimento') ?>">
                    <?php erro($dados, 'data_nascimento'); ?>
                </div>
                <div class="col-md-6">
                    <label for="inputcurso" class="form-label">Curso</label>
                    <select id="inputcurso" class="form-select" name="curso">
                        <option value="" disabled <?= empty($dados['curso']) ? 'selected' : '' ?>>Escolha seu curso</option>
                        <?php opcoes($dados['curso'] ?? '', [
                            'Técnico em informática',
                            'Manutenção e Suporte em Informática',
                            'Biotecnologia',
                            'Enfermagem',
                            'Licenciatura em Ciências',
                            'Licenciatura em Biologia',
                        ]); ?>
                    </select>
                    <?php erro($dados, 'curso'); ?>
                </div>
                <div class="col-md-4">
                    <label for="inputturno" class="form-label">Turno</label>
                    <select id="inputturno" class="form-select" name="turno">
                        <option value="" disabled <?= empty($dados['turno']) ? 'selected' : '' ?>>Escolha seu turno</option>
                        <?php opcoes($dados['turno'] ?? '', ['Matutino', 'Vespertino', 'Noturno']); ?>
                    </select>
                    <?php erro($dados, 'turno'); ?>
                </div>
                <div class="col-md-2">
                    <label for="inputanoturma" class="form-label">Ano da turma</label>
                    <input type="text" class="form-control" id="inputanoturma" name="ano_turma" maxlength="2" placeholder="Ex: 26" value="<?= valor($dados, 'ano_turma') ?>">
                    <?php erro($dados, 'ano_turma'); ?>
                </div>
                <div class="col-md-6">
                    <label for="inputsexo" class="form-label">Qual seu sexo biológico?</label>
                    <select id="inputsexo" class="form-select" name="sexo">
                        <option value="" disabled <?= empty($dados['sexo']) ? 'selected' : '' ?>>Escolha seu sexo</option>
                        <?php opcoes($dados['sexo'] ?? '', ['Masculino', 'Feminino', 'Outro']); ?>
                    </select>
                    <?php erro($dados, 'sexo'); ?>
                </div>
                <div class="col-md-6">
                    <label for="inputnumerodematricula" class="form-label">Número de matrícula</label>
                    <input type="text" class="form-control" maxlength="13" id="inputnumerodematricula" name="matricula" value="<?= valor($dados, 'matricula') ?>">
                    <?php erro($dados, 'matricula'); ?>
                </div>
                <div class="col-md-6">
                    <label for="inputtelefonealuno" class="form-label">Telefone do aluno (WhatsApp)</label>
                    <input type="text" class="form-control" maxlength="14" id="inputtelefonealuno" name="telefone_aluno" value="<?= valor($dados, 'telefone_aluno') ?>">
                </div>
                <div class="col-md-6">
                    <label for="inputnomeresponsavel" class="form-label">Nome do responsável</label>
                    <input type="text" class="form-control" id="inputnomeresponsavel" name="nome_responsavel" value="<?= valor($dados, 'nome_responsavel') ?>">
                    <?php erro($dados, 'nome_responsavel'); ?>
                </div>
                <div class="col-md-6">
                    <label for="inputtelefonedosresponsaveis" maxlength="14" class="form-label">Telefone dos responsáveis (WhatsApp)</label>
                    <input type="text" class="form-control" id="inputtelefonedosresponsaveis" name="telefone_responsavel" value="<?= valor($dados, 'telefone_responsavel') ?>">
                </div>

                <h3 class="mt-4 fs-3">Educação Formal</h3>

                <div class="col-md-6">
                    <label for="inputtipoescola" class="form-label">Tipo de escola que estudou antes do IFRO:</label>
                    <select id="inputtipoescola" class="form-select" name="tipo_escola">
                        <option value="" disabled <?= empty($dados['tipo_escola']) ? 'selected' : '' ?>>Escolha o tipo de escola</option>
                        <?php opcoes($dados['tipo_escola'] ?? '', ['Escola pública', 'Escola privada', 'Escola estadual']); ?>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="inputporquenao" class="form-label">Porque escolheu o IFRO para estudar?</label>
                    <select id="inputporquenao" class="form-select" name="motivo_ifro">
                        <option value="" disabled <?= empty($dados['motivo_ifro']) ? 'selected' : '' ?>>Escolha o motivo</option>
                        <?php opcoes($dados['motivo_ifro'] ?? '', [
                            'Qualidade do ensino',
                            'Proximidade da escola',
                            'Programa de bolsas',
                            'Recomendação de outros',
                        ]); ?>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="inputjareprovou" class="form-label">Você já reprovou antes?</label>
                    <select id="inputjareprovou" class="form-select" name="ja_reprovou">
                        <option value="" disabled <?= empty($dados['ja_reprovou']) ? 'selected' : '' ?>>Escolha a opção</option>
                        <?php opcoes($dados['ja_reprovou'] ?? '', ['Sim', 'Não']); ?>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="inputquantasvezes" class="form-label">Quantas vezes reprovou?</label>
                    <input type="text" class="form-control" id="inputquantasvezes" name="quantas_vezes" value="<?= valor($dados, 'quantas_vezes') ?>">
                </div>
                <div class="col-md-6">
                    <label for="inputestudafora" class="form-label">Você estuda fora do horário de aula? (Em casa)</label>
                    <select id="inputestudafora" class="form-select" name="estuda_fora">
                        <option value="" disabled <?= empty($dados['estuda_fora']) ? 'selected' : '' ?>>Escolha a opção</option>
                        <?php opcoes($dados['estuda_fora'] ?? '', ['Sim', 'Não']); ?>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="inputquantotempo" class="form-label">Quanto tempo você reserva para estudar fora da escola?</label>
                    <input type="text" class="form-control" id="inputquantotempo" name="quanto_tempo" value="<?= valor($dados, 'quanto_tempo') ?>">
                </div>

                <div class="col-6">
                    <label class="form-label">Em uma escala (0-10)<br>O quanto você gosta do curso que está matriculado?</label>
                    <div class="row">
                        <?php for ($i = 0; $i <= 10; $i++): ?>
                            <div class="col-auto form-check">
                                <input class="form-check-input" type="radio" name="nota_curso" id="curso<?= $i ?>" value="<?= $i ?>" <?= (isset($dados['nota_curso']) && $dados['nota_curso'] !== '' && (int) $dados['nota_curso'] === $i) ? 'checked' : '' ?>>
                                <label class="form-check-label" for="curso<?= $i ?>"><?= $i ?></label>
                            </div>
                        <?php endfor; ?>
                    </div>
                </div>
                <div class="col-6">
                    <label class="form-label">Em uma escala (0-10)<br>O quanto você sente-se motivado para estudar?</label>
                    <div class="row">
                        <?php for ($i = 0; $i <= 10; $i++): ?>
                            <div class="col-auto form-check">
                                <input class="form-check-input" type="radio" name="nota_motivacao" id="motivacao<?= $i ?>" value="<?= $i ?>" <?= (isset($dados['nota_motivacao']) && $dados['nota_motivacao'] !== '' && (int) $dados['nota_motivacao'] === $i) ? 'checked' : '' ?>>
                                <label class="form-check-label" for="motivacao<?= $i ?>"><?= $i ?></label>
                            </div>
                        <?php endfor; ?>
                    </div>
                </div>

                <div class="col-md-6">
                    <label for="inputatendimento" class="form-label">Comparece ao atendimento indivídual com o professor?</label>
                    <select id="inputatendimento" class="form-select" name="atendimento">
                        <option value="" disabled <?= empty($dados['atendimento']) ? 'selected' : '' ?>>Escolha a opção</option>
                        <?php opcoes($dados['atendimento'] ?? '', ['Sim', 'Não']); ?>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="inputatendimentoporque" class="form-label">Por quê? (Caso a resposta anterior seja "Não")</label>
                    <input type="text" class="form-control" id="inputatendimentoporque" name="atendimento_porque" value="<?= valor($dados, 'atendimento_porque') ?>">
                </div>

                <h4 class="mt-4 fs-3">Histórico de Saúde</h4>

                <div class="col-md-6">
                    <label for="inputacessosaude" class="form-label">Como é realizado seu acesso ao serviço de saúde?</label>
                    <select id="inputacessosaude" class="form-select" name="acesso_saude">
                        <option value="" disabled <?= empty($dados['acesso_saude']) ? 'selected' : '' ?>>Escolha</option>
                        <?php opcoes($dados['acesso_saude'] ?? '', ['SUS', 'Privado', 'Convênio']); ?>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="inputalergiaalimentar" class="form-label">Possui alguma alergia alimentar ou algum tipo restrição alimentar?</label>
                    <select id="inputalergiaalimentar" class="form-select" name="alergia_alimentar">
                        <option value="" disabled <?= empty($dados['alergia_alimentar']) ? 'selected' : '' ?>>Escolha</option>
                        <?php opcoes($dados['alergia_alimentar'] ?? '', ['Sim', 'Não', 'Não sei']); ?>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="inputalergiaqual" class="form-label">Se respondeu SIM, quais alimentos causam alergia ou restrição?</label>
                    <input type="text" class="form-control" id="inputalergiaqual" name="alergia_qual" value="<?= valor($dados, 'alergia_qual') ?>">
                </div>
                <div class="col-md-6">
                    <label for="inputdoencacronica" class="form-label">Você possui alguma doença crônica ou pré-existente?</label>
                    <select id="inputdoencacronica" class="form-select" name="doenca_cronica">
                        <option value="" disabled <?= empty($dados['doenca_cronica']) ? 'selected' : '' ?>>Escolha</option>
                        <?php opcoes($dados['doenca_cronica'] ?? '', ['Sim', 'Não', 'Não sei']); ?>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="inputdoencaqual" class="form-label">Diga qual doença? Caso sua resposta anterior tenha sido SIM.</label>
                    <input type="text" class="form-control" id="inputdoencaqual" name="doenca_qual" value="<?= valor($dados, 'doenca_qual') ?>">
                </div>
                <div class="col-md-6">
                    <label for="inputmedicacaocontinua" class="form-label">Você faz uso contínuo ou regular de algum tipo de medicação?</label>
                    <select id="inputmedicacaocontinua" class="form-select" name="medicacao_continua">
                        <option value="" disabled <?= empty($dados['medicacao_continua']) ? 'selected' : '' ?>>Escolha</option>
                        <?php opcoes($dados['medicacao_continua'] ?? '', ['Sim', 'Não']); ?>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="inputmedicacaoqual" class="form-label">Qual medicação?</label>
                    <input type="text" class="form-control" id="inputmedicacaoqual" name="medicacao_qual" value="<?= valor($dados, 'medicacao_qual') ?>">
                </div>
                <div class="col-md-6">
                    <label for="inputacompanhamentopsi" class="form-label">Já realizou acompanhamento psicológico/psiquiátrico?</label>
                    <select id="inputacompanhamentopsi" class="form-select" name="acompanhamento_psi">
                        <option value="" disabled <?= empty($dados['acompanhamento_psi']) ? 'selected' : '' ?>>Escolha</option>
                        <?php opcoes($dados['acompanhamento_psi'] ?? '', ['Sim', 'Não']); ?>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="inputcartaovacina" class="form-label">Você tem cartão de vacina?</label>
                    <select id="inputcartaovacina" class="form-select" name="cartao_vacina">
                        <option value="" disabled <?= empty($dados['cartao_vacina']) ? 'selected' : '' ?>>Escolha</option>
                        <?php opcoes($dados['cartao_vacina'] ?? '', ['Sim', 'Não']); ?>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="inputjainternado" class="form-label">Alguma vez ja ficou internado?</label>
                    <select id="inputjainternado" class="form-select" name="ja_internado">
                        <option value="" disabled <?= empty($dados['ja_internado']) ? 'selected' : '' ?>>Escolha</option>
                        <?php opcoes($dados['ja_internado'] ?? '', ['Sim', 'Não']); ?>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="inputinternadomotivo" class="form-label">Por qual motivo? Caso sua resposta tenha sido SIM, na questão anterior</label>
                    <input type="text" class="form-control" id="inputinternadomotivo" name="internado_motivo" value="<?= valor($dados, 'internado_motivo') ?>">
                </div>
                <div class="col-md-6">
                    <label for="inputjacirurgia" class="form-label">Já passou por alguma cirurgia antes?</label>
                    <select id="inputjacirurgia" class="form-select" name="ja_cirurgia">
                        <option value="" disabled <?= empty($dados['ja_cirurgia']) ? 'selected' : '' ?>>Escolha</option>
                        <?php opcoes($dados['ja_cirurgia'] ?? '', ['Sim', 'Não']); ?>
                    </select>
                </div>
                <div class="col-md-12">
                    <label for="inputcirurgiaqual" class="form-label">Qual tipo de cirurgia você foi submetido? Caso sua resposta tenha sido SIM, na questão anterior.</label>
                    <input type="text" class="form-control" id="inputcirurgiaqual" name="cirurgia_qual" value="<?= valor($dados, 'cirurgia_qual') ?>">
                </div>

                <h5 class="mt-4 fs-3">Hábitos de vida</h5>

                <div class="col-md-6">
                    <label for="inputpadraosono" class="form-label">Como é o seu padrão de sono?</label>
                    <select id="inputpadraosono" class="form-select" name="padrao_sono">
                        <option value="" disabled <?= empty($dados['padrao_sono']) ? 'selected' : '' ?>>Escolha</option>
                        <?php opcoes($dados['padrao_sono'] ?? '', [
                            'Restaurador',
                            'Não restaurador',
                            'Insônia (perde o sono e não consegue voltar a dormir)',
                            'Sonolência diurna',
                        ]); ?>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="inputrefeicoesdia" class="form-label">Quantas refeições você faz por dia?</label>
                    <select id="inputrefeicoesdia" class="form-select" name="refeicoes_dia">
                        <option value="" disabled <?= empty($dados['refeicoes_dia']) ? 'selected' : '' ?>>Escolha</option>
                        <?php opcoes($dados['refeicoes_dia'] ?? '', ['3', 'Mais que 3', 'Menos que 3']); ?>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="inputalimentacaohabitual" class="form-label">O que você, geralmente, come durante as principais refeições do seu dia?</label>
                    <input type="text" class="form-control" id="inputalimentacaohabitual" name="alimentacao_habitual" value="<?= valor($dados, 'alimentacao_habitual') ?>">
                </div>
                <div class="col-md-6">
                    <label for="inputfuma" class="form-label">Você fuma algum tipo de cigarro?</label>
                    <select id="inputfuma" class="form-select" name="fuma">
                        <option value="" disabled <?= empty($dados['fuma']) ? 'selected' : '' ?>>Escolha</option>
                        <?php opcoes($dados['fuma'] ?? '', ['Sim', 'Não']); ?>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="inputbebidaalcoolica" class="form-label">Você consome algum tipo de bebida alcoólica?</label>
                    <select id="inputbebidaalcoolica" class="form-select" name="bebida_alcoolica">
                        <option value="" disabled <?= empty($dados['bebida_alcoolica']) ? 'selected' : '' ?>>Escolha</option>
                        <?php opcoes($dados['bebida_alcoolica'] ?? '', ['Sim', 'Não']); ?>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="inputpaissabem" class="form-label">Seus pais sabem disso? Caso sua resposta tenha sido SIM, nas questões anteriores.</label>
                    <select id="inputpaissabem" class="form-select" name="pais_sabem">
                        <option value="" disabled <?= empty($dados['pais_sabem']) ? 'selected' : '' ?>>Escolha</option>
                        <?php opcoes($dados['pais_sabem'] ?? '', ['Sim', 'Não']); ?>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="inputdrogasilicitas" class="form-label">Já fez uso ou teve contato com algum tipo de droga ilícita?</label>
                    <select id="inputdrogasilicitas" class="form-select" name="drogas_ilicitas">
                        <option value="" disabled <?= empty($dados['drogas_ilicitas']) ? 'selected' : '' ?>>Escolha</option>
                        <?php opcoes($dados['drogas_ilicitas'] ?? '', ['Sim', 'Não']); ?>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="inputdrogasqual" class="form-label">Qual/quais? Caso sua resposta tenha sido SIM, na questão anterior.</label>
                    <input type="text" class="form-control" id="inputdrogasqual" name="drogas_qual" value="<?= valor($dados, 'drogas_qual') ?>">
                </div>
                <div class="col-md-6">
                    <label for="inputatividadefisica" class="form-label">Pratica algum tipo de atividade física?</label>
                    <select id="inputatividadefisica" class="form-select" name="atividade_fisica">
                        <option value="" disabled <?= empty($dados['atividade_fisica']) ? 'selected' : '' ?>>Escolha</option>
                        <?php opcoes($dados['atividade_fisica'] ?? '', ['Sim', 'Não']); ?>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="inputfrequenciaatividade" class="form-label">Com qual frequência você pratica atividade física na semana?</label>
                    <select id="inputfrequenciaatividade" class="form-select" name="frequencia_atividade">
                        <option value="" disabled <?= empty($dados['frequencia_atividade']) ? 'selected' : '' ?>>Escolha</option>
                        <?php opcoes($dados['frequencia_atividade'] ?? '', ['3x por semana', '(+) de 3x por semana', '(-) de 3x por semana']); ?>
                    </select>
                </div>
                <div class="col-md-12">
                    <label for="inputbanhosdia" class="form-label">Quantos banhos você toma por dia?</label>
                    <select id="inputbanhosdia" class="form-select" name="banhos_dia">
                        <option value="" disabled <?= empty($dados['banhos_dia']) ? 'selected' : '' ?>>Escolha</option>
                        <?php opcoes($dados['banhos_dia'] ?? '', ['1 por dia', '2 por dia', '3 por dia', 'Mais de 3 por dia']); ?>
                    </select>
                </div>

                <div class="d-flex justify-content-between align-items-center mt-5">
                    <button type="reset" class="btn btn-link text-danger text-decoration-none">
                        Limpar formulário
                    </button>
                    <button type="submit" class="btn btn-success">
                        Cadastrar Estudante
                    </button>
                </div>
            </form>

        </div>
    </div>
</div>
<?php include '../App/Views/footer.php' ?>