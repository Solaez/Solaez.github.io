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
        nextSlide2();
      }, 3000); // Cambia 3000 a la cantidad de milisegundos que desees
    }

    autoSlide(); // Comienza el carrusel automático

    function resetTimer() {
      clearInterval(timer); // Detiene el intervalo actual
      autoSlide(); // Reinicia el carrusel automático
    }
    //fin------------------------------------------------------------
    
//ventas inicio_____---------------------------------------------
    let slideIndex2 = 0;
    let timer2;
function showSlides2() {
  const slides2 = document.querySelector('.carousel2');
  slides2.style.transform = `translateX(-${slideIndex2 * 50}%)`;
}

function nextSlide2() {
  if (slideIndex2 < 3) {
    slideIndex2++;
  } else {
    slideIndex2 = 0;
  }
  showSlides2();
}

function prevSlide2() {
  if (slideIndex2 > 0) {
    slideIndex2--;
  } else {
    slideIndex2 = 3;
  }
  showSlides2();
}

function autoSlide2() {
  timer2 = setInterval2(() => {
    nextSlide2();
  }, 3000); // Cambia 3000 a la cantidad de milisegundos que desees
}

autoSlide2(); // Comienza el carrusel automático

function resetTimer2() {
  clearInterval2(timer2); // Detiene el intervalo actual
  autoSlide2(); // Reinicia el carrusel automático
}
//fin------------------------------------------------------------

    