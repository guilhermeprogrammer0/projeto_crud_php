<?php
require_once "conexao.php";
require_once "functions.php";
$id = $_REQUEST['id'];
exclusao($conexao,$id);
header("location:menuadm.php");



?>