var senha = document.getElementById("senha");
let oculta_mostra = document.getElementById("oculta_mostra");
oculta_mostra.addEventListener('click',op_senha);
function op_senha(){
     if(senha.getAttribute("type")== "password"){
        senha.setAttribute("type","text");
        oculta_mostra.innerHTML = 'Ocultar Senha';
     }
     else{
        senha.setAttribute("type","password");
        oculta_mostra.innerHTML = 'Mostrar Senha';
     }
}
