//creation de la fonction pou cliquer sur le menu

const openMenu = () => {
    const menu = document.querySelector(".header-menu");
    menu.classList.toggle("active")
    if (menu.classList.contains("active")) {
        document.querySelector("header .material-icons").innerHTML = "close"        
    }else document.querySelector("header .material-icons").innerHTML = "menu" 
}