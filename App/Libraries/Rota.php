<?php
class Rota
{
    private $controlador = "Paginas";
    private $metodo = 'index';
    private $parametros = [];

    public function __construct()
    {
        //echo "Criando nossa primeira classe";
        $url = $this->url() ? $this->url() : [0];
        if (file_exists('../app/Controllers/' . ucwords($url[0]) . '.php')) {
            $this->controlador = ucwords($url[0]);
            unset($url[0]);
        }
        require_once '../app/Controllers/' . $this->controlador . '.php';
        $this->controlador = new $this->controlador;
        if (isset($url[1])) {
            if (method_exists($this->controlador, $url[1])) {
                $this->metodo = $url[1];
                unset($url[1]);
            } //fim do if que verifica se o método existe
        } //fim do if que verifica se a url existe
        $this->parametros = $url ? array_values($url) : [];
        call_user_func_array([$this->controlador, $this->metodo], $this->parametros);
        //var_dump($this);
    }


    private function url()
    {
        //echo "chamando a URL";
        //o filtro FILTER_SANITIZE_URL remove todos os caracteres ilegais de uma URL
        $url = filter_input(INPUT_GET, 'url', FILTER_SANITIZE_URL);
        //verifica se a url existe
        if (isset($url)) {
            //trim — Retira espaço no ínicio e final de uma string
            //rtrim — Retira espaço em branco (ou outros caracteres) do final da string
            $url = trim(rtrim($url, '/'));
            //explode — Divide uma string em strings, retorna um array 
            $url = explode('/', $url);
            return $url; //retorna a url
        } //fim do if
    } //fim do método url

} //fim da classe
