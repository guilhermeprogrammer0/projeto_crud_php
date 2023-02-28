var btnToggle = document.querySelector("#btnToggle");
btnToggle.addEventListener('click',menu_mobile);
var menu = document.querySelector("#menu");
function menu_mobile(){
    menu.classList.toggle("menu_ativo")
}
