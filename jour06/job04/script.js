const hamburger = document.querySelector('.header-toggler')
const headerA = document.querySelector('header')

hamburger.addEventListener('click', toggleHead)

function toggleHead() {
    hamburger.classList.toggle('active')
    headerA.classList.toggle('active')
}

