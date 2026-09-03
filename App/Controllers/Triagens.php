<?php

class Triagens extends Controller
{
    public function triagemMasculina()
    {
        $dados = [
            'titulo' => 'Página de triagens',
            'descricao' => 'pagina triagens'
        ];
        $this->view('triagens/adicionar_triagem_m', $dados);
    }
    public function triagemFeminina()
    {
        $dados = [
            'titulo' => 'Página de triagens',
            'descricao' => 'pagina triagens'
        ];
        $this->view('triagens/adicionar_triagem_f', $dados);
    }
}