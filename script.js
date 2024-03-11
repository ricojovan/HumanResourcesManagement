const nav = document.querySelector("nav");
window.addEventListener("scroll", function(){
    nav.classList.toggle("sticky", window.scrollY > 150);
});

$(document).ready(function(){
    //jquery for toggle sub menus
    $('.sub-btn').click(function(){
        $(this).next('.sub-menu').slideToggle();
        $(this).find('.dropdown').toggleClass('rotate');
    });

    // Handle hover events for menu button and side-bar
    $('.menu-btn, .side-bar').hover(function(){
        $('.side-bar').addClass('active');
    }, function(){
        $('.side-bar').removeClass('active');
    });

    // Active cancel button (close button)
    $('.close-btn').click(function(){
        $('.side-bar').removeClass('active');
    });
});
