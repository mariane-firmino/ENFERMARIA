<?php

class Calendarios extends Controller
{
    public function calendario  ()
    {
        $dados = [
            'titulo' => 'Página de calendário',
            'descricao' => 'pagina calendário'
        ];
        $this->view('calendarios/calendario', $dados);
    }
}