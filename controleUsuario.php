<?php
session_start();

// Verifica a funcionalidade chamada
if (isset($_POST['cadastrar'])) {
    cadastrar();

} elseif (isset($_POST['login'])) {
    efetuarLogin();

} else {
    efetuarLogout();
}

function cadastrar()
{
    // Guarda os valores informados no FORM
    $nomeTela   = $_POST['nome'];
    $emailTela  = $_POST['email'];
    $cpfTela  = $_POST['cpf'];
    $senhaTela  = $_POST['senha'];
    $telefoneTela  = $_POST['telefone'];
    

    // Inclui os arquivos
    include_once "Usuario.php";
    include_once "conexaoDB.php";

    // Cria o objeto da classe
    $usuario = new Usuario();
    $db = new conexaoDB();

    // Guarda os dados no objeto
    $usuario->nome = $nomeTela;
    $usuario->email = $emailTela;
    $usuario->cpf = $cpfTela;
    $usuario->senha = $senhaTela;
    $usuario->telefone = $telefoneTela;

    $conexao = $db->abrirConexao();

    $sql = "INSERT INTO usuario (nome, email, cpf, senha, telefone)
            VALUES
            (?, ?, ?, ?, ?)";

    // Cria o Statement
    $stmt = $conexao->prepare($sql);

    // Vincula o parâmetro que será inserido no DB
    $stmt->bind_param("sssss", $nome, $email, $cpf, $senha, $telefone);
      
    $nome = $usuario->nome;
    $email = $usuario->email;
    $cpf = $usuario->cpf;
    $senha = $usuario->senha;
    $telefone = $usuario->telefone;

    // Executa o Statement
    $stmt->execute();

    // Fecha o Statement e a Conexão
    $stmt->close();
    $db->fecharConexaoDB($conexao);

    
    header("Location: index.php");
    echo "Cadastro efetuado com sucesso!";
}

function efetuarLogin()
{
    // Guarda os valores informados no FORM
    $emailTela  = $_POST['email'];
    $senhaTela  = $_POST['senha'];

    // Inclui os arquivos
    include_once "conexaoDB.php";

    // Cria o objeto da classe
    $db = new conexaoDB();

    $conexao = $db->abrirConexao();

    $sql = "SELECT * FROM usuario WHERE email = ?";

    // Cria o Statement
    $stmt = $conexao->prepare($sql);

    // Vincula o parâmetro que será buscado
    $stmt->bind_param("s", $email);

    $email = $emailTela;

    // Executa o Statement
    $stmt->execute();

    // Guarda o resultado encontrado
    $resultado = $stmt->get_result()->fetch_assoc();

    // Fecha o Statement e a Conexão
    $stmt->close();
    $db->fecharConexaoDB($conexao);

    // Se houver resultado na busca
    if ($resultado != null) {
        // Recebe os valores vindos do DB
        $senhaDB = $resultado['senha'];

        // Criptografa a senha informada
        $senhaTela = $senhaTela;

        // Compara os dados informados no form, com os do DB
        if (strcmp($senhaTela, $senhaDB) == 0) {
            echo "Login efetuado com sucesso";

            $_SESSION['cpf'] = $resultado['cpf'];
            $_SESSION['nome'] = $resultado['nome'];
            $_SESSION['email'] = $resultado['email'];
            $_SESSION['telefone'] = $resultado['telefone'];

            header("Location: index.php");

        } else {
            echo "Senha inválida";
        }

    } else {
        echo "E-mail não encontrado";
    }
}

function efetuarLogout()
{
    session_destroy();
    header("Location: login.php");
}

function criptografarSenhaMD5($senha)
{
    return md5($senha);
}