// const addbtn = document.querySelector(".dodaj");
// const inpcnt = document.querySelector(".inputy-cont");

// addbtn.addEventListener('click', function(){
//     if(inpcnt.className === "inputy-cont"){
//         inpcnt.className = "inputy-content-dodawanie";
//     }else{
//         inpcnt.className = "inputy-cont";
//     }
// })

const nextBtn = document.querySelector(".nextBtn");
const prevBtn = document.querySelector(".prevBtn");
const zdjecia = document.querySelector(".images");

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
