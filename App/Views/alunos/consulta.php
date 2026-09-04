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
                    1 Alunos encontrados
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
                            <tr class="consultaAlunoLinha">
                                <td class="consultaAlunoCelula">
                                    Nome do aluno
                                </td>

                                <td class="consultaAlunoCelula">
                                    0 ano
                                </td>

                                <td class="consultaAlunoCelula">
                                    TI/BIO
                                </td>

                                <td class="consultaAlunoCelula">
                                    MAT/VESP
                                </td>

                                <td class="consultaAlunoCelula">
                                    00/00/0000
                                </td>

                                <td class="consultaAlunoCelula consultaAlunoCelulaAcoes">
                                    <details class="consultaAlunoMenu">
                                        <summary class="consultaAlunoBotaoAcoes" aria-label="Abrir ações">
                                            <i class="bi bi-three-dots"></i>
                                        </summary>

                                        <div class="consultaAlunoMenuOpcoes">
                                            <a type="button" class="consultaAlunoOpcaoMenu" href="<?= URL ?>/alunos/visualizarPerfil">
                                                Visualizar Perfil
                                            </a>
                                        </div>
                                    </details>
                                </td>
                            </tr>
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