let dropdown = document.querySelector('.menu'), //target the ul element
    submenu = document.querySelector('.sub-menu'), //target the ul li and ul
    buttonClick = document.querySelector('.check-button'), //target button
    hamburger = document.querySelector('.menu-icon'); // target menu

buttonClick.addEventListener('click', () => {
    dropdown.classList.toggle('show-dropdown');
    if (submenu){
        submenu.classList.toggle('show-dropdown');
    }
    hamburger.classList.toggle('animate-button');
}
)
