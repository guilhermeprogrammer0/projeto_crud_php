<?php
session_start();
function cadastro($c, $n, $e, $s,$foto)
{
    $sql_verificar = "SELECT email from cadastro  WHERE email = '$e' ";
    $sql = mysqli_query($c, $sql_verificar);
    $qtd_linhas = mysqli_num_rows($sql);
    if ($qtd_linhas > 0) {
?>
<script>alert('E-mail Indisponível');</script>
<?php
    } else {
        $extensao = strtolower(substr($_FILES['foto']['name'],-4));
        $foto = md5(time()) . $extensao;
        $diretorio = "../Upload/";
        move_uploaded_file($_FILES['foto']['tmp_name'],$diretorio.$foto);
        $sql_cadastrar = "INSERT INTO cadastro VALUES(default,'$n','$e','$s','$foto')";
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
    } else {
            ?>
<script>alert('E-mail e/ou senha inválidos.');</script>
<?php
    }
}
function login_menu($c, $e, $s,$tabela,$local)
{
    $sql_verificar = "SELECT *  from " . $tabela . " WHERE email = '$e' AND senha  = '$s' ";
    $sql = mysqli_query($c, $sql_verificar);
    $qtd_linhas = mysqli_num_rows($sql);
    if ($qtd_linhas > 0) {
        while ($linha = mysqli_fetch_array($sql)) {
            $_SESSION['id_adm'] = $linha['id'];
        }
        header("location: " .$local.".php");
    } else {
            ?>
<script>alert('E-mail e/ou senha inválidos.');</script>
<?php
    }
}
function alteracao($c, $n, $e, $s, $id,$tabela)
{
    $sql_alterar = "UPDATE " . $tabela . " set nome = '$n', email = '$e', senha = '$s' WHERE id = $id";
    $sql_alterado = mysqli_query($c, $sql_alterar);
    if ($sql_alterado) {
        ?>
        <script>alert('Alteração realizada com Sucesso.');</script><?php
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
    ?>
<script>alert('Alteração realizada com Sucesso.');</script><?php
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
        <script>alert('Usuário Excluído.');</script>
        <?php
    }
    else{
        ?>
        <script>alert('ERRO!');</script>
        <?php
    }
}
?>