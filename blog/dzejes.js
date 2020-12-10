const nextBtn = document.querySelector(".nextBtn");
const prevBtn = document.querySelector(".prevBtn");
const zdjecia = document.querySelector(".zdjecia");

let counter = 1;

nextBtn.addEventListener('click', nextSlide);
prevBtn.addEventListener('click', prevSlide);

function nextSlide(){
    if(counter === 5){
        counter = 0;
    }

    counter++;

    zdjecia.style.backgroundImage = `url(${counter}.jpg)`
}

function prevSlide(){
    if(counter === 1){
        counter = 5;
    }

    counter--;

    zdjecia.style.backgroundImage = `url(${counter}.jpg)`
}



const btn_open = document.querySelector(".btn");
const btn_close = document.querySelector(".zamknij");
const images = document.querySelector(".images");
const form_tag = document.querySelector(".form_tag");
const fa = document.querySelector(".fa");

btn_open.addEventListener('click', function(){
    images.style.display = "block";
    fa.style.display = "block";
    btn_close.style.display = "block";
    images.style.position = "absolute";
    images.style.animation = "scale-in-bottom 0.5s cubic-bezier(0.250, 0.460, 0.450, 0.940) both";
    form_tag.style.display = "none";

});
btn_close.addEventListener('click', function(){   
    images.style.animation = "scale-out-bottom 0.5s cubic-bezier(0.550, 0.085, 0.680, 0.530) both";
    images.style.display = "none";
    btn_close.style.display = "none";
    fa.style.display = "none";
    form_tag.style.display = "flex";
});