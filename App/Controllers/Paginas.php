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
        URL::redirecionar('usuarios/login');
    }

    public function home()
    {
        $dados = [
            'titulo' => 'Página de home',
            'descricao' => 'pagina home'
        ];
        $this->view('paginas/home', $dados);
    }
}

?> <!-- fim do php -->