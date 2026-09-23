<?php
class Usuarios extends Controller
{
    private $usuarioModel;

    public function __construct()
    {
        $this->usuarioModel = $this->model('Usuario');
    }
    public function cadastrar()
{
    // recebe os dados do formulário de cadastro
    $formulario = filter_input_array(INPUT_POST, FILTER_SANITIZE_SPECIAL_CHARS);

    // verifica se o formulário foi enviado
    if (isset($formulario)):

        $dados = [
            'nome' => trim($formulario['nome']),
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

            if (empty($formulario['nome'])):
                $dados['nome_erro'] = 'Preencha o campo nome';
            endif;

            if (empty($formulario['email'])):
                $dados['email_erro'] = 'Preencha o campo e-mail';
            endif;

            if (empty($formulario['cpf'])):
                $dados['cpf_erro'] = 'Preencha o campo CPF';
            endif;

            if (empty($formulario['data_nascimento'])):
                $dados['data_nascimento_erro'] = 'Preencha o campo data de nascimento';
            endif;

            if (empty($formulario['telefone'])):
                $dados['telefone_erro'] = 'Preencha o campo telefone';
            endif;

            if (empty($formulario['siape'])):
                $dados['siape_erro'] = 'Preencha o campo SIAPE';
            endif;

            if (empty($formulario['funcao'])):
                $dados['funcao_erro'] = 'Preencha o campo função';
            endif;

            if (empty($formulario['senha'])):
                $dados['senha_erro'] = 'Preencha o campo senha';
            endif;

            if (empty($formulario['confirmar_senha'])):
                $dados['confirmar_senha_erro'] = 'Preencha o campo confirmar senha';
            endif;

        else:

            // validação dos dados do formulário

            if (Checa::checarNome($formulario['nome'])):

                $dados['nome_erro'] = 'O nome informado é invalido';

            elseif (Checa::checarEmail($formulario['email'])):

                $dados['email_erro'] = 'O e-mail informado é invalido';

            elseif (Checa::checarCpf($formulario['cpf'])):

                $dados['cpf_erro'] = 'O CPF informado é invalido';

            elseif ($this->usuarioModel->checarEmail($formulario['email'])):

                $dados['email_erro'] = 'O e-mail informado já está cadastrado';

            elseif ($this->usuarioModel->checarSiape($formulario['siape'])):

                $dados['siape_erro'] = 'O SIAPE informado já está cadastrado';

            elseif (strlen($formulario['senha']) < 6):

                $dados['senha_erro'] = 'A senha deve ter no minimo 6 caracteres';

            elseif ($formulario['senha'] != $formulario['confirmar_senha']):

                $dados['confirmar_senha_erro'] = 'As senhas são diferentes';

            else:

                // criptografa a senha do usuário
                $dados['senha'] = password_hash(
                    $formulario['senha'],
                    PASSWORD_DEFAULT
                );

                // armazena os dados do usuário no banco de dados
                if ($this->usuarioModel->armazenar($dados)):

                    Sessao::mensagem(
                        'usuarios',
                        'Cadastro realizado com sucesso'
                    );

                    URL::redirecionar('paginas/index');

                else:

                    die("Erro ao armazenar usuario no banco de dados");

                endif;

            endif;

        endif;

    else:

        // se o formulário não foi enviado
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

            'funcoes' => $this->usuarioModel->listarFuncoes()
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

                    if ($usuario):
                        $this->criarSessaoUsuario($usuario);
                    else:
                        Sessao::mensagem('usuario', 'Usuario ou senha invalidos', 'alert alert-danger');
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

    private function criarSessaoUsuario($usuario)
    {
        $_SESSION['usuario_id'] = $usuario->serv_id;
        $_SESSION['usuario_nome'] = $usuario->serv_nome;
        $_SESSION['usuario_email'] = $usuario->serv_email;
        $_SESSION['usuario_cpf'] = $usuario->serv_cpf;
        $_SESSION['usuario_siape'] = $usuario->serv_siape;
        $_SESSION['usuario_dt_nascimento'] = $usuario->serv_dt_nascimento;
        $_SESSION['usuario_telefone'] = $usuario->tele_numero;
        $_SESSION['usuario_funcao'] = $usuario->func_nome;
        $_SESSION['usuario_foto'] = $usuario->serv_foto;

        URL::redirecionar('paginas/home');
    }

    public function logout()
    {
        unset($_SESSION['usuario_id']);
        unset($_SESSION['usuario_nome']);
        unset($_SESSION['usuario_email']);
        unset($_SESSION['usuario_cpf']);
        unset($_SESSION['usuario_siape']);
        unset($_SESSION['usuario_dt_nascimento']);
        unset($_SESSION['usuario_telefone']);
        unset($_SESSION['usuario_funcao']);
        unset($_SESSION['usuario_foto']);

        session_destroy();
        URL::redirecionar('usuarios/login');
    }

    public function alterarSenha()
    {
        $this->view('usuarios/alterarSenha');
    }

    public function salvarSenha()
    {
        if ($_SERVER['REQUEST_METHOD'] != 'POST') {
            header("Location: " . URL . "/usuarios/alterarSenha");
            exit;
        }

        $usuario = $this->usuarioModel->buscarPorId(
            $_SESSION['usuario_id']
        );

        if (!$usuario) {
            $_SESSION['erro'] = "Usuário não encontrado.";

            header("Location: " . URL . "/usuarios/alterarSenha");
            exit;
        }

        if (!password_verify(
            $_POST['senha'],
            $usuario->serv_senha

        )) {

            $_SESSION['erro'] = "Senha atual incorreta.";
            header("Location: " . URL . "/usuarios/alterarSenha");
            exit;
        }

        if ($_POST['novaSenha'] != $_POST['confirmarSenha']) {

            $_SESSION['erro'] = "As senhas não coincidem.";

            header("Location: " . URL . "/usuarios/alterarSenha");
            exit;
        }

        $senha = password_hash(
            $_POST['novaSenha'],
            PASSWORD_DEFAULT
        );

        if ($this->usuarioModel->alterarSenha(
            $_SESSION['usuario_id'],
            $senha
        )) {

            $_SESSION['sucesso'] = "Senha alterada com sucesso.";

            header("Location: " . URL . "/paginas/perfil");
            exit;
        } else {

            $_SESSION['erro'] = "Erro ao alterar a senha.";

            header("Location: " . URL . "/usuarios/alterarSenha");
            exit;
        }
    }
public function editarPerfil()
{
    // Verifica se o usuário está logado
    if (!isset($_SESSION['usuario_id'])) {
        URL::redirecionar('usuarios/login');
        exit;
    }

    $id = $_SESSION['usuario_id'];

    // =====================================================
    // SALVAR ALTERAÇÕES
    // =====================================================
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        $nome = trim($_POST['nome'] ?? '');
        $email = trim($_POST['email'] ?? '');
        $dataNascimento = trim($_POST['data_nascimento'] ?? '');
        $telefone = trim($_POST['telefone'] ?? '');

        // Validação
        if ($nome === '') {
            $_SESSION['erro'] = 'Preencha o nome.';
            URL::redirecionar('usuarios/editarPerfil');
            exit;
        }

        if ($email === '') {
            $_SESSION['erro'] = 'Preencha o e-mail.';
            URL::redirecionar('usuarios/editarPerfil');
            exit;
        }

        // Busca o usuário atual
        $usuario = $this->usuarioModel->buscarPorId($id);

        if (!$usuario) {
            $_SESSION['erro'] = 'Usuário não encontrado.';
            URL::redirecionar('paginas/perfil');
            exit;
        }

        // Mantém a foto atual caso nenhuma nova seja enviada
        $foto = $usuario->serv_foto ?? null;

        // =====================================================
        // UPLOAD DA FOTO
        // =====================================================
        if (
            isset($_FILES['foto']) &&
            $_FILES['foto']['error'] !== UPLOAD_ERR_NO_FILE
        ) {

            if ($_FILES['foto']['error'] !== UPLOAD_ERR_OK) {
                $_SESSION['erro'] = 'Erro ao enviar a foto.';
                URL::redirecionar('usuarios/editarPerfil');
                exit;
            }

            $arquivo = $_FILES['foto'];

            // Limite de 5 MB
            if ($arquivo['size'] > 5 * 1024 * 1024) {
                $_SESSION['erro'] = 'A foto deve ter no máximo 5 MB.';
                URL::redirecionar('usuarios/editarPerfil');
                exit;
            }

            // Verifica o tipo real do arquivo
            $tiposPermitidos = [
                'image/jpeg' => 'jpg',
                'image/png'  => 'png',
                'image/webp' => 'webp'
            ];

            $tipo = mime_content_type($arquivo['tmp_name']);

            if (!isset($tiposPermitidos[$tipo])) {
                $_SESSION['erro'] = 'Formato de foto não permitido.';
                URL::redirecionar('usuarios/editarPerfil');
                exit;
            }

            $extensao = $tiposPermitidos[$tipo];

            $nomeArquivo = 'perfil_' . $id . '_' . time() . '.' . $extensao;

            /*
             * Pasta:
             * C:\xampp\htdocs\ENFERMARIA\Public\uploads\perfis\
             */
            $pasta = dirname(__DIR__, 2) . '/Public/uploads/perfis/';

            if (!is_dir($pasta)) {
                if (!mkdir($pasta, 0755, true)) {
                    $_SESSION['erro'] = 'Não foi possível criar a pasta da foto.';
                    URL::redirecionar('usuarios/editarPerfil');
                    exit;
                }
            }

            $destino = $pasta . $nomeArquivo;

            if (!move_uploaded_file($arquivo['tmp_name'], $destino)) {
                $_SESSION['erro'] = 'Não foi possível salvar a foto.';
                URL::redirecionar('usuarios/editarPerfil');
                exit;
            }

            $foto = $nomeArquivo;
        }

        // =====================================================
        // ATUALIZA BANCO
        // =====================================================
        $resultado = $this->usuarioModel->atualizarPerfil(
            $id,
            $nome,
            $email,
            $dataNascimento,
            $telefone,
            $foto
        );

        if (!$resultado) {
            $_SESSION['erro'] = 'Não foi possível atualizar o perfil no banco de dados.';
            URL::redirecionar('usuarios/editarPerfil');
            exit;
        }

        // =====================================================
        // ATUALIZA A SESSÃO
        // =====================================================
        $_SESSION['usuario_nome'] = $nome;
        $_SESSION['usuario_email'] = $email;
        $_SESSION['usuario_dt_nascimento'] = $dataNascimento;
        $_SESSION['usuario_telefone'] = $telefone;
        $_SESSION['usuario_foto'] = $foto;

        $_SESSION['sucesso'] = 'Perfil atualizado com sucesso!';

        URL::redirecionar('paginas/perfil');
        exit;
    }

    // =====================================================
    // ABRIR PÁGINA DE EDIÇÃO
    // =====================================================

    $usuario = $this->usuarioModel->buscarPorId($id);

    if (!$usuario) {
        $_SESSION['erro'] = 'Usuário não encontrado.';
        URL::redirecionar('paginas/perfil');
        exit;
    }

    $dados = [
        'usuario' => $usuario
    ];

    $this->view('usuarios/editarPerfil', $dados);
}


public function checarSiape($siape)
{
    $this->db->query("
        SELECT serv_id
        FROM servidor
        WHERE serv_siape = :siape
        LIMIT 1
    ");

    $this->db->bind(':siape', $siape);

    return $this->db->resultado();
}
}