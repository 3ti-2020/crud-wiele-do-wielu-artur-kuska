const nextBtn = document.querySelector(".nextBtn");
const prevBtn = document.querySelector(".prevBtn");
const zdjecia = document.querySelector(".zdjecia");

let counter = 1;

nextBtn.addEventListener('click', nextSlide);
prevBtn.addEventListener('click', prevSlide);

function nextSlide(){
    if(counter === 12){
        counter = 0;
    }

    counter++;

    zdjecia.style.backgroundImage = `url(${counter}.jpg)`
}

function prevSlide(){
    if(counter === 1){
        counter = 12;
    }

    counter--;

    zdjecia.style.backgroundImage = `url(${counter}.jpg)`
}



const btn_open = document.querySelector(".btn");
const btn_close = document.querySelector(".zamknij");

// btn_open.addEventListener('click', function(){
//     zdjecia.style.display = "block";
//     zdjecia.style.position = "absolute";
//     zdjecia.style.animation = "scale-in-bottom 0.5s cubic-bezier(0.250, 0.460, 0.450, 0.940) both";
// });
// btn_close.addEventListener('click', function(){   
//     cardB.style.animation = "scale-out-bottom 0.5s cubic-bezier(0.550, 0.085, 0.680, 0.530) both";
//     zdjecia.style.display = "none";
// });