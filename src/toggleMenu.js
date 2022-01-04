const checkbtn = document.getElementById('checkbtn');
const links = document.querySelectorAll('.nav_link');

function toggleMenu() {
    const nav = document.getElementById('nav');
    nav.classList.toggle('active');
}

checkbtn.addEventListener('click', toggleMenu);
links.forEach((link)=>{
    link.addEventListener('click', toggleMenu)
})