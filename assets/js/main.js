const boton = document.getElementById('btn-menu');
const menu = document.getElementById('menu');
const title = document.getElementById('title');

boton.addEventListener('click', function() {
    // Aquí agregamos o quitamos la clase 'active' del elemento 'div' con id 'menu'
    if (menu.classList.contains('active')) {
        menu.classList.remove('active'); // Si la tiene, se quita la clase 'active' del 'div'
    } else {
        menu.classList.add('active'); // Si no la tiene, se agrega la clase 'active' al 'div'
        title.classList.add('close');
    }
});

title.addEventListener('click', function() {
    if (title.classList.contains('close')) {
        menu.classList.remove('active'); // Si la tiene, se quita la clase 'active' del 'div'
        title.classList.remove('close');
    } else {
        menu.classList.add('active'); // Si no la tiene, se agrega la clase 'active' al 'div'
        title.classList.add('close');
    }
});

const enlaces = document.querySelectorAll('#menu a');

enlaces.forEach(enlace => {
    enlace.addEventListener('click', function() {
        // Aquí quitamos la clase 'active' del elemento 'div' con id 'menu'
        menu.classList.remove('active');
        menu.classList.remove('close');
    });
});