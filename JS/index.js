window.onload = function () {
    const burger = document.querySelector(".burger");
    const nav = document.querySelector(".nav-links");

    console.log("Burger:", burger);
    console.log("Nav:", nav);

    if (burger && nav) {
        burger.addEventListener("click", () => {
            nav.classList.toggle("nav-active");
            burger.classList.toggle("toggle");
        });
    } else {
        console.error("Erreur : l'élément burger ou nav-links est introuvable.");
    }
};