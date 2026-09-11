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

    public function cadastrarMasculina()
    {
        $formulario = filter_input_array(
            INPUT_POST,
            FILTER_SANITIZE_SPECIAL_CHARS
        );

        if (isset($formulario)):

            $dados = [
                'pergunta1' => trim($formulario['pergunta1']),
                'pergunta2' => trim($formulario['pergunta2']),
                'pergunta3' => trim($formulario['pergunta3']),
                'pergunta4' => trim($formulario['pergunta4']),
                'pergunta5' => trim($formulario['pergunta5']),
                'pergunta6' => trim($formulario['pergunta6']),
                'pergunta7' => trim($formulario['pergunta7']),
                'pergunta8' => trim($formulario['pergunta8']),
                'pergunta9' => trim($formulario['pergunta9']),
                'pergunta10' => trim($formulario['pergunta10'])
            ];

            if (in_array("", $formulario)):

                if (empty($formulario['pergunta1'])):
                    $dados['pergunta1_erro'] = 'Preencha a pergunta 1';
                endif;

                if (empty($formulario['pergunta2'])):
                    $dados['pergunta2_erro'] = 'Preencha a pergunta 2';
                endif;

                if (empty($formulario['pergunta3'])):
                    $dados['pergunta3_erro'] = 'Preencha a pergunta 3';
                endif;

                if (empty($formulario['pergunta4'])):
                    $dados['pergunta4_erro'] = 'Preencha a pergunta 4';
                endif;

                if (empty($formulario['pergunta5'])):
                    $dados['pergunta5_erro'] = 'Preencha a pergunta 5';
                endif;

                if (empty($formulario['pergunta6'])):
                    $dados['pergunta6_erro'] = 'Preencha a pergunta 6';
                endif;

                if (empty($formulario['pergunta7'])):
                    $dados['pergunta7_erro'] = 'Preencha a pergunta 7';
                endif;

                if (empty($formulario['pergunta8'])):
                    $dados['pergunta8_erro'] = 'Preencha a pergunta 8';
                endif;

                if (empty($formulario['pergunta9'])):
                    $dados['pergunta9_erro'] = 'Preencha a pergunta 9';
                endif;

                if (empty($formulario['pergunta10'])):
                    $dados['pergunta10_erro'] = 'Preencha a pergunta 10';
                endif;

            else:

                // Aqui será colocado o código para salvar no banco

            endif;

        endif;

        $this->view('triagens/adicionar_triagem_m', $dados);
    }
        