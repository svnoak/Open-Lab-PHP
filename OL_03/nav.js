function setNavSelector(){
    let navItems = document.querySelectorAll(".nav-item").length;
    console.log(navItems);
    let selector = document.querySelector("#selector");

    let root = document.documentElement;
    root.style.setProperty('--selector-position', `-${navItems}0vw`);
}

setNavSelector();