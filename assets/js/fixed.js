
(function () {

    let navegacion = document.querySelector('#navegacion');
    let main = document.querySelector('main');
    let navegacionHeight = navegacion.getBoundingClientRect().height;
    let breakpoint = main.offsetTop - navegacionHeight;
    let windowPos;
    let isFixed = false;

    function updatePos() {
        windowPos = window.scrollY;
    }

    function onScroll() {

        updatePos();

        if (windowPos >= breakpoint && !isFixed) {
            navegacion.classList.remove('abrir');

            navegacion.classList.add('navegacion-fixed');
            main.style.cssText = "margin-top: " + navegacionHeight + 'px;';
            isFixed = true;

        } else if (windowPos < breakpoint && isFixed) {
            navegacion.classList.remove('navegacion-fixed');
            main.style.cssText = "margin-top " + 0;
            isFixed = false;
        }
    }

    document.addEventListener('scroll', onScroll);

})()
