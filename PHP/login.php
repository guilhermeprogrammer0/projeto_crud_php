<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudo PHP</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../CSS/style.css">
</head>

<body>
    <header>
        <h1>Projeto Back-End</h1>
    </header>
    <nav>
        <div id="escrito">
            <h3>CRUD</h3>
        </div>
        <ul class="menu">
            <li><a href="../index.html"> Início </a></li>
            <li><a href="cadastro.php"> Cadastro </a></li>
            <li><a href="login.php"> Login</a></li>
            <li><a href="../sobre.html"> Sobre </a></li>
        </ul>
    </nav>
    <main class="main">
        <section class="escrito3">
            <h1>Logar</h1>
        </section>
        <section class="formulario">
            <form action="login.php" method="POST">
                <div class="mb-3">
                    <label for="email" class="form-label">E-mail</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="senha" class="form-label">Senha</label>
                    <input type="password" class="form-control" id="senha" name="senha" required>
                    <div id="feedback">
                        <p id="oculta_mostra">Mostrar Senha</p>
                    </div>
                </div>

                <div class="botoes">
                <input type="reset" class="btn btn-warning" value="Limpar">
                <input type="submit" class="btn btn-primary" name="logar" value="Logar">
    
                </div>
            </form>
        </section>
    </main>
    <?php
    error_reporting(0);
     require_once "conexao.php";
     require_once "functions.php";
    if($_POST['logar']){
        login($conexao, $_POST['email'], $_POST['senha'],'cadastro','perfil');
    }

    ?>
  
  <script src="script2.js"></script>
</body>

</html>