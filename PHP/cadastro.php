<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/ae27920976.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="stylesheet" href="../CSS/style_media.css">
    <link rel="shortcut icon" href="../imagens/img.jpg" type="image/x-icon">
</head>
<body>
    <header>
        <h1>Projeto</h1>
    </header>
    <div id="btn_toggle">
        <i class="fa-solid fa-bars fa-3x" id="btnToggle"></i>
       </div> 
       <nav id="menu">
        <div class="escrito"><h3>CRUD</h3></div>
        <ul class="menu">
            <li><a href="../index.html"> Início </a></li>
            <li><a href="cadastro.php"> Cadastro </a></li>
            <li><a href="login.php">Entrar</a></li>
            <li><a href="../sobre.html"> Sobre </a></li>
        </ul>
    </nav>
    <main class="main">
        <section class="finalidade">
            <h1>Cadastrar - se</h1>
        </section>
        <section class="formulario">
            <form action="cadastro.php" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="nome" class="form-label">Nome</label>
                    <input type="text" class="form-control" id="nome" name="nome" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">E-mail</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="senha" class="form-label">Senha</label>
                    <input type="password" class="form-control" id="senha" name="senha" required>
                    <div id="feedback">
                        <span id="resposta"></span>
                        <p id="oculta_mostra">Mostrar Senha</p>
                    </div>
                </div>
                <div class="mb-3">
                <label for="foto" class="form-label">Inserir foto</label>
                     <input class="form-control" name="foto" id="foto" type="file">
                </div>
                <div class="botoes">
                <input type="reset" class="btn btn-warning" value="Limpar">
                <input type="submit" class="btn btn-primary" id="btn_cadastro" name="enviar" value="Enviar">
                </div>
            </form>
        </section>
    </main>
    <?php
    error_reporting(0);
    require_once "conexao.php";
    require_once "functions.php";
    if($_POST['enviar']){
        cadastro($conexao, $_POST['nome'], $_POST['email'], $_POST['senha'],$_POST['foto']);
    }
    ?>
    <script src="../JS/script.js"></script>
    <script src="../JS/menu.js"></script>
</body>
</html>