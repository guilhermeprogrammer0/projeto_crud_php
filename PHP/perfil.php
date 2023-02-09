<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="stylesheet" href="../CSS/style_media.css">
</head>

<body>
    <section class="ab-modal" id="ab-modal">
        <div class="m">
            <h1>Deseja mesmo Excluir?</h1>
            <form action="perfil.php" method="POST">
                <div class="sep-2">
                    <input type="button" class="btn btn-warning" id="fechar" value="Não">
                    <input type="submit" class="btn btn-danger" name="excluir" value="Sim">
                </div>
        </div>
    </section>
    </form>
    <header>
        <h1>Projeto Back-End</h1>
    </header>
    <div id="btn_toggle">
        <i class="fa-solid fa-bars fa-3x" id="btnToggle"></i>
       </div> 
    <nav>
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
    <?php
    error_reporting(0);
    require_once "conexao.php";
    require_once "protecao.php";
    require_once "functions.php";
    $id = $_SESSION['id'];
    $sql_select = "SELECT * FROM cadastro WHERE id= $id";
    $sql_mostrar = mysqli_query($conexao, $sql_select);
    while ($row = mysqli_fetch_array($sql_mostrar)) {
    ?>
    <main class="main">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title"><?php echo $row['nome']; ?> </h5>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><?php echo $row['id']; ?></li>
                <li class="list-group-item"><?php echo $row['email']; ?></li>
                <li class="list-group-item"><a href="alterar.php" class="link"> Alterar Dados</a></li>
                <li class="list-group-item"><p id="excluir" style="color:red; cursor:pointer;"> Excluir Perfil</p></li>

            </ul>
            <?php } ?>
    </main>
    <div id="logout">
        <a href="logout.php" class="card-link">Sair</a>
    </div>
    <?php
   if ($_POST['excluir']) {
        exclusao($conexao, $id);
   }
   ?>
    <script src="../JS/modal.js"></script>
    <script src="../JS/menu.js"></script>

</html>
</div>