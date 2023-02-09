<?php session_start();?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar Dados</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/ae27920976.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="stylesheet" href="../CSS/style_media.css">
</head>
<body>
    <header>
        <h1>Projeto Back-End</h1>
    </header>
    <div id="btn_toggle">
        <i class="fa-solid fa-bars fa-3x" id="btnToggle"></i>
    </div>
    <nav id="menu">
        <div class="escrito">
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
        <section class="escrito4">
            <h1>Alterar Dados</h1>
        </section>
        <?php
        error_reporting(0);
        require_once "conexao.php";
        require_once "protecao.php";
        
        $id = $_SESSION['id'];
        $sql_select = "SELECT * FROM cadastro  WHERE id = $id";
        $select = mysqli_query($conexao,$sql_select);
    while($row = mysqli_fetch_array($select)){
        ?>
        <section class="formulario">
            <form action="alterar.php" method="POST">
            <div class="mb-3">
                    <label for="nome" class="form-label">Nome</label>
                    <input type="text" class="form-control"  id="nome" name="nome" value="<?php echo $row['nome']?>" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">E-mail</label>
                    <input type="email" class="form-control" id="email" name="email" value="<?php echo $row['email']?>" required>
                </div>
                <div class="mb-3">
                    <label for="senha" class="form-label">Senha</label>
                    <input type="password" class="form-control" id="senha" name="senha" value="<?php echo $row['senha']?>" required>
                    <div id="feedback">
                        <p id="oculta_mostra">Mostrar Senha</p>
                    </div>
                </div>
                <?php }?>
                <div class="botoes">
                    <input type="submit" class="btn btn-primary" name="alterar" value="Alterar">
                    </form>
                    <a href="perfil.php" class="link"> Perfil</a>
                </div>
            
        </section>
    </main>
    <?php 
    require_once "functions.php";
    if($_POST['alterar']){
        alteracao($conexao, $_POST['nome'], $_POST['email'], $_POST['senha'],$id,'cadastro');
    }

    ?>
 <script src="../JS/script2.js"></script>
 <script src="../JS/menu.js"></script>
</body>

</html>