<?php require_once "functions.php";?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alteração Usuário</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../CSS/style_adm.css">
    <link rel="stylesheet" href="../CSS/style_media.css">
    <link rel="shortcut icon" href="../imagens/img.jpg" type="image/x-icon">
</head>
<body>
    <header>
        <h1>Alterar login</h1>
    </header>
    <main class="main">
        <section class="finalidade-alterar">
            <h1>Alterar Login</h1>
        </section>
        <?php
        error_reporting(0);
        require_once "conexao.php";
        require_once "protecao_menu.php";
        $sql_select = "SELECT * FROM cadastro WHERE id=$_REQUEST[id]";
        $select = mysqli_query($conexao,$sql_select);

    while($row = mysqli_fetch_array($select)){
        ?>
      <section class="formulario">
            <form action="editar.php?id=<?php echo $_REQUEST['id'];?>" method="POST">
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
                    <input type="submit" class="btn btn-warning" name="alterar" value="Alterar">
                    <a href="menuadm.php" class="link"> Voltar ao Menu</a>
                    </form>
                </div>

        </section>
    </main>
    <?php 
    if($_POST['alterar']){
        alteracao($conexao,$_POST['nome'],$_POST['email'],$_POST['senha'],$_REQUEST['id'],'cadastro');
        header("location:menuadm.php");
    }
    ?>
 <script src="../JS/script2.js"></script>
</body>
</html>