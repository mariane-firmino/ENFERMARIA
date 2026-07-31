<?php
class Paginas extends Controller
{
    //private $usuarioModel;

    /*public function __construct()
    {
        $this->usuarioModel = $this->model('Usuario');
    }*/

    public function index()
    {
        $dados = [
            'titulo' => 'Página de Login',
            'descricao' => 'Login de usuário'
        ];
        $this->view('usuarios/login', $dados);
    }
}

?> <!-- fim do php -->