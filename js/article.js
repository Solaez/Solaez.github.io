//ventas inicio_____---------------------------------------------
let slideIndex = 0;
    let timer;

    function showSlides() {
      const slides = document.querySelector('.carousel');
      slides.style.transform = `translateX(-${slideIndex * 50}%)`;
    }

    function nextSlide() {
      if (slideIndex < 3) {
        slideIndex++;
      } else {
        slideIndex = 0;
      }
      showSlides();
    }

    function prevSlide() {
      if (slideIndex > 0) {
        slideIndex--;
      } else {
        slideIndex = 3;
      }
      showSlides();
    }

    function autoSlide() {
      timer = setInterval(() => {
        nextSlide();
      }, 3000); // Cambia 3000 a la cantidad de milisegundos que desees
    }

    autoSlide(); // Comienza el carrusel automático

    function resetTimer() {
      clearInterval(timer); // Detiene el intervalo actual
      autoSlide(); // Reinicia el carrusel automático
    }
    //fin------------------------------------------------------------