<?php session_start();?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alteração Menu</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../CSS/style_adm.css">
    <link rel="stylesheet" href="../CSS/style_media.css">
</head>

<body>
    <header>
        <h1>Alterar login do Menu Aministrativo</h1>
    </header>
    
    <main class="main">
        <section class="escrito3">
            <h1>Alterar Login</h1>
        </section>
        <?php
        error_reporting(0);
        require_once "conexao.php";
        require_once "protecao_menu.php";
        
        $id = $_SESSION['id'];
        $sql_select = "SELECT * FROM administrativo";
        $select = mysqli_query($conexao,$sql_select);
    while($row = mysqli_fetch_array($select)){
        ?>
        <section class="formulario">
            <form action="alterar_menu.php" method="POST">

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
                    <a href="menuadm.php" class="link"> Menu ADM</a>
                </div>
            
        </section>
    </main>
    <?php 
    require_once "functions.php";
    if($_POST['alterar']){
        alteracao_menu($conexao,$_POST['email'], $_POST['senha'],'administrativo');
    }

    ?>
 <script src="../JS/script2.js"></script>
</body>

</html>