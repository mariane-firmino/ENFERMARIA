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
                <h1>Cadastro de Aluno</h1>
                <p>Faça o cadastro dos alunos nessa página.</p>
            </div>
            <div class="col-4 text-end">
                <img src="<?= URL ?>/img/logo_enfermaria.jpeg" class="logo-home" alt="Logo">
            </div>
        </div>
    </div>

    <div class="container mt-5 mb-5">
        <div class="card p-4 shadow mx-auto" style="max-width: 1200px;">

            <h2 class="mt-4 fs-3">Cadastro de aluno</h2>

            <form class="row g-3">
                <div class="col-md-6">
                    <label for="inputnomealuno" class="form-label">Nome aluno</label>
                    <input type="text" class="form-control" id="inputnomealuno">
                </div>
                <div class="col-md-6">
                    <label for="inputdatadenascimento" class="form-label">Data de nascimento</label>
                    <input type="date" class="form-control" id="inputdatadenascimento">
                </div>
                <div class="col-md-6">
                    <label for="inputcurso" class="form-label">Curso</label>
                    <select id="inputcurso" class="form-select">
                        <option selected>Escolha seu curso</option>
                        <option>Técnico em informática</option>
                        <option>Manutenção e Suporte em Informática</option>
                        <option>Biotecnologia</option>
                        <option>Enfermagem</option>
                        <option>Licenciatura em Ciências</option>
                        <option>Licenciatura em Biologia</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="inputturno" class="form-label">Turno</label>
                    <select id="inputturno" class="form-select">
                        <option selected>Escolha seu turno</option>
                        <option>Matutino</option>
                        <option>Vespertino</option>
                        <option>Noturno</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="inputturno" class="form-label">Qual seu sexo biológico?</label>
                    <select id="inputturno" class="form-select">
                        <option selected>Escolha seu sexo</option>
                        <option>Masculino</option>
                        <option>Feminino</option>
                        <option>Outro</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="inputnumerodematricula" class="form-label">Número de matrícula</label>
                    <input type="text" class="form-control" id="inputnumerodematricula">
                </div>
                <div class="col-md-6">
                    <label for="inputtelefonealuno" class="form-label">Telefone do aluno (WhatsApp)</label>
                    <input type="text" class="form-control" id="inputtelefonealuno">
                </div>
                <div class="col-md-6">
                    <label for="inputtelefonedosresponsaveis" class="form-label">Telefone dos responsáveis (WhatsApp)</label>
                    <input type="text" class="form-control" id="inputtelefonedosresponsaveis">
                </div>
                <h3 class="mt-4 fs-3">Educação Formal</h3>
                <form class="row g-3">


                    <div class="col-md-6">
                        <label for="inputtipoescola" class="form-label">Tipo de escola que estudou antes do IFRO:</label>
                        <select id="inputtipoescola" class="form-select">
                            <option selected>Escolha o tipo de escola</option>
                            <option>Escola pública</option>
                            <option>Escola privada</option>
                            <option>Escola estadual</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="inputporquenao" class="form-label">Porque escolheu o IFRO para estudar?</label>
                        <select id="inputporquenao" class="form-select">
                            <option selected>Escolha o motivo</option>
                            <option>Qualidade do ensino</option>
                            <option>Proximidade da escola</option>
                            <option>Programa de bolsas</option>
                            <option>Recomendação de outros</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="inputjareprovou" class="form-label">Você já reprovou antes?</label>
                        <select id="inputjareprovou" class="form-select">
                            <option selected>Escolha a opção</option>
                            <option>Sim</option>
                            <option>Não</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="inputquantasvezes" class="form-label">Quantas vezes reprovou?</label>
                        <input type="text" class="form-control" id="inputquantasvezes">
                    </div>
                    <div class="col-md-6">
                        <label for="inputestudafora" class="form-label">Você estuda fora do horário de aula? (Em casa)</label>
                        <select id="inputestudafora" class="form-select">
                            <option selected>Escolha a opção</option>
                            <option>Sim</option>
                            <option>Não</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="inputquantotempo" class="form-label">Quanto tempo você reserva para estudar fora da escola?</label>
                        <input type="text" class="form-control" id="inputquantotempo">
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <label class="form-label">
                                Em uma escala (0-10)<br>
                                O quanto você gosta do curso que está matriculado?
                            </label>
                            <div class="row">
                                <div class="col-auto">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="nota_curso" id="curso0" value="0">
                                        <label class="form-check-label" for="curso0">0</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="nota_curso" id="curso1" value="1">
                                        <label class="form-check-label" for="curso1">1</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="nota_curso" id="curso2" value="2">
                                        <label class="form-check-label" for="curso2">2</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="nota_curso" id="curso3" value="3">
                                        <label class="form-check-label" for="curso3">3</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="nota_curso" id="curso4" value="4">
                                        <label class="form-check-label" for="curso4">4</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="nota_curso" id="curso5" value="5">
                                        <label class="form-check-label" for="curso5">5</label>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="nota_curso" id="curso6" value="6">
                                        <label class="form-check-label" for="curso6">6</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="nota_curso" id="curso7" value="7">
                                        <label class="form-check-label" for="curso7">7</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="nota_curso" id="curso8" value="8">
                                        <label class="form-check-label" for="curso8">8</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="nota_curso" id="curso9" value="9">
                                        <label class="form-check-label" for="curso9">9</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="nota_curso" id="curso10" value="10">
                                        <label class="form-check-label" for="curso10">10</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <label class="form-label">
                                Em uma escala (0-10)<br>
                                O quanto você sente-se motivado para estudar?
                            </label>
                            <div class="row">
                                <div class="col-auto">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="nota_motivacao" id="motivacao0" value="0">
                                        <label class="form-check-label" for="motivacao0">0</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="nota_motivacao" id="motivacao1" value="1">
                                        <label class="form-check-label" for="motivacao1">1</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="nota_motivacao" id="motivacao2" value="2">
                                        <label class="form-check-label" for="motivacao2">2</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="nota_motivacao" id="motivacao3" value="3">
                                        <label class="form-check-label" for="motivacao3">3</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="nota_motivacao" id="motivacao4" value="4">
                                        <label class="form-check-label" for="motivacao4">4</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="nota_motivacao" id="motivacao5" value="5">
                                        <label class="form-check-label" for="motivacao5">5</label>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="nota_motivacao" id="motivacao6" value="6">
                                        <label class="form-check-label" for="motivacao6">6</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="nota_motivacao" id="motivacao7" value="7">
                                        <label class="form-check-label" for="motivacao7">7</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="nota_motivacao" id="motivacao8" value="8">
                                        <label class="form-check-label" for="motivacao8">8</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="nota_motivacao" id="motivacao9" value="9">
                                        <label class="form-check-label" for="motivacao9">9</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="nota_motivacao" id="motivacao10" value="10">
                                        <label class="form-check-label" for="motivacao10">10</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="inputatendimento" class="form-label">Comparece ao atendimento indivídual com o professor?</label>
                            <select id="inputatendimento" class="form-select">
                                <option selected>Escolha a opção</option>
                                <option>Sim</option>
                                <option>Não</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="inputporque" class="form-label">Por quê? (Caso a resposta anterior seja "Não")</label>
                            <input type="text" class="form-control" id="inputporque">
                        </div>

                        <h4 class="mt-4 fs-3">Histórico de Saúde</h4>
                        <form class="row g-3">

                            <div class="col-md-6">
                                <label for="inputatservicodesaude" class="form-label">Como é realizado seu acesso ao serviço de saúde?</label>
                                <select id="inputatservicodesaude" class="form-select">
                                    <option selected>Escolha</option>
                                    <option>SUS</option>
                                    <option>Privado</option>
                                    <option>Convênio</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="inputatservicodesaude" class="form-label">Possui alguma alergia alimentar ou algum tipo restrição alimentar?</label>
                                <select id="inputatservicodesaude" class="form-select">
                                    <option selected>Escolha</option>
                                    <option>Sim</option>
                                    <option>Não</option>
                                    <option>Não sei</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="inputporque" class="form-label">Se respondeu SIM, quais alimentos causam alergia ou restrição?</label>
                                <input type="text" class="form-control" id="inputporque">
                            </div>
                            <div class="col-md-6">
                                <label for="inputatservicodesaude" class="form-label">Você possui alguma doença crônica ou pré-existente?</label>
                                <select id="inputatservicodesaude" class="form-select">
                                    <option selected>Escolha</option>
                                    <option>Sim</option>
                                    <option>Não</option>
                                    <option>Não sei</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="inputporque" class="form-label">Diga qual doença? Caso sua resposta anterior tenha sido SIM.</label>
                                <input type="text" class="form-control" id="inputporque">
                            </div>
                            <div class="col-md-6">
                                <label for="inputatservicodesaude" class="form-label">Você faz uso contínuo ou regular de algum tipo de medicação?</label>
                                <select id="inputatservicodesaude" class="form-select">
                                    <option selected>Escolha</option>
                                    <option>Sim</option>
                                    <option>Não</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="inputporque" class="form-label">Qual medicação?</label>
                                <input type="text" class="form-control" id="inputporque">
                            </div>
                            <div class="col-md-6">
                                <label for="inputatservicodesaude" class="form-label">Já realizou acompanhamento psicológico/psiquiátrico?</label>
                                <select id="inputatservicodesaude" class="form-select">
                                    <option selected>Escolha</option>
                                    <option>Sim</option>
                                    <option>Não</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="inputatservicodesaude" class="form-label">Você tem cartão de vacina?</label>
                                <select id="inputatservicodesaude" class="form-select">
                                    <option selected>Escolha</option>
                                    <option>Sim</option>
                                    <option>Não</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="inputatservicodesaude" class="form-label">Alguma vez ja ficou internado?</label>
                                <select id="inputatservicodesaude" class="form-select">
                                    <option selected>Escolha</option>
                                    <option>Sim</option>
                                    <option>Não</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="inputporque" class="form-label">Por qual motivo? Caso sua resposta tenha sido SIM, na questão anterior</label>
                                <input type="text" class="form-control" id="inputporque">
                            </div>
                            <div class="col-md-6">
                                <label for="inputatservicodesaude" class="form-label">Já passou por alguma cirurgia antes?</label>
                                <select id="inputatservicodesaude" class="form-select">
                                    <option selected>Escolha</option>
                                    <option>Sim</option>
                                    <option>Não</option>
                                </select>
                            </div>
                            <div class="col-md-12">
                                <label for="inputporque" class="form-label">Qual tipo de Cirugia você foi submetido? Caso sua resposta tenha sido SIM, na questão anterior. </label>
                                <input type="text" class="form-control" id="inputporque">
                            </div>

                            <h5 class="mt-4 fs-3">Hábitos de vida</h5>
                            <form class="row g-3">

                                <div class="col-md-6">
                                    <label for="inputatservicodesaude" class="form-label">Como é o seu padrão de sono?</label>
                                    <select id="inputatservicodesaude" class="form-select">
                                        <option selected>Escolha</option>
                                        <option>Restaurador</option>
                                        <option>Não restaurador</option>
                                        <option>Insônia (perde o sono e não consegue voltar a dormir)</option>
                                        <option>Sonolência diurna</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="inputatservicodesaude" class="form-label">Quantas refeições você faz por dia?</label>
                                    <select id="inputatservicodesaude" class="form-select">
                                        <option selected>Escolha</option>
                                        <option>3</option>
                                        <option>Mais que 3</option>
                                        <option>Menos que 3</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="inputporque" class="form-label">O que você, geralmente, come durante as principais refeições do seu dia? </label>
                                    <input type="text" class="form-control" id="inputporque">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputatservicodesaude" class="form-label">Você fuma algum tipo de cigarro?</label>
                                    <select id="inputatservicodesaude" class="form-select">
                                        <option selected>Escolha</option>
                                        <option>Sim</option>
                                        <option>Não</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="inputatservicodesaude" class="form-label">Você consome algum tipo de bebida alcoólica?</label>
                                    <select id="inputatservicodesaude" class="form-select">
                                        <option selected>Escolha</option>
                                        <option>Sim</option>
                                        <option>Não</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="inputatservicodesaude" class="form-label">Seus pais sabem disso? Caso sua resposta tenha sido SIM, nas questões anteriores.</label>
                                    <select id="inputatservicodesaude" class="form-select">
                                        <option selected>Escolha</option>
                                        <option>Sim</option>
                                        <option>Não</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="inputatservicodesaude" class="form-label">Já fez usou ou teve contato com algum tipo de droga ilícita?</label>
                                    <select id="inputatservicodesaude" class="form-select">
                                        <option selected>Escolha</option>
                                        <option>Sim</option>
                                        <option>Não</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="inputporque" class="form-label">Qual/ quais? Caso sua resposta tenha sido SIM, na questão anterior.  </label>
                                    <input type="text" class="form-control" id="inputporque">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputatservicodesaude" class="form-label">Pratica algum tipo de atividade física?</label>
                                    <select id="inputatservicodesaude" class="form-select">
                                        <option selected>Escolha</option>
                                        <option>Sim</option>
                                        <option>Não</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="inputatservicodesaude" class="form-label">Com qual frequência você pratica atividade física na semana?</label>
                                    <select id="inputatservicodesaude" class="form-select">
                                        <option selected>Escolha</option>
                                        <option>3x por semana</option>
                                        <option>(+) de 3x por semana</option>
                                        <option>(-) de 3x por semana</option>
                                    </select>
                                </div>
                                <div class="col-md-12">
                                    <label for="inputatservicodesaude" class="form-label">Quantos banhos você toma por dia?</label>
                                    <select id="inputatservicodesaude" class="form-select">
                                        <option selected>Escolha</option>
                                        <option>1 por dia</option>
                                        <option>2 por dia</option>
                                        <option>3 por dia</option>
                                        <option>Mais de 3 por dia</option>
                                    </select>
                                    <div class="d-flex justify-content-between align-items-center mt-5">
                                        <button type="submit" class="btn btn-link text-danger text-decoration-none">
                                            Deletar informações
                                        </button>
                                        <button type="submit" class="btn btn-success">
                                            Cadastrar Estudante
                                        </button>
                                    </div>
                            </form>
                    </div>
        </div>
    </div>
    </form>
    </form>
</div>

</div>
<?php include '../App/Views/footer.php' ?>