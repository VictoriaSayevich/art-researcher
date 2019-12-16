const burger_menu = document.querySelector('#menuToggle');
const mobile_menu = document.querySelector('.mobile_main_menu');

function ChangeStyle(element, value) {
    element.style.zIndex = value;
}

burger_menu.addEventListener('click', () => {
    ChangeStyle(mobile_menu, 2);
});