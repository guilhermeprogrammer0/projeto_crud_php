<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Menu Administrativo</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../CSS/style_adm.css">
    <link rel="stylesheet" href="../CSS/style_media.css">
    <link rel="shortcut icon" href="../imagens/img.jpg" type="image/x-icon">
</head>

<body>
    <header>
        <h1>Menu Administrativo</h1>
    </header>
    
    <main class="main">
        <section class="finalidade">
            <h1>Logar</h1>
        </section>
        <section class="formulario">
            <form action="login_menuadm.php" method="POST">
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
        login_menu($conexao, $_POST['email'], $_POST['senha'],'administrativo','menuadm');
    }

    ?>
   
  
  <script src="../JS/script2.js"></script>
</body>

</html>