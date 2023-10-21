function editarUsuario(id){
    window.location.href = 'editar.php?id=' + id;
}
function excluirUsuario(id){
    let confirma = confirm("Deseja mesmo excluir?");
    if(confirma == true){
        window.location.href='exclusaoUsuario.php?id=' + id;
    }
}