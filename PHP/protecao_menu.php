<?php
session_start();
if(!isset($_SESSION['id_adm'])){
    header("location:login_menuadm.php");
}

?>