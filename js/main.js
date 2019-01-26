window.sr = ScrollReveal();

sr.reveal('.container-left', {
  duration: 2000,
  origin: 'top',
  distance: '300px'
});

sr.reveal('.container-right', {
  duration: 2000,
  origin: 'right',
  distance: '300px'
});

/* smooth scrolling jquery */

document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});
