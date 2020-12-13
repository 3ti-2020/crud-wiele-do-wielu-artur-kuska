
function powiadomienie() {
    alert("Login: a Hasło: a");
}

const newAcc = document.querySelector(".newAcc");
const rejestracja = document.querySelector(".rejestracja");
const nowe_konto = document.querySelector(".nowe_konto");
const zaloguj = document.querySelector(".zaloguj");

console.log(newAcc)


newAcc.addEventListener("click", function(){
    rejestracja.style.display = "block";
    nowe_konto.style.display = "flex";
    zaloguj.style.display = "none";
    newAcc.style.display= "none";
})

let post = document.getElementById('post');

post.addEventListener('dragenter', handlerFunction, false);
post.addEventListener('dragleave', handlerFunction, false);
post.addEventListener('dragover', handlerFunction, false);
post.addEventListener('drop', handlerFunction, false);
