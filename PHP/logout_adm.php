<?php
session_start();
unset($_SESSION['id_adm']);
header("location:../index.html");
?>