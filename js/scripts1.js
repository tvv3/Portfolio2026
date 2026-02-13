/*!
* Start Bootstrap - Creative v7.0.2 (https://startbootstrap.com/theme/creative)
* Copyright 2013-2021 Start Bootstrap
* Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-creative/blob/master/LICENSE)
*/
//
// Scripts
// 

window.addEventListener('DOMContentLoaded', event => {

    // Navbar shrink function
    var navbarShrink = function () {
        const navbarCollapsible = document.body.querySelector('#mainNav');
        if (!navbarCollapsible) {
            return;
        }
        if (window.scrollY === 0) {
            navbarCollapsible.classList.remove('navbar-shrink')
        } else {
            navbarCollapsible.classList.add('navbar-shrink')
        }

    };

    // Shrink the navbar 
    navbarShrink();

    // Shrink the navbar when page is scrolled
    document.addEventListener('scroll', navbarShrink);

    // Activate Bootstrap scrollspy on the main nav element
    const mainNav = document.body.querySelector('#mainNav');
    if (mainNav) {
        new bootstrap.ScrollSpy(document.body, {
            target: '#mainNav',
            offset: 74,
        });
    };

    // Collapse responsive navbar when toggler is visible
    const navbarToggler = document.body.querySelector('.navbar-toggler');
    const responsiveNavItems = [].slice.call(
        document.querySelectorAll('#navbarResponsive .nav-link')
    );
    responsiveNavItems.map(function (responsiveNavItem) {
        responsiveNavItem.addEventListener('click', () => {
            if (window.getComputedStyle(navbarToggler).display !== 'none') {
                navbarToggler.click();
            }
        });
    });

    // Activate SimpleLightbox plugin for portfolio items
   /* new SimpleLightbox({
        elements: '#portfolio a.portfolio-box'
    });*/
    /* trebuie pastrate lightbox-ul pentru active nav-links dar am dezactivat in index din html am schimbat tagurile si acum 
    nu se mai deschide caruselul si in pagina de index la portofoliu */
    var lightbox = new SimpleLightbox('#portfolio a.portfolio-box', 
    {overlay:true, overlayOpacity:0.9, nav:true});

});
//trebuie pusa aici functia de mai jos in afara loadului
function gotoproj(nr){
    // this.removeHandler();
     //this.event.preventDefault();
    /* lightbox.on('show.simplelightbox', function () {
         // Do something…
         this.removeHandler();
         
     });*/
        window.location.assign("proj"+nr+".php");
         //mergea cu alerta doar in functia de mai sus cu load 
     }


