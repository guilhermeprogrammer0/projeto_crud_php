<?php
session_start();
function cadastro($c, $n, $e, $s)
{
    $sql_verificar = "SELECT email from cadastro  WHERE email = '$e' ";
    $sql = mysqli_query($c, $sql_verificar);
    $qtd_linhas = mysqli_num_rows($sql);
    if ($qtd_linhas > 0) {
?>
<script>alert('E-mail Indisponível');</script>
<?php
    } else {
        $sql_cadastrar = "INSERT INTO cadastro VALUES(default,'$n','$e','$s')";
        $sql_cadastro = mysqli_query($c, $sql_cadastrar);
        if ($sql_cadastro) {
?>
<script>alert('Cadastro feito com Sucesso!');</script>
<?php
        } else {
?>
<script>alert('Erro! Tente Novamente mais tarde!');</script>
<?php
        }
    }

}
function login($c, $e, $s,$tabela,$local)
{
    $sql_verificar = "SELECT *  from " . $tabela . " WHERE email = '$e' AND senha  = '$s' ";
    $sql = mysqli_query($c, $sql_verificar);
    $qtd_linhas = mysqli_num_rows($sql);
    if ($qtd_linhas > 0) {
        while ($linha = mysqli_fetch_array($sql)) {
            $_SESSION['id'] = $linha['id'];
        }
        header("location: " .$local.".php");
        $_SESSION['email'] = $e;
    } else {
            ?>
<script>alert('Usuário Não encontrado em nossa base de dados!');</script>
<?php
    }
}
function alteracao($c, $n, $e, $s, $id,$tabela)
{
    $sql_alterar = "UPDATE " . $tabela . " set nome = '$n', email = '$e', senha = '$s' WHERE id = $id";
    $sql_alterado = mysqli_query($c, $sql_alterar);
    if ($sql_alterado) {
        while ($linha = mysqli_fetch_array($sql_alterado)) {
            $_SESSION['id'] = $linha['id'];
        }
    ?>
<script>alert('Alteração realizada com Sucesso');</script><?php
    } else {
        ?>
<script>alert('ERRO!');</script><?php
    }
}
function alteracao_menu($c,$e,$s,$tabela)
{
    $sql_alterar = "UPDATE " . $tabela . " set email = '$e', senha = '$s'";
    $sql_alterado = mysqli_query($c, $sql_alterar);
    if ($sql_alterado) {
        while ($linha = mysqli_fetch_array($sql_alterado)) {
            $_SESSION['id'] = $linha['id'];
        }
    ?>
<script>alert('Alteração realizada com Sucesso');</script><?php
    } else {
        ?>
<script>alert('ERRO!');</script><?php
    }
}
function exclusao($c,$id){
    $sql_excluir = "DELETE FROM cadastro  WHERE id = $id";
    $sql_excluido = mysqli_query($c,$sql_excluir);
    if($sql_excluido){
        session_unset();
        session_destroy();
        ?>
       
        <script>alert('Usuário Excluído');</script>
        <?php
    }
    else{
        ?>
        <script>alert('ERRO!');</script>
        <?php
    }
}
?>