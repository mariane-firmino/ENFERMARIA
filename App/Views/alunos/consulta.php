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
                <h1>Consultar Aluno</h1>
                <p>Faça a consulta do estudante aqui.</p>
            </div>
            <div class="col-4 text-end">
                <img src="<?= URL ?>/img/logo_enfermaria.jpeg" class="logo-home" alt="Logo">
            </div>
        </div>
    </div>

    <main class="consultaAlunoPagina">

        <!-- FILTROS -->

        <section class="consultaAlunoFiltros">
            <div class="consultaAlunoCampoPesquisa">
                <i class="bi bi-search consultaAlunoIconePesquisa"></i>
                <input type="text" class="consultaAlunoInputPesquisa" placeholder="Buscar por nome do aluno">
            </div>


            <select class="consultaAlunoSelectPerfil">

                <option selected>
                    Todos os perfis
                </option>

                <option>
                    123
                </option>

            </select>
            <select class="consultaAlunoSelectTurma">
                <option selected>
                    Turma
                </option>

                <option>
                    123
                </option>
            </select>
        </section>


        <section class="consultaAlunoResultado">
            <div class="consultaAlunoResultadoIcone">
                <i class="bi bi-people-fill"></i>
            </div>

            <div class="consultaAlunoResultadoTexto">
                <strong class="consultaAlunoResultadoTitulo">
                    Resultados da pesquisa
                </strong>

                <span class="consultaAlunoResultadoQuantidade">
    <?= count($dados['alunos'] ?? []) ?>
    <?= count($dados['alunos'] ?? []) == 1 ? 'Aluno encontrado' : 'Alunos encontrados' ?>
</span> 
            </div>
        </section>


        <section class="consultaAlunoTabelaArea">
            <div class="consultaAlunoTabelaContainer">

                <div class="consultaAlunoTabelaScroll" id="consultaAlunoTabelaScroll">
                    <table class="consultaAlunoTabela">
                        <thead class="consultaAlunoTabelaCabecalho">

                            <tr>
                                <th>Nome do Aluno</th>
                                <th>Turma</th>
                                <th>Curso</th>
                                <th>Turno</th>
                                <th>Data de Cadastro</th>
                                <th class="consultaAlunoColunaAcoes">
                                    Ações
                                </th>
                            </tr>
                        </thead>

                       <tbody class="consultaAlunoTabelaCorpo">

<?php if (!empty($dados['alunos'])): ?>

    <?php foreach ($dados['alunos'] as $aluno): ?>

        <tr class="consultaAlunoLinha">

            <td class="consultaAlunoCelula">
                <?= htmlspecialchars($aluno->nome) ?>
            </td>

            <td class="consultaAlunoCelula">
                <?= htmlspecialchars($aluno->ano_turma) ?>º ano
            </td>

            <td class="consultaAlunoCelula">
                <?= htmlspecialchars($aluno->curso) ?>
            </td>

            <td class="consultaAlunoCelula">
                <?= htmlspecialchars($aluno->turno) ?>
            </td>

            <td class="consultaAlunoCelula">
                <?= !empty($aluno->data_cadastro)
                    ? date('d/m/Y', strtotime($aluno->data_cadastro))
                    : '--/--/----'
                ?>
            </td>

            <td class="consultaAlunoCelula consultaAlunoCelulaAcoes">

                <details class="consultaAlunoMenu">

                    <summary
                        class="consultaAlunoBotaoAcoes"
                        aria-label="Abrir ações"
                    >
                        <i class="bi bi-three-dots"></i>
                    </summary>

                    <div class="consultaAlunoMenuOpcoes">

                        <a
                            class="consultaAlunoOpcaoMenu"
                            href="<?= URL ?>/alunos/visualizarPerfil/<?= $aluno->id ?>"
                        >
                            Visualizar Perfil
                        </a>

                    </div>

                </details>

            </td>

        </tr>

    <?php endforeach; ?>

<?php else: ?>

    <tr>
        <td colspan="6" class="text-center p-4">
            Nenhum aluno cadastrado.
        </td>
    </tr>

<?php endif; ?>

</tbody>
                    </table>
                </div>
            </div>

            <div class="consultaAlunoBarraScroll">
                <button type="button" class="consultaAlunoSeta" id="consultaAlunoScrollEsquerda">
                    <i class="bi bi-chevron-left"></i>
                </button>


                <div class="consultaAlunoTrilho" id="consultaAlunoTrilho">
                    <div class="consultaAlunoIndicador" id="consultaAlunoIndicador"></div>
                </div>


                <button type="button" class="consultaAlunoSeta" id="consultaAlunoScrollDireita">
                    <i class="bi bi-chevron-right"></i>
                </button>
            </div>
        </section>
    </main>
</div>
<?php include '../App/Views/footer.php' ?>