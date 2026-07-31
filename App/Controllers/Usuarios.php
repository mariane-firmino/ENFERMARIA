<?php
class Usuarios extends Controller {
    public function cadastrar()
    {
        $dados = [
            'titulo' => 'Página de Cadastro',
            'descricao' => 'Cadastro de usuário'
        ];
        $this->view('usuarios/cadastro', $dados);
    }
}

?> <!-- fim do php -->