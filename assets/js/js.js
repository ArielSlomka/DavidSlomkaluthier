// declaro constantes que guardan cada elemento principal que voy a usar para hacerles modificaciones.
const navbar = document.querySelector(`#js-navbar`);
const titulo = document.querySelector(`.header__titulos`);

// declaro las funciones que voy a usar, con las intrucciones de lo que quiero que pase.
function hacerleCosasAlNavbar() {
    // busco el menu dentro del navbar
    let img = navbar.querySelector('#js-navbar .navbar__logo');

    // agrego un setTimeout para que las cosas pasen con algo de retraso.
    setTimeout(() => {
        // agrego clase al menu
        navbar.classList.add('show');
        // tomo la altura del menu y lo asigno a una variable
        let imgHeight = img.getBoundingClientRect().height;

        // le doy al navbar la altura exacta que tiene el menu
        navbar.style.height = `${imgHeight}px`;
        navbar.classList.add('show');
    }, 300)
}

function hacerleCosasAlTitulo() {
    setTimeout(() => {
        // agrego clase al titulo
        titulo.classList.add('show');
    }, 600)
}

// declaro Event Listeners para decidir cuándo se ejecutan las funciones y las llamo dentro.
if(navbar) {document.addEventListener('DOMContentLoaded',  hacerleCosasAlNavbar);}
document.addEventListener('DOMContentLoaded',  hacerleCosasAlTitulo);