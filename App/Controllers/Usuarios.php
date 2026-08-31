<?php
class Usuarios extends Controller
{
    private $usuarioModel;

    public function __construct()
    {
        $this->usuarioModel = $this->model('Usuario');
    }
    /*public function cadastrar()
    {
        $dados = [
            'titulo' => 'Página de Cadastro',
            'descricao' => 'Cadastro de usuário'
        ];
        $this->view('usuarios/cadastro', $dados);
    }*/

    public function cadastrar()
    {
        // recebe os dados do formulário de cadastro
        $formulario = filter_input_array(INPUT_POST, FILTER_SANITIZE_SPECIAL_CHARS);
        // verifica se o formulário foi enviado
        if (isset($formulario)):
            $dados = [
                'nome' => trim($formulario['nome']), // remove espaços em branco do início e do fim da string
                'email' => trim($formulario['email']),
                'cpf' => trim($formulario['cpf']),
                'data_nascimento' => trim($formulario['data_nascimento']),
                'telefone' => trim($formulario['telefone']),
                'siape' => trim($formulario['siape']),
                'funcao' => trim($formulario['funcao']),
                'senha' => trim($formulario['senha']),
                'confirmar_senha' => trim($formulario['confirmar_senha'])
            ];
            // verifica se algum campo do formulário está vazio
            if (in_array("", $formulario)):
                if (empty($formulario['nome'])) :
                    $dados['nome_erro'] = 'Preencha o campo nome';
                endif;

                if (empty($formulario['email'])) :
                    $dados['email_erro'] = 'Preencha o campo e-mail';
                endif;

                if (empty($formulario['cpf'])) :
                    $dados['cpf_erro'] = 'Preencha o campo CPF';
                endif;

                if (empty($formulario['data_nascimento'])) :
                    $dados['data_nascimento_erro'] = 'Preencha o campo data de nascimento';
                endif;

                if (empty($formulario['telefone'])) :
                    $dados['telefone_erro'] = 'Preencha o campo telefone';
                endif;

                if (empty($formulario['siape'])) :
                    $dados['siape_erro'] = 'Preencha o campo SIAPE';
                endif;

                if (empty($formulario['funcao'])) :
                    $dados['funcao_erro'] = 'Preencha o campo função';
                endif;

                if (empty($formulario['senha'])) :
                    $dados['senha_erro'] = 'Preencha o campo senha';
                endif;

                if (empty($formulario['confirmar_senha'])) :
                    $dados['confirmar_senha_erro'] = 'Preencha o campo confirmar senha';
                endif;
            else:
                // validação dos dados do formulário
                if (Checa::checarNome($formulario['nome'])) :
                    $dados['nome_erro'] = 'O nome informado é invalido';
                elseif (Checa::checarEmail($formulario['email'])) :
                    $dados['email_erro'] = 'O e-mail informado é invalido';
                elseif (Checa::checarCpf($formulario['cpf'])) :
                    $dados['cpf_erro'] = 'O CPF informado é invalido';
                elseif ($this->usuarioModel->checarEmail($formulario['email'])) :
                    $dados['email_erro'] = 'O e-mail informado já está cadastrado';
                elseif (strlen($formulario['senha']) < 6) :
                    $dados['senha_erro'] = 'A senha deve ter no minimo 6 caracteres';
                elseif ($formulario['senha'] != $formulario['confirmar_senha']) :
                    $dados['confirmar_senha_erro'] = 'As senhas são diferentes';
                else :
                    // criptografa a senha do usuário
                    $dados['senha'] = password_hash($formulario['senha'], PASSWORD_DEFAULT);

                    // armazena os dados do usuário no banco de dados
                    if ($this->usuarioModel->armazenar($dados)) :
                        Sessao::mensagem('usuarios', 'Cadastro realizado com sucesso');
                        URL::redirecionar('paginas/index'); // redireciona para a página de login
                    else :
                        // se houver algum erro ao armazenar os dados do usuário no banco de dados
                        die("Erro ao armazenar usuario no banco de dados");
                    endif;
                endif;

            endif;
        else :
            // se o formulário não foi enviado, inicializa os dados do formulário com valores vazios
            $dados = [
                'nome' => '',
                'email' => '',
                'cpf' => '',
                'data_nascimento' => '',
                'telefone' => '',
                'siape' => '',
                'senha' => '',
                'confirmar_senha' => '',
                'funcao' => '',
                'nome_erro' => '',
                'email_erro' => '',
                'cpf_erro' => '',
                'data_nascimento_erro' => '',
                'telefone_erro' => '',
                'siape_erro' => '',
                'funcao_erro' => '',
                'senha_erro' => '',
                'confirmar_senha_erro' => '',
                'funcoes' => $this->usuarioModel->listarFuncoes() // lista as funções disponíveis no banco de dados
            ];

        endif;
        $this->view('usuarios/cadastro', $dados);
    }

    public function esqueciMinhaSenha1()
    {
        $dados = [
            'titulo' => 'Página de esqueci senha',
            'descricao' => 'Esuqeci senha de usuário'
        ];
        $this->view('usuarios/esqueciMinhaSenha1', $dados);
    }

    public function login()
    {
        /*echo "loginUser";
        echo "<pre>";
        print_r($_POST);
        echo "</pre>";
        die;*/
        
        $formulario = filter_input_array(INPUT_POST, FILTER_SANITIZE_SPECIAL_CHARS);
        if (isset($formulario)) :
            $dados = [
                'email' => trim($formulario['email']),
                'senha' => trim($formulario['senha']),
            ];
        
            if (in_array("", $formulario)) :

                if (empty($formulario['email'])) :
                    $dados['email_erro'] = 'Preencha o campo e-mail';
                endif;

                if (empty($formulario['senha'])) :
                    $dados['senha_erro'] = 'Preencha o campo senha';
                endif;

            else :
                if (Checa::checarEmail($formulario['email'])) :
                    $dados['email_erro'] = 'O e-mail informado é invalido';
                else :
                   
                    $usuario = $this->usuarioModel->checarLogin($formulario['email'], $formulario['senha']);

                    if($usuario): 
                        $this->criarSessaoUsuario($usuario);
                    else:
                        Sessao::mensagem('usuario','Usuario ou senha invalidos','alert alert-danger');
                    endif;

                endif;

            endif;
        else :
            $dados = [
                'email' => '',
                'senha' => '',
                'email_erro' => '',
                'senha_erro' => ''
            ];

        endif;


        $this->view('usuarios/login', $dados);
    }

    private function criarSessaoUsuario($usuario){
        $_SESSION['usuario_id'] = $usuario->serv_id;
        $_SESSION['usuario_nome'] = $usuario->serv_nome;
        $_SESSION['usuario_email'] = $usuario->serv_email;

        URL::redirecionar('paginas/home');
    }

    public function logout(){
        unset($_SESSION['usuario_id']);
        unset($_SESSION['usuario_nome']);
        unset($_SESSION['usuario_email']);

        session_destroy();
        URL::redirecionar('usuarios/login');
    }



}

?> <!-- fim do php -->