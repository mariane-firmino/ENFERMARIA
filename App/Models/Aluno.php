<?php

class Aluno
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    // verifica se a matrícula já está cadastrada no banco de dados
    public function checarMatricula($matricula)
    {
        $this->db->query("SELECT alun_id FROM aluno WHERE alun_matriculal = :m");
        $this->db->bind(":m", $matricula);

        if ($this->db->resultado()) :
            return true;
        else :
            return false;
        endif;
    }

    public function armazenar($dados) // cadastra o aluno no banco de dados
    {
        try {
            $this->db->beginTransaction();

            $turmId = $this->buscarOuCriarTurma($dados['curso'], $dados['turno'], $dados['ano_turma']);
            $respId = $this->criarResponsavel($dados['nome_responsavel']);

            $this->db->query("
                INSERT INTO aluno(
                    alun_nome,
                    alun_dt_nascimetno,
                    alun_sexo,
                    alun_matriculal,
                    resp_id,
                    turm_id
                ) VALUES (
                    :nome,
                    :nascimento,
                    :sexo,
                    :matricula,
                    :resp_id,
                    :turm_id
                )
            ");

            $this->db->bind(':nome', $dados['nome']);
            $this->db->bind(':nascimento', $dados['data_nascimento']);
            $this->db->bind(':sexo', $dados['sexo']);
            $this->db->bind(':matricula', $dados['matricula']);
            $this->db->bind(':resp_id', $respId);
            $this->db->bind(':turm_id', $turmId);

            if (!$this->db->executa()) {
                $this->db->rollBack();
                return false;
            }

            $alunId = $this->db->ultimoIdInserido();

            // cadastra o(s) telefone(s) relacionado(s) ao aluno
            if (!empty($dados['telefone_aluno'])) {
                $this->salvarTelefone($dados['telefone_aluno'], $alunId, null);
            }
            if (!empty($dados['telefone_responsavel'])) {
                $this->salvarTelefone($dados['telefone_responsavel'], null, $respId);
            }

            // cadastra as respostas de saúde/hábitos do aluno
            $this->salvarSaude($alunId, $dados);

            $this->db->commit();

            return true;
        } catch (PDOException $e) {
            $this->db->rollBack();
            return false;
        }
    }

    // busca a turma pelo curso/turno/ano ou cria uma nova, retornando o turm_id
    private function buscarOuCriarTurma($curso, $turno, $ano)
    {
        $this->db->query("
            SELECT turm_id
            FROM turma
            WHERE turm_curso = :curso AND turm_turno = :turno AND turm_ano = :ano
        ");
        $this->db->bind(':curso', $curso);
        $this->db->bind(':turno', $turno);
        $this->db->bind(':ano', $ano);

        $turma = $this->db->resultado();

        if ($turma) {
            return $turma->turm_id;
        }

        $this->db->query("
            INSERT INTO turma(turm_curso, turm_turno, turm_ano)
            VALUES (:curso, :turno, :ano)
        ");
        $this->db->bind(':curso', $curso);
        $this->db->bind(':turno', $turno);
        $this->db->bind(':ano', $ano);
        $this->db->executa();

        return $this->db->ultimoIdInserido();
    }

    // cria o responsável e retorna o resp_id
    private function criarResponsavel($nome)
    {
        $this->db->query("INSERT INTO responsavel(resp_nome) VALUES (:nome)");
        $this->db->bind(':nome', $nome);
        $this->db->executa();

        return $this->db->ultimoIdInserido();
    }

    private function salvarTelefone($numero, $alunId, $respId)
    {
        $this->db->query("
            INSERT INTO telefone(tele_numero, serv_id, alun_id, resp_id)
            VALUES (:numero, NULL, :alun_id, :resp_id)
        ");
        $this->db->bind(':numero', $numero);
        $this->db->bind(':alun_id', $alunId);
        $this->db->bind(':resp_id', $respId);
        $this->db->executa();
    }

    private function salvarSaude($alunId, $d)
    {
        $campos = [
            'tipo_escola', 'motivo_ifro', 'ja_reprovou', 'quantas_vezes', 'estuda_fora', 'quanto_tempo',
            'nota_curso', 'nota_motivacao', 'atendimento', 'atendimento_porque', 'acesso_saude',
            'alergia_alimentar', 'alergia_qual', 'doenca_cronica', 'doenca_qual',
            'medicacao_continua', 'medicacao_qual', 'acompanhamento_psi', 'cartao_vacina',
            'ja_internado', 'internado_motivo', 'ja_cirurgia', 'cirurgia_qual',
            'padrao_sono', 'refeicoes_dia', 'alimentacao_habitual', 'fuma', 'bebida_alcoolica',
            'pais_sabem', 'drogas_ilicitas', 'drogas_qual', 'atividade_fisica',
            'frequencia_atividade', 'banhos_dia',
        ];

        $colunas = implode(', ', $campos);
        $placeholders = ':' . implode(', :', $campos);

        $this->db->query("INSERT INTO aluno_saude(alun_id, {$colunas}) VALUES (:alun_id, {$placeholders})");
        $this->db->bind(':alun_id', $alunId);

        foreach ($campos as $campo) {
            $valor = $d[$campo] ?? '';
            $this->db->bind(':' . $campo, $valor !== '' ? $valor : null);
        }

        $this->db->executa();
    }
    public function listarTodos()
{
    $this->db->query("
        SELECT
            a.alun_id,
            a.alun_nome,
            a.alun_dt_nascimetno,
            a.alun_sexo,
            a.alun_matriculal,

            t.turm_id,
            t.turm_curso,
            t.turm_turno,
            t.turm_ano,

            r.resp_id,
            r.resp_nome

        FROM aluno a

        LEFT JOIN turma t
            ON a.turm_id = t.turm_id

        LEFT JOIN responsavel r
            ON a.resp_id = r.resp_id

        ORDER BY a.alun_nome ASC
    ");

    return $this->db->resultados();
}
}

// FIM DA CLASSE ALUNO