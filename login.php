<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="shortcut icon" href="imagens/cao (sem fundo).png" type="link">

    <link href="css/bootstrap-reboot.css" rel="stylesheet">
    <link href="CSS/estilo.css" rel="stylesheet">
    
    <title>OL-Pet</title>
</head>
<body>
    <!-- Navbar|Menus -->
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
                    <a class="nav-link" href="cadastroUsuario.php">CADASTRAR</a>
                </li>
               
            </ul>
        </div>
    </nav>

    <div class="container">
    <form action="controleUsuario.php" method="post">
    <br><br>
        <h4>Login</h4>

        <label class="form-label" for="email">E-mail</label>
        <input class="form-control" type="email" id="email" name="email">

        <br><br>
        <label class="form-label" for="senha">Senha</label>
        <input class="form-control" type="password" id="senha" name="senha">

        <br><br>
        <button type="submit" class="btn btn-info" name="login">Login</button>
        

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