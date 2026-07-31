<?php
class Controller { // aqui é possível controlar para qual página você quer ir de forma mais simples
    public function model($model)
    {
        require_once '../app/Models/' . $model . '.php';
        return new $model;
    } // fim da função model

    public function library($library)
    {
        require_once '../app/Libraries/' . $library . '.php';
        return new $library;
    } // fim da função library

    public function view($view, $dados = [])
    {
        $arquivo = '../app/Views/' . $view . '.php';

        if (file_exists($arquivo)) {
            require_once $arquivo;
        } else {
            die("O arquivo não existe");
        }
    } // fim da função view
}