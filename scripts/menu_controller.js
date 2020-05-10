const burger_menu = document.querySelector('#menuToggle');
const mobile_menu = document.querySelector('.mobile_main_menu');
const header = document.querySelector('header');

function ChangeStyle(element, value) {
    element.style.zIndex = value;
}

burger_menu.addEventListener('click', () => {
    ChangeStyle(mobile_menu, 2);
});

function changeClass(nodeElement, classNameAdd, classNameRemove = '') {
    nodeElement.classList.remove(classNameRemove);
    nodeElement.classList.add(classNameAdd);
}

let showScrollHeader = function(header) {
    changeClass(header, 'scroll', 'not-scroll');
}

let hideScrollHeader = function(header, logoHide, logoShow) {
    // header.classList.remove('show-anim');
    changeClass(header, 'not-scroll', 'scroll');
}

function eventScrollHeader(header) {
    document.addEventListener('scroll', () => {
        showScrollHeader(header);
        if (!window.pageYOffset) {
            hideScrollHeader(header);
        }
    });
    document.removeEventListener('scroll', hideScrollHeader);
}
eventScrollHeader(header);
console.log(header);