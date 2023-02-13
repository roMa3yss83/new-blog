$(document).ready(function() {
    
// Щелчок на значок бургера на панели навигации
    $(".navbar-burger").click(function() {

        // Переключить класс "is-active" как на "navbar-burger", так и на "navbar-menu".
        $(".navbar-burger").toggleClass("is-active");
        $(".navbar-menu").toggleClass("is-active");

    });
});