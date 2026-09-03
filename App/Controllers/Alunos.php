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
}