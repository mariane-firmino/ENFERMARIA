<?php
class Url{
    public static function redirecionar($url){
        header("Location:".URL.DIRECTORY_SEPARATOR.$url);
    }//fim da função URL
}