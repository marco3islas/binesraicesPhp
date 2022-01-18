document.addEventListener('DOMContentLoaded', function () {
    eventListeners();

    darkMode();
});

const darkMode = () => {

    const prefiereDarkMode = window.matchMedia('(prefers-color-scheme: dark)');
    console.log(prefiereDarkMode.matches);

    if (prefiereDarkMode) {
        document.body.classList.add('dark-mode');
    }else{
        document.body.classList.remove('dark-mode');
    }

    prefiereDarkMode.addEventListener('change', function(){
        if (prefiereDarkMode) {
            document.body.classList.add('dark-mode');
        }else{
            document.body.classList.remove('dark-mode');
        }
    });

   const botonDarkMode = document.querySelector(".dark-mode-boton");

    botonDarkMode.addEventListener('click', () => {
        document.body.classList.toggle('dark-mode');
    });
}

function eventListeners(){
    const mobileMenu = document.querySelector(".mobile-menu");

    mobileMenu.addEventListener('click', navegacionResponsive);
}

const navegacionResponsive = () => {
    const navegacion = document.querySelector('.navegacion');

        navegacion.classList.toggle('mostrar');
}

