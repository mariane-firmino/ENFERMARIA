<?php //abertura da tag de php
class checa
{ // criando a classe checa
    public static function checarNome($nome)
    {
        if (!preg_match('/^([áÁàÀãÃâÂéÉèÈêÊíÍìÌóÓòÒõÕôÔúÚùÙçÇaA-zZ]+)+((\s[áÁàÀãÃâÂéÉèÈêÊíÍìÌóÓòÒõÕôÔúÚùÙçÇaA-zZ]+)+)?$/', $nome)):
            return true; // Retorna TRUE se o nome for INVALIDO
        else:
            return false; // Retorna FALSE se o nome foi VÁLIDO
        endif;
    } // fim da função checarNome

    public static function checarEmail($email)
    {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)):
            return true; // Retorna TRUE se houver ERRO no email
        else:
            return false; // Retorna FALSE se o email for VÁLIDO
        endif;
    } // fim da função checarEmail

    public static function checarCpf($cpf)
    {
        if (!preg_match('/^[0-9]{3}\.[0-9]{3}\.[0-9]{3}-[0-9]{2}$/', $cpf)):
            return true; // Retorna TRUE se houver ERRO no CPF
        else:
            return false; // Retorna FALSE se o CPF for VÁLIDO
        endif;
    } // fim da função checarCpf

    public static function dataBr($data)
    {
        if (isset($data)):
            return date('d/m/Y H:i', strtotime($data)); // converte a string de data para o formato BR
        else:
            return false;
        endif;
    } // fim da funçao dataBr
} // fim da classe
?> <!--fechamento da tag php-->