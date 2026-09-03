<?php

class Notificacoes extends Controller
{
    public function notificacao()
    {
        $dados = [
            'titulo' => 'Página de notificações',
            'descricao' => 'pagina notificações'
        ];
        $this->view('notificacoes/notificacao', $dados);
    }

    public function detalhe()
    {
        $dados = [
            'titulo' => 'Página de notificações',
            'descricao' => 'pagina notificações'
        ];
        $this->view('notificacoes/detalhe', $dados);
    }
}