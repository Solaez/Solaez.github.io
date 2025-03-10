
    document.querySelector('.estender').addEventListener('click', function() {
        const asideElement = document.getElementById('asideElement');
        asideElement.classList.toggle('collapsed');
    });
    
    function toggleSidebar() {
        document.querySelector('aside').classList.toggle('open');
    }

    
   let slideIndex = 0;
   showSlides(slideIndex);
   
   function currentSlide(n) {
     showSlides(slideIndex = n - 1);
   }
   
   function showSlides(n) {
     let i;
     const slides = document.getElementsByClassName("carousel-slide");
     const thumbnails = document.getElementsByClassName("thumbnail");
     for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";
       thumbnails[i].style.border = "2px solid transparent";
     }
     slides[slideIndex].style.display = "block";
     thumbnails[slideIndex].style.border = "2px solid #fff";
   }
   
   document.getElementById("prevBtn").addEventListener("click", () => {
     slideIndex--;
     if (slideIndex < 0) slideIndex = document.getElementsByClassName("carousel-slide").length - 1;
     showSlides(slideIndex);
   });
   
   document.getElementById("nextBtn").addEventListener("click", () => {
     slideIndex++;
     if (slideIndex >= document.getElementsByClassName("carousel-slide").length) slideIndex = 0;
     showSlides(slideIndex);
   });
   