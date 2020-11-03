const karta = document.querySelector(".karta");
const tresc = document.getElementById("tresc");
const conc = document.querySelector(".conc");
const tit = document.querySelector(".tit1");
let zmienna = 0;

const karta2 = document.querySelector(".karta2");
const tresc2 = document.getElementById("tresc2");
const conc2 = document.querySelector(".conc2");
let zmienna2 = 0;

const karta3 = document.querySelector(".karta3");
const tresc3 = document.getElementById("tresc3");
const hadwa = document.getElementById("hadwa");
const conc3 = document.querySelector(".conc3");
let zmienna3 = 0;

const prz = document.querySelector(".prz");


karta.addEventListener("mouseover", function(){
    if(zmienna==0){
        tresc.className="pokaz";
        karta.style.opacity="80%";
        karta.style.zIndex="0";
        prz.style.zIndex="1";
        tit.style.color="black"
        tresc.style.animation = "wej 0.5s cubic-bezier(0.250, 0.460, 0.450, 0.940) both";
        karta.style.animation = "kolor 1s cubic-bezier(0.250, 0.460, 0.450, 0.940) both";
        zmienna++;
    }
});

karta.addEventListener("mouseleave", function(){
    if(zmienna==1){
        tresc.className="schowaj";
        karta.style.opacity="100%";
        karta.style.zIndex="0";
        prz.style.zIndex="1";
        tit.style.color="white";
        tresc.style.animation = "wyj 0.5s cubic-bezier(0.250, 0.460, 0.450, 0.940) both";
        karta.style.animation = "rolok 1s cubic-bezier(0.250, 0.460, 0.450, 0.940) both";
        zmienna--;
    }
});

// ---------------------------------------

karta2.addEventListener("mouseover", function(){
    if(zmienna2==0){
        tresc2.className="pokaz";
        karta2.style.opacity="80%";
        karta2.style.zIndex="0";
        prz.style.zIndex="1";
        tresc2.style.color="black"
        tresc2.style.animation = "wej 0.5s cubic-bezier(0.250, 0.460, 0.450, 0.940) both";
        karta2.style.animation = "kolor 1s cubic-bezier(0.250, 0.460, 0.450, 0.940) both";
        zmienna2++;
    }
});

karta2.addEventListener("mouseleave", function(){
    if(zmienna2==1){
        tresc2.className="schowaj";
        karta2.style.opacity="100%";
        karta2.style.zIndex="0";
        prz.style.zIndex="1";
        tit.style.color="white";
        tresc2.style.animation = "wyj 0.5s cubic-bezier(0.250, 0.460, 0.450, 0.940) both";
        karta2.style.animation = "rolok 1s cubic-bezier(0.250, 0.460, 0.450, 0.940) both";
        zmienna2--;
    }
});


// ---------------------------------------

karta3.addEventListener("mouseover", function(){
    if(zmienna3==0){
        tresc3.className="pokaz";
        karta3.style.opacity="80%";
        karta3.style.zIndex="0";
        prz.style.zIndex="1";
        tresc3.style.color="black"
        tresc3.style.animation = "wej 0.5s cubic-bezier(0.250, 0.460, 0.450, 0.940) both";
        karta3.style.animation = "kolor 1s cubic-bezier(0.250, 0.460, 0.450, 0.940) both";
        zmienna3++;
    }
});

karta3.addEventListener("mouseleave", function(){
    if(zmienna3==1){
        tresc3.className="schowaj";
        karta3.style.opacity="100%";
        karta3.style.zIndex="0";
        prz.style.zIndex="1";
        tit.style.color="white";
        tresc3.style.color="white";
        tresc3.style.animation = "wyj 0.5s cubic-bezier(0.250, 0.460, 0.450, 0.940) both";
        karta3.style.animation = "rolok 1s cubic-bezier(0.250, 0.460, 0.450, 0.940) both";
        zmienna3--;
    }
});