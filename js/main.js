console.log("scripts loaded");

const menuTrigger = document.getElementById("menu-trigger")
const mainMenu = document.getElementById("main-menu")

const menuShowHide = e => {
    e.currentTarget.classList.toggle("open");
    const mainMenu = document.getElementById("main-menu");
    mainMenu.classList.toggle("menu-open");
};

menuTrigger.addEventListener("click", function (e) {
    e.preventDefault();
    menuShowHide(e);
});

document.addEventListener('click', function (e) {
    let insideMenu = mainMenu.contains(e.target);
    let insideMenuTrigger = menuTrigger.contains(e.target);
    if (!insideMenu && !insideMenuTrigger) {
        menuTrigger.classList.remove('open')
        mainMenu.classList.remove('menu-open')
    }
})