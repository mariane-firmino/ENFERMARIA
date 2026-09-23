<?php

class Notificacoes extends Controller
{
    private $notificacaoModel;


    public function __construct()
    {
        $this->notificacaoModel = $this->model('Notificacao');
    }
    public function notificacao()
    {
        $notificacaoModel = $this->model('Notificacao');
        $idUsuario = $_SESSION['usuario_id'];
        $notificacoes = $notificacaoModel->mostarNotificacao($idUsuario);
        $totalNotificacoes = $notificacaoModel->contarNotificacao($idUsuario);

        if (!isset($_SESSION['usuario_id'])) {
            header('Location: ' . URL . '/login');
            exit;
        }

        // Usuário logado
        $usuario_id = $_SESSION['usuario_id'];

        // Recebe os filtros da URL
        $pesquisa = isset($_GET['pesquisa'])
            ? trim($_GET['pesquisa'])
            : '';

        $data = isset($_GET['data'])
            ? $_GET['data']
            : '';

        $status = isset($_GET['status'])
            ? $_GET['status']
            : '';

        // Busca no banco
        $dados['notificacoes'] = $this->notificacaoModel->mostarNotificacao(
            $usuario_id,
            $pesquisa,
            $data,
            $status
        );

        // Mantém os valores nos campos
        $dados['pesquisa'] = $pesquisa;
        $dados['data'] = $data;
        $dados['status'] = $status;

        $this->view('notificacoes/notificacao', $dados);
    }

    public function detalhe($id)
    {
        $notificacao = $this->model('Notificacao')->buscarPorId($id);

        if (!$notificacao) {
            header('Location: ' . URL . '/notificacoes/notificacao');
            exit;
        }

        $dados = [
            'notificacao' => $notificacao
        ];

        $this->view('notificacoes/detalhe', $dados);
    }

    public function excluir($id)
    {
        $notificacaoModel = $this->model('Notificacao');
        $notificacao = $notificacaoModel->buscarPorId($id);

        if (!$notificacao) {
            header('Location: ' . URL . '/notificacoes/notificacao');
            exit;
        }

        if ($notificacaoModel->excluirNotificacao($id)) {
            header('Location: ' . URL . '/notificacoes/notificacao');
            exit;
        } else {
            die("Erro ao excluir a notificação.");
        }
    }
    public function marcarComoLida($id)
    {
        if (!isset($_SESSION['usuario_id'])) {
            header('Location: ' . URL . '/usuarios/login');
            exit;
        }

        $this->notificacaoModel->marcarComoLida($id);

        header('Location: ' . URL . '/notificacoes/notificacao');
        exit;
    }
}