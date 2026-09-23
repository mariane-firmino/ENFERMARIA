<?php

class Usuario
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    // verifica se o e-mail já está cadastrado no banco de dados
    public function checarEmail($email)
    {
        $this->db->query("SELECT serv_email FROM servidor WHERE serv_email = :e");
        $this->db->bind(":e", $email);

        if ($this->db->resultado()) :
            return true;
        else :
            return false;
        endif;
    }

    public function armazenar($dados) // cadastra o usuário no banco de dados
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
            ) VALUES (
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

        // cadastra o telefone relacionado ao usuário
        $this->db->query("
            INSERT INTO telefone(tele_numero, serv_id)
            VALUES (:celular, :id_usuario)
        ");

        $this->db->bind("celular", $dados['telefone']);
        $this->db->bind("id_usuario", $this->db->ultimoIdInserido());

        if ($this->db->executa()) :
            return true;
        else :
            return false;
        endif;
    }

    public function listarFuncoes() // lista as funções disponíveis no banco de dados
    {
        $this->db->query("SELECT * FROM funcao ORDER BY func_nome ASC");
        return $this->db->resultados();
    }

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

        if ($this->db->resultado()) :
            $resultado = $this->db->resultado();

            if (password_verify($senha, $resultado->serv_senha)) :
                return $resultado;
            else :
                return false;
            endif;
        else :
            return false;
        endif;
    }

    public function buscarPorId($serv_id)
    {
        $this->db->query("SELECT * FROM servidor WHERE serv_id = :serv_id");
        $this->db->bind(':serv_id', $serv_id);

        return $this->db->resultado();
    }

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
}

// FIM DA CLASSE USUARIO
