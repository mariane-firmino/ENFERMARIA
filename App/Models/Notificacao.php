<?php

class Notificacao
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }
    public function criarNotificacao($dados)
    {

        $this->db->query("INSERT INTO notificacao( noti_titulo, noti_data, noti_descricao, noti_status, noti_tipo, serv_id) 
        VALUES (:titulo, :data, :descricao, :status, :tipo, :id)");

        $this->db->bind('id', $dados['id']);
        $this->db->bind('titulo', $dados['titulo']);
        $this->db->bind('data', $dados['data']);
        $this->db->bind('descricao', $dados['descricao']);
        $this->db->bind('status', $dados['status']);
        $this->db->bind('tipo', $dados['tipo']);

        if ($this->db->executa()) :
            return true;
        else :
            return false;
        endif;
    }

    public function contarNotificacao($id)
    {
        $this->db->query("SELECT COUNT(*) AS total FROM notificacao WHERE serv_id = :id AND noti_status = 'ativo'");
        $this->db->bind('id', $id);
        return $this->db->resultado();
    }

    public function buscarPorId($id)
    {
        $this->db->query("SELECT * FROM notificacao WHERE noti_id = :id");
        $this->db->bind('id', $id);
        return $this->db->resultado();
    }
    public function excluirNotificacao($id)
    {
        $this->db->query("DELETE FROM notificacao WHERE noti_id = :id");
        $this->db->bind('id', $id);
        return $this->db->executa();
    }
    public function marcarComoLida($id)
    {
        $this->db->query("UPDATE notificacao SET noti_status = 'Lida' WHERE noti_id = :id");
        $this->db->bind('id', $id);
        return $this->db->executa();
    }
    public function mostarNotificacao($id, $pesquisa = '', $data = '', $status = '')
    {
        $sql = "SELECT * FROM notificacao 
            WHERE serv_id = :id";

        // Pesquisa por título ou descrição
        if (!empty($pesquisa)) {
            $sql .= " AND (
                    noti_titulo LIKE :pesquisa 
                    OR noti_descricao LIKE :pesquisa
                  )";
        }

        // Filtro por data
        if (!empty($data)) {
            $sql .= " AND DATE(noti_data) = :data";
        }

        // Filtro por status
        if ($status === 'nao_lidas') {
            $sql .= " AND noti_status = 'Pendente'";
        }

        if ($status === 'lidas') {
            $sql .= " AND noti_status = 'Lida'";
        }

        $sql .= " ORDER BY noti_data DESC";

        $this->db->query($sql);

        $this->db->bind('id', $id);

        if (!empty($pesquisa)) {
            $this->db->bind('pesquisa', '%' . $pesquisa . '%');
        }

        if (!empty($data)) {
            $this->db->bind('data', $data);
        }

        return $this->db->resultados();
    }
}
