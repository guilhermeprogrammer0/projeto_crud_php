<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Administrativo</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../CSS/style_adm.css">
    <link rel="stylesheet" href="../CSS/style_media.css">
    <link rel="shortcut icon" href="../imagens/img.jpg" type="image/x-icon">
</head>
<body>
    <header>
        <h1>Dados Usuários</h1>
    </header>
    <?php
    error_reporting(0);
    require_once "conexao.php";
    require_once "protecao_menu.php";
    require_once "functions.php";
    $sql = "SELECT * FROM cadastro";
    $sql_select = mysqli_query($conexao,$sql);
   ?>
   <h1>Cadastros Realizados</h1>
    <main class="tabela-usuarios">
    <table class="table table-dark table-hover">
    <thead>
  
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nome</th>
      <th scope="col">E-mail</th>
    </tr>
  </thead>
  <tbody>
    <?php while($row = mysqli_fetch_array($sql_select)){?>
    <tr>
        <td><?php echo $row['id'];?> </td>
        <td><?php echo $row['nome'];?></td>
        <td><?php echo $row['email'];?> </td>
    </tr>
    <?php }?>
  </tbody>
    </table>
    </main>
    <section class="container">
        <div class="botoes">
        <a href="alterar_menu.php"><button class="btn btn-warning btn-lg">Alterar login Menu</button> </a>
        <a href="logout_adm.php"><button class="btn btn-danger btn-lg">Sair</button> </a>
        
        </div>

    </section>

</body>
</html>