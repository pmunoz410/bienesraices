document.addEventListener('DOMContentLoaded', function() {
    eventListener()
    darkMode()
})

function eventListener() {
    const mobileMenu = document.querySelector('.mobile-menu')

    mobileMenu.addEventListener('click', navegacionResponsive)
}

function navegacionResponsive() {
    const navegacion = document.querySelector('.navegacion')

    navegacion.classList.toggle('mostrar')
}

function darkMode() {
    const prefersDarkMode = window.matchMedia('(prefers-color-scheme: dark)')

    // console.log(prefersDarkMode.matches);

    if(prefersDarkMode.matches) {
        document.body.classList.add('dark-mode')
    } else {
        document.body.classList.remove('dark-mode')
    }

    prefersDarkMode.addEventListener('change', function() {
        if(prefersDarkMode.matches) {
            document.body.classList.add('dark-mode')
        } else {
            document.body.classList.remove('dark-mode')
        }
    })

    const botonDarkMode = document.querySelector('.dark-mode-boton')

    botonDarkMode.addEventListener('click', function() {
        document.body.classList.toggle('dark-mode')
    })
}