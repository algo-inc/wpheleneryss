const menuButton = document.getElementById('menu-button');
const closeButton = document.getElementById('close-button');
const menu = document.getElementById('menu-wrapper');

menuButton.addEventListener('click', function() {

    menu.classList.add('menu-wrapper_active');
});

closeButton.addEventListener('click', function() {
    menu.classList.remove('menu-wrapper_active');
});