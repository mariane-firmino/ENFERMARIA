<?php

class Usuario
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

     public function checarSiape($siape)
    {
        $this->db->query("
            SELECT serv_id
            FROM servidor
            WHERE serv_siape = :siape
            LIMIT 1
        ");

        $this->db->bind(':siape', $siape);

        return $this->db->resultado();
    }


    // Verifica se o e-mail já está cadastrado
    public function checarEmail($email)
    {
        $this->db->query("
            SELECT serv_email
            FROM servidor
            WHERE serv_email = :e
        ");

        $this->db->bind(":e", $email);

        if ($this->db->resultado()) {
            return true;
        }

        return false;
    }


    // Cadastra o usuário
    public function armazenar($dados)
    {
        $this->db->query("
            INSERT INTO servidor(
                serv_nome,
                serv_siape,
                serv_email,
                serv_cpf,
                serv_dt_nascimento,
                func_id,
                serv_senha
            )
            VALUES (
                :nome,
                :siape,
                :email,
                :cpf,
                :data_nascimento,
                :funcao,
                :senha
            )
        ");

        $this->db->bind('nome', $dados['nome']);
        $this->db->bind('siape', $dados['siape']);
        $this->db->bind('email', $dados['email']);
        $this->db->bind('cpf', $dados['cpf']);
        $this->db->bind('data_nascimento', $dados['data_nascimento']);
        $this->db->bind('funcao', $dados['funcao']);
        $this->db->bind('senha', $dados['senha']);

        if (!$this->db->executa()) {
            return false;
        }

        // ID do usuário recém cadastrado
        $idUsuario = $this->db->ultimoIdInserido();

        // Cadastra o telefone
        $this->db->query("
            INSERT INTO telefone(
                tele_numero,
                serv_id
            )
            VALUES (
                :celular,
                :id_usuario
            )
        ");

        $this->db->bind("celular", $dados['telefone']);
        $this->db->bind("id_usuario", $idUsuario);

        return $this->db->executa();
    }


    // Lista as funções
    public function listarFuncoes()
    {
        $this->db->query("
            SELECT *
            FROM funcao
            ORDER BY func_nome ASC
        ");

        return $this->db->resultados();
    }


    // Verifica login
    public function checarLogin($email, $senha)
    {
        $this->db->query("
            SELECT
                s.*,
                te.tele_numero,
                f.func_nome
            FROM servidor s
            LEFT JOIN telefone te
                ON s.serv_id = te.serv_id
            LEFT JOIN funcao f
                ON s.func_id = f.func_id
            WHERE s.serv_email = :e
        ");

        $this->db->bind(":e", $email);

        if ($this->db->resultado()) {

            $resultado = $this->db->resultado();

            if (password_verify($senha, $resultado->serv_senha)) {
                return $resultado;
            }

            return false;
        }

        return false;
    }


    // Busca usuário pelo ID
   public function buscarPorId($id)
{
    $this->db->query("
        SELECT
            s.serv_id,
            s.serv_nome,
            s.serv_email,
            DATE_FORMAT(s.serv_dt_nascimento, '%Y-%m-%d') AS serv_dt_nascimento,
            s.serv_foto,
            t.tele_numero
        FROM servidor s
        LEFT JOIN telefone t
            ON t.serv_id = s.serv_id
        WHERE s.serv_id = :id
        LIMIT 1
    ");

    $this->db->bind(':id', $id);

    return $this->db->resultado();
}


    // Altera senha
    public function alterarSenha($id, $senha)
    {
        $this->db->query("
            UPDATE servidor
            SET serv_senha = :senha
            WHERE serv_id = :id
        ");

        $this->db->bind(':senha', $senha);
        $this->db->bind(':id', $id);

        return $this->db->executa();
    }


    // ==========================================
    // ATUALIZA PERFIL
    // ==========================================
  // ==========================================
// ATUALIZA PERFIL
// ==========================================
public function atualizarPerfil(
    $id,
    $nome,
    $email,
    $dataNascimento,
    $telefone,
    $foto = null
) {
    // Atualiza os dados do servidor
    if ($foto !== null) {

        $this->db->query("
            UPDATE servidor
            SET
                serv_nome = :nome,
                serv_email = :email,
                serv_dt_nascimento = :data_nascimento,
                serv_foto = :foto
            WHERE serv_id = :id
        ");

        $this->db->bind(':nome', $nome);
        $this->db->bind(':email', $email);
        $this->db->bind(':data_nascimento', $dataNascimento);
        $this->db->bind(':foto', $foto);
        $this->db->bind(':id', $id);

    } else {

        $this->db->query("
            UPDATE servidor
            SET
                serv_nome = :nome,
                serv_email = :email,
                serv_dt_nascimento = :data_nascimento
            WHERE serv_id = :id
        ");

        $this->db->bind(':nome', $nome);
        $this->db->bind(':email', $email);
        $this->db->bind(':data_nascimento', $dataNascimento);
        $this->db->bind(':id', $id);
    }

    // Executa atualização do servidor
    if (!$this->db->executa()) {
        return false;
    }

    // Atualiza o telefone
    $this->db->query("
        UPDATE telefone
        SET tele_numero = :telefone
        WHERE serv_id = :id
    ");

    $this->db->bind(':telefone', $telefone);
    $this->db->bind(':id', $id);

    return $this->db->executa();
}   


}