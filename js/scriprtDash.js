const sideMenu = document.querySelector("aside");
const menuBtn = document.querySelector("#menu-btn");
const closeBtn = document.querySelector("#close-btn");
const themeToggler = document.querySelector('.theme-toggler');

menuBtn.addEventListener('click', () => {
    sideMenu.style.display = 'block';
});

closeBtn.addEventListener('click', () => {
    sideMenu.style.display = 'none';
});







themeToggler.addEventListener('click', () => {
    document.body.classList.toggle('dark-theme-variables');

    themeToggler.querySelector('i:nth-child(1)').classList.toggle('active');
    themeToggler.querySelector('i:nth-child(2)').classList.toggle('active');


})


const btns = document.querySelectorAll('.btn');
    const dropMenus = document.querySelectorAll('.drop-menu');
    btns.forEach(btn => {
        btn.addEventListener('click', () => {
            removeActive();
            btn.classList.add('active');
            document.querySelector(btn.dataset.target).classList.add('active');
            
        })
    })

    const removeActive = () => {
        dropMenus.forEach(dropmenu => dropmenu.classList.remove('active'));
    }

    window.onclick = (e) => {
        if (!e.target.matches('.btn')) {
            removeActive();
        }
    }

    