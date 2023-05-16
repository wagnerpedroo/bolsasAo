const btnMenu = document.querySelector('.menu');
const menu = document.querySelector('.menu > img')
const ul = document.querySelector('nav > .nav-container ul');
const li = document.querySelectorAll('nav > .nav-container ul li')


btnMenu.addEventListener('click', ()=> {
    ul.classList.toggle('menuShow')
    li.forEach((el)=> {
    el.classList.toggle('slideLi')
    })
})