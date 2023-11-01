<?php
require_once "functions.php";
require_once "conexao.php";
require_once "protecao_menu.php";
alteracao($conexao,$_POST['nome'],$_POST['email'],$_POST['senha'],$_POST['id'],'cadastro');
header("location:menuadm.php");
?>