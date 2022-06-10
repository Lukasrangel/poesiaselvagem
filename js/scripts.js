//lodash
const debounce = function(func, wait, immediate) {
    let timeout;
    return function(...args) {
      const context = this;
      const later = function () {
        timeout = null;
        if (!immediate) func.apply(context, args);
      };
      const callNow = immediate && !timeout;
      clearTimeout(timeout);
      timeout = setTimeout(later, wait);
      if (callNow) func.apply(context, args);
    };
  };



//abre fecha menu-mobile
var menu = document.querySelector('.menu-show-mobile');
var icon = document.querySelector('.menu-mobile');

icon.addEventListener('click', debounce(function(){
    if(menu.style.opacity == 1){
        menu.style.opacity = 0;
    } else {
        menu.style.opacity = 1;
    }
}))

//menu fixed
var windowTop = 0;
var lastposition = 0;

var header = document.querySelector('header');

window.addEventListener('scroll',function(){
    windowTop = window.pageYOffset
    if(windowTop > 320){
        if(windowTop > lastposition){
            header.classList.remove('show');
            header.classList.add('hide')   
        } else {
            header.classList.remove('hide')
            header.classList.add('show');
        }
        lastposition = windowTop;
    }
    
})

//typeWritter
var palavras = document.querySelectorAll('.banner-inicial h2')

palavras.forEach((value, index)=>{
    frase = value.innerHTML.split('')
    elemento = palavras[index]
    elemento.innerHTML = ''
    typeWriter(frase,elemento)  
})

function typeWriter(frase,elemento){
    frase.forEach((letra,index)=>{
        setTimeout(function(){
            elemento.innerHTML += letra
        }, 100 * index)
    })
}

//animation boxes
boxes = document.querySelectorAll('.poesia-single');

window.addEventListener('scroll',debounce(function(){
    box_show();
}))

function box_show(){
    boxes.forEach((box,index)=>{
        Top = window.pageYOffset
        position = box.offsetTop
        if(Top > position - 340){
            box.classList.add('animate');
        }      
    })
}
