
/** ------- NAVBAR 1 ------- */
const bar = document.getElementById('bar');
const close = document.getElementById('close');
const  nav = document.getElementById('navbar');

if(bar) {
        bar.addEventListener('click', () => {
            nav.classList.add('active');
    })
}

if(close) {
    close.addEventListener('click', () => {
        nav.classList.remove('active');
    })
}

/** ------- NAVBAR 2 ------- */
const nov = document.querySelector('#header-2 .nav-2')
const toggle = document.querySelector('.toggle')

toggle.addEventListener('click', function() {
    nov.classList.toggle('show')
})



/** ------- LOADER ------- */
var loader = document.getElementById('preloader');

window.addEventListener('load', vanish);

function vanish() {
    loader.classList.add('disppear');
}


/** -------------- ANIMAÇÃO -------------------- */
const sr = ScrollReveal({
    duration: 2000,
    reset: true
}, 50)

sr.reveal('.pro');



const debounce = function (func, wait,  imediate) {
    let timeout;

    return function (...args) {
        const context = this;

        const later = function () {
            timeout = null;
            if (!imediate) func.apply(context, args);
        }

        const callNow = imediate && !timeout;
        clearTimeout(timeout);
        timeout = setTimeout(later, wait);
        if (callNow) func.apply(context, args);
    }
}

const target = document.querySelectorAll('[data-anime]');
const animationClass = 'animate';

function animeScroll() {
    const windowTop = window.pageYOffset + ((window.innerHeight * 3) / 4);
    target.forEach(function(element) {
        if(windowTop > element.offsetTop) {
            element.classList.add(animationClass);
        }else {
            element.classList.remove(animationClass);
        }
    });
}

animeScroll();

if(target.length) {
    window.addEventListener('scroll', debounce(function() {
     animeScroll();
    }, 100));
}
