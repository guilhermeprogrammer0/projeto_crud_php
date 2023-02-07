let ab_modal = document.getElementById('ab-modal');
let excluir = document.getElementById("excluir");
excluir.addEventListener('click',abrir_modal);
function abrir_modal(){
    ab_modal.classList.toggle("ativo");
}
let fechar = document.getElementById("fechar");
fechar.addEventListener('click',fechar_modal);
function fechar_modal(){
    ab_modal.classList.toggle("ativo");
}
