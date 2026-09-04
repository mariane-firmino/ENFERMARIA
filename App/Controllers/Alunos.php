<?php

class Alunos extends Controller
{
    public function aluno()
    {
        $dados = [
            'titulo' => 'Página de alunos',
            'descricao' => 'pagina alunos'
        ];
        $this->view('alunos/aluno', $dados);
    }
    public function consulta()
    {
        $dados = [
            'titulo' => 'Página de consultas',
            'descricao' => 'pagina consultas'
        ];
        $this->view('alunos/consulta', $dados);
    }
    public function cadastrar()
    {
        $dados = [
            'titulo' => 'Página de cadastro',
            'descricao' => 'pagina cadastro'
        ];
        $this->view('alunos/cadastrar', $dados);
    }
    public function visualizarPerfil()
    {
        $dados = [
            'titulo' => 'Página de consultas',
            'descricao' => 'pagina consultas'
        ];
        $this->view('alunos/visualizarPerfil', $dados);
    }
}