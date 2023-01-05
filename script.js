let senha = document.getElementById("senha");
senha.addEventListener('input',seguranca);
senha.addEventListener('blur',remove);
let resposta = document.getElementById("resposta");
let oculta_mostra = document.getElementById("oculta_mostra");
let btn_cadastro = document.getElementById("btn_cadastro");
btn_cadastro.disabled = true;
function seguranca(){
    resposta.className = ''
    if(senha.value.length<4){
        resposta.classList.add("ruim");
        btn_cadastro.disabled = true;
    }
    else if(senha.value.length<7){
        resposta.classList.add("medio");
        btn_cadastro.disabled = false;
    }
    else{
        resposta.classList.add("bom");
    }
}
function remove(){
    resposta.className  =''
}
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
