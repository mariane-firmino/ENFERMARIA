<?php

class Upload
{
    public static function imagem($arquivo, $pastaDestino)
    {
        if (!isset($arquivo) || $arquivo['error'] != UPLOAD_ERR_OK) {
            return [
                'status' => false,
                'mensagem' => 'Selecione uma imagem.'
            ];
        }

        $tiposPermitidos = [
            'image/jpeg',
            'image/png',
            'image/webp'
        ];

        $tamanhoMaximo = 5 * 1024 * 1024;

        if ($arquivo['size'] > $tamanhoMaximo) {
            return [
                'status' => false,
                'mensagem' => 'A imagem deve ter no máximo 5 MB.'
            ];
        }

        $finfo = finfo_open(FILEINFO_MIME_TYPE);
        $tipo = finfo_file($finfo, $arquivo['tmp_name']);
        finfo_close($finfo);

        if (!in_array($tipo, $tiposPermitidos)) {
            return [
                'status' => false,
                'mensagem' => 'Formato de imagem inválido.'
            ];
        }

        $extensao = strtolower(pathinfo($arquivo['name'], PATHINFO_EXTENSION));

        $nomeArquivo = bin2hex(random_bytes(16)) . "." . $extensao;

        if (!is_dir($pastaDestino)) {
            mkdir($pastaDestino, 0755, true);
        }

        if (!move_uploaded_file($arquivo['tmp_name'], $pastaDestino . $nomeArquivo)) {
            return [
                'status' => false,
                'mensagem' => 'Erro ao salvar a imagem.'
            ];
        }

        return [
            'status' => true,
            'arquivo' => $nomeArquivo
        ];
    }
}
