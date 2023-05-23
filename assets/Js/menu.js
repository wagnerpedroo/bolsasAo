const btnMenu = document.querySelector('.menu');
const menu = document.querySelector('.menu > img')
const ul = document.querySelector('.nav__container__ul');
const li = document.querySelectorAll('.nav__container__ul li')


btnMenu.addEventListener('click', ()=> {
    ul.classList.toggle('nav__container__ul--menushow')
    li.forEach((el)=> {
    el.classList.toggle('slideLi')
    })
})