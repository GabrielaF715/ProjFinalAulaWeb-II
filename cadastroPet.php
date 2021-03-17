<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/estilo.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="shortcut icon" href="imagens/cao (sem fundo).png" type="link">
    
    <title>OL-Pet</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light " style="background-color: #f2ebc794;">
        <a class="navbar-brand" href="#"><img src="imagens/nome_sem_fundo.png" width="125" height="48" class="d-inline-block align-top" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Alterna navegação">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">HOME <span class="sr-only">(Página atual)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">PRODUTOS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="cadastroUsuario.php">CADASTRAR</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login.php">LOGIN</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container">
    <form action="controlePet.php" method="post">
        <br><br>
        <h4>Cadastro de pets</h4>
        <br><br>


        <label class="form-label" for="nome">Nome do Pet</label>
        <input class="form-control" type="text" id="nome_pet" name="nome_pet">

        
        <br><br>
        <label class="form-label" for="raca">Raça</label>
        <input class="form-control" type="raca" id="raca" name="raca">

        <br><br>
        <label class="form-label" for="cor">Cor</label>
        <input class="form-control" type="cor" id="cor" name="cor">

        <br><br>
        <label class="form-label" for="porte">Porte</label>
        <input class="form-control" type="porte" id="porte" name="porte">

        <br><br>
        <label class="form-label" for="idade">Idade</label>
        <input class="form-control" type="idade" id="idade" name="idade">

        <br><br>
        <label class="form-label" for="tipo">Tipo</label>
        <input class="form-control" type="tipo" id="tipo" name="tipo">


        <br><br>
        <button type="submit" class="btn btn-info" name="cadastrarPet">Cadastrar</button>
        

    </form>
    </div>
    <br><br><br><br>
    <!-- Rodapé -->
    <div class="rodape">
        <br>
        <div class="rodape-conteudo">Somos OlPet com trabalho 100% filantrópico voltado para diminuir o sofrimento animal com foco em cães e gatos. Nosso projeto surgiu da necessidade de ajudar os animais em situação de abandono nas ruas no município de São Leopoldo e arredores. Buscamos por pessoas dispostas a ajudar os nossos amiguinhos peludos! As famílias interessadas em adotar passam por uma breve entrevista para garantirmos a segurança e bem-estar dos animais e as adoções são concretizadas mediante assinatura de Termo de Responsabilidade. </div>
        <div class="rodape-redes-sociais">
            <p>
                <img src="imagens/icon-facebook.png" alt="Facebook" class="icone-rede-social">
                <span>
                    <a href="https://www.facebook.com/" target="_blank">Facebook</a>
                </span>
            </p>

            <p>
                <img src="imagens/icon-instagram.png" alt="Instagram" class="icone-rede-social">
                <span>
                    <a href="https://www.instagram.com/" target="_blank">Instagram</a>
                </span>
            </p>

            <p>
                <img src="imagens/icon-whatsapp.png" alt="Whatsapp" class="icone-rede-social">
                <span>
                    <a href="https://we.whatsapp.com/" target="_blank">Whatsapp</a>
                </span>
            </p>
        </div>
        <br><br>
        
    </div> <!-- fecha /rodape -->

</body>
</html>