<?php
session_start();
include_once("conexaoDB.php")
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="shortcut icon" href="imagens/cao_(sem_fundo).png" type="link">

    <!-- <link href="css/bootstrap-reboot.css" rel="stylesheet"> -->
    <link href="CSS/estilo.css" rel="stylesheet">
    <title>OLPet | Início</title>
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
                    <a class="nav-link" href="produtos.php">PRODUTOS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="cadastroUsuario.php">CADASTRAR</a>
                </li>
                <li class="nav-item">
                <?php
                if (isset($_SESSION['cpf'])) {
                    ?>
                    <p><a class="nav-link" href="controleUsuario.php"><?= $_SESSION['nome'] ?></a></p>
                    <?php
                
                } else {
                    ?>
                    <p><a class="nav-link" href="login.php">LOGIN</a></p>
                    <?php
                }
                ?>
                </li>
            </ul>
        </div>
    </nav>


    <!-- Notícias -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-11">
                <!-- Carousel -->
                <div class="row" style="margin: 2%; width: 100%; height: 100%;">
                    <div class="col-md-8 offset-md-2">
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>

                            </ol>
                            <div class="carousel-inner" class="ajustavel">
                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="imagens/Noticias_1.png" alt="Primeiro Slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="imagens/Noticias_2.png" alt="Segundo Slide">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Anterior</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Próximo</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-1">
                <!-- Botões Cães ou Gatos | Selecione seu interesse -->
                <div class="caoougato">
                    <a href="cadastroPet.php" target="_blank"> <img src="imagens/cao_(sem_fundo).png" width="200" height="200" alt="Quero adotar um Cão!" title="Quero adotar um Cão!">Clique aqui para cadastrar um Cão!</a>
                    <a href="cadastroPet.php" target="_blank"> <img src="imagens/gato_(sem_fundo).png" width="200" height="200" alt="Quero adotar um Cão!" title="Quero adotar um Gato!">Clique aqui para cadastrar um Gato!</a>
                </div>
            </div>
        </div>
    </div>


    <!-- Listar Animais Disponíveis -->
    <h1 style="text-align: center;">Lista de Animais disponíveis para doação na OlPet</h1>
    <br>
    <br>
<div class="container-fluid">
            <?php
            if (isset($_SESSION['msg'])) {
                echo $_SESSION['msg'];
                unset ($_SESSION['msg']);
            }
            $db = new ConexaoDB();
            $conexao = $db ->abrirConexao();
            $result_pet = "SELECT * FROM pet";
            $resultado_pet = mysqli_query($conexao, $result_pet);
            while($row_pet = mysqli_fetch_assoc($resultado_pet)) {
                echo '<div class="card" style="width: 20rem;">
                                <div class="card-body">
                                    <h5 class="card-title"><b>' . $row_pet['nome_pet'] . '</b></h5>
                                    <h6 class="card-subtitle mb-2 text-muted">' .$row_pet['tipo'] . '</h6>
                                    <p class="card-text">
                                        <b>Raça:</b> ' . $row_pet['raca'] . "<br>" . '
                                        <b>Cor:</b> ' . $row_pet['cor'] . "<br>" . '
                                        <b>Porte:</b> ' . $row_pet['porte'] . "<br>" . '
                                        <b>Idade:</b> ' . $row_pet['idade'] . "<br>".'
                                    </p>
                            </div>
                        </div>
                    <br>
                    <br>';
            }
            ?>
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

    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>