console.log("scripts loaded");

const menuTrigger = document.getElementById("menu-trigger")
const mainMenu = document.getElementById("main-menu")

const menuShowHide = e => {
    e.currentTarget.classList.toggle("open");
    const mainMenu = document.getElementById("main-menu");
    mainMenu.classList.toggle("menu-open");
};

if (menuTrigger) {
    menuTrigger.addEventListener("click", function (e) {
        e.preventDefault();
        menuShowHide(e);
    });
}

if (mainMenu) {
    document.addEventListener('click', function (e) {
        let insideMenu = mainMenu.contains(e.target);
        let insideMenuTrigger = menuTrigger.contains(e.target);
        if (!insideMenu && !insideMenuTrigger) {
            menuTrigger.classList.remove('open')
            mainMenu.classList.remove('menu-open')
        }
    })
}

/*==================================
        Contact Page
==================================*/
const platformSelect = document.querySelectorAll("#target-platforms .options__item");

platformSelect.forEach(elm => {
    elm.addEventListener("click", (e) => {
        // console.log(elm);
        e.preventDefault();
        let currentItem = e.currentTarget;

        if (currentItem.classList.contains("active")) {
            currentItem.classList.remove("active")
            currentItem.children[0].removeAttribute("checked");
        } else {
            currentItem.classList.add("active")
            currentItem.children[0].setAttribute("checked", true);
        }
    })
});

