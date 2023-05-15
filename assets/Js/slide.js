"use strict"

const radio = document.querySelector('.manual-btn')
let counter = 1

document.getElementById('radio1').checked = true

function nextImage() {
    counter++

    if(counter > 3) {
        counter = 1
    }

    document.getElementById('radio'+counter).checked = true
}

setInterval(()=> {
    nextImage()
}, 5000)