<?php

class Alunos extends Controller
{

    private $alunoModel;

    // Campos de saúde/hábitos do formulário (todos opcionais)
    private const CAMPOS_SAUDE = [
        'tipo_escola',
        'motivo_ifro',
        'ja_reprovou',
        'quantas_vezes',
        'estuda_fora',
        'quanto_tempo',
        'nota_curso',
        'nota_motivacao',
        'atendimento',
        'atendimento_porque',
        'acesso_saude',
        'alergia_alimentar',
        'alergia_qual',
        'doenca_cronica',
        'doenca_qual',
        'medicacao_continua',
        'medicacao_qual',
        'acompanhamento_psi',
        'cartao_vacina',
        'ja_internado',
        'internado_motivo',
        'ja_cirurgia',
        'cirurgia_qual',
        'padrao_sono',
        'refeicoes_dia',
        'alimentacao_habitual',
        'fuma',
        'bebida_alcoolica',
        'pais_sabem',
        'drogas_ilicitas',
        'drogas_qual',
        'atividade_fisica',
        'frequencia_atividade',
        'banhos_dia',
    ];

    // Campos obrigatórios do aluno/responsável
    private const CAMPOS_OBRIGATORIOS = [
        'nome',
        'data_nascimento',
        'curso',
        'turno',
        'ano_turma',
        'sexo',
        'matricula',
        'nome_responsavel',
    ];

    // Campos opcionais além dos de saúde
    private const CAMPOS_OPCIONAIS_EXTRA = ['telefone_aluno', 'telefone_responsavel'];

    public function __construct()
    {
        $this->alunoModel = $this->model('Aluno');
    }

    public function aluno()
    {
        $dados = [
            'titulo' => 'Página de alunos',
            'descricao' => 'pagina alunos'
        ];
        $this->view('alunos/aluno', $dados);
    }
    public function consulta()
    {
        $dados = [
            'titulo' => 'Página de consultas',
            'descricao' => 'pagina consultas'
        ];
        $this->view('alunos/consulta', $dados);
    }
    public function cadastrar()
    {
        $todosOsCampos = array_merge(self::CAMPOS_OBRIGATORIOS, self::CAMPOS_OPCIONAIS_EXTRA, self::CAMPOS_SAUDE);

        // recebe os dados do formulário de cadastro
        $formulario = filter_input_array(INPUT_POST, FILTER_SANITIZE_SPECIAL_CHARS);

        // verifica se o formulário foi enviado
        if (isset($formulario)):
            $dados = [];
            foreach ($todosOsCampos as $campo) {
                $dados[$campo] = trim($formulario[$campo] ?? '');
                $dados[$campo . '_erro'] = '';
            }

            // verifica se algum campo obrigatório está vazio
            $temCampoVazio = false;
            foreach (self::CAMPOS_OBRIGATORIOS as $campo) {
                if ($dados[$campo] === '') {
                    $dados[$campo . '_erro'] = 'Preencha este campo';
                    $temCampoVazio = true;
                }
            }

            if (!$temCampoVazio):
                // validação dos dados do formulário
                if (Checa::checarNome($dados['nome'])) :
                    $dados['nome_erro'] = 'O nome informado é inválido';
                elseif (Checa::checarNome($dados['nome_responsavel'])) :
                    $dados['nome_responsavel_erro'] = 'O nome informado é inválido';
                elseif ($this->alunoModel->checarMatricula($dados['matricula'])) :
                    $dados['matricula_erro'] = 'Esta matrícula já está cadastrada';
                else :
                    // armazena os dados do aluno no banco de dados
                    if ($this->alunoModel->armazenar($dados)) :
                        Sessao::mensagem('alunos', 'Aluno cadastrado com sucesso');
                        URL::redirecionar('alunos/aluno'); // redireciona para a listagem de alunos
                    else :
                        $dados['matricula_erro'] = 'Erro ao cadastrar o aluno. Tente novamente.';
                    endif;
                endif;
            endif;

        else :
            // se o formulário não foi enviado, inicializa os dados com valores vazios
            $dados = [];
            foreach ($todosOsCampos as $campo) {
                $dados[$campo] = '';
                $dados[$campo . '_erro'] = '';
            }
        endif;

        $this->view('alunos/cadastrar', $dados);
    }

    public function visualizarPerfil()
    {
        $dados = [
            'titulo' => 'Página de consultas',
            'descricao' => 'pagina consultas'
        ];
        $this->view('alunos/visualizarPerfil', $dados);
    }
    public function editarPerfil()
    {
        $dados = [
            'titulo' => 'Página de edição de perfil',
            'descricao' => 'pagina edição de perfil'
        ];
        $this->view('alunos/editarPerfil', $dados);
    }
}
