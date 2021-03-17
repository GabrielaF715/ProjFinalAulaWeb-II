<?php
session_start();

// Verifica a funcionalidade chamada
if (isset($_POST['cadastrarPet'])) {
    cadastrar();

}
function cadastrar()
{
     // Guarda os valores informados no FORM
     $nome_petTela   = $_POST['nome_pet'];
     $racaTela  = $_POST['raca'];
     $corTela  = $_POST['cor'];
     $porteTela  = $_POST['porte'];
     $idadeTela  = $_POST['idade'];
     $tipoTela = $_POST['tipo'];
     
 
     // Inclui os arquivos
     include_once "Pet.php";
     include_once "conexaoDB.php";
 
     // Cria o objeto da classe
     $pet = new Pet();
     $db = new conexaoDB();
 
     // Guarda os dados no objeto
     $pet->nome_pet = $nome_petTela;
     $pet->raca = $racaTela;
     $pet->cor = $corTela;
     $pet->porte = $porteTela;
     $pet->idade = $idadeTela;
     $pet->tipo = $tipoTela;
 
     $conexao = $db->abrirConexao();
 
     $sql = "INSERT INTO pet (nome_pet, raca, cor, porte, idade, tipo)
             VALUES
             (?, ?, ?, ?, ?, ?)";
 
     // Cria o Statement
     $stmt = $conexao->prepare($sql);
 
     // Vincula o parâmetro que será inserido no DB
     $stmt->bind_param("ssssss", $nome_pet, $raca, $cor, $porte, $idade, $tipo);
       
     $nome_pet = $pet->nome_pet;
     $raca = $pet->raca;
     $cor = $pet->cor;
     $porte = $pet->porte;
     $idade = $pet->idade;
     $tipo = $pet->tipo;
 
     // Executa o Statement
     $stmt->execute();
 
     // Fecha o Statement e a Conexão
     $stmt->close();
     $db->fecharConexaoDB($conexao);
 
     
     header("Location: index.php");
     echo "Cadastro efetuado com sucesso!";
}

