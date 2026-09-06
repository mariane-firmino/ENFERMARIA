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
    public function visualizarConsulta()
    {
        $dados = [
            'titulo' => 'Visualizar Consulta',
            'descricao' => 'Página para visualizar detalhes da consulta'
        ];
        $this->view('calendarios/visualizarConsulta', $dados);
    }

}