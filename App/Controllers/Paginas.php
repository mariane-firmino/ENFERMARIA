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

    public function perfil()
    {
        $dados = [
            'titulo' => 'Página de perfil',
            'descricao' => 'pagina perfil'
        ];
        $this->view('paginas/perfil', $dados);
    }

    public function sobre()
    {
        $dados = [
            'titulo' => 'Página sobre nós',
            'descricao' => 'pagina sobre nós'
        ];
        $this->view('paginas/sobre', $dados);
    }
    public function configuracao()
    {
        $dados = [
            'titulo' => 'Página de configuração',
            'descricao' => 'pagina configuração'
        ];
        $this->view('paginas/configuracao', $dados);
    }
}

?> <!-- fim do php -->