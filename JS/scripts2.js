

//inicio de seccion-------------------------------------------------------------------------------------------

function validateLogin(event) {
    event.preventDefault();
    showLoading();
    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;
    setTimeout(() => {
        if (username === 'aguerrerosolaez' &&  password === '12062005as' || username === 'user' &&  password === '123') {
            window.location.href = '/sitios/inicio.html';
        } else {
            hideLoading();
            showErrorPopup();
        }
    }, 2000); 
}

function showLoading() {
    const loading = document.getElementById('loading');
    loading.style.display = 'block';
}

function hideLoading() {
    const loading = document.getElementById('loading');
    loading.style.display = 'none';
}

function showErrorPopup() {
    const modal = document.getElementById('errorModal');
    modal.style.display = 'block';
}

function closeErrorPopup() {
    const modal = document.getElementById('errorModal');
    modal.style.display = 'none';
}
//boton subir-----------------------------------------------------------------------------------------------
document.addEventListener("DOMContentLoaded", function() {
  let btnBackToTop = document.getElementById('btnBackToTop');

  window.addEventListener('scroll', function() {
    btnBackToTop.style.display = document.documentElement.scrollTop > 100 ? "block" : "none";
  });

  btnBackToTop.addEventListener('click', function() {
    scrollToTop();
  });

  function scrollToTop() {
    let currentScroll = document.documentElement.scrollTop;
    if (currentScroll > 0) {
      window.scrollTo(0, currentScroll - (currentScroll / 10));
      window.requestAnimationFrame(scrollToTop);
    }
  }
});

//boton para ocultar categorias---------------------------------------------------------------------------


//funcion de detalles de los productos-------------------------------------------------------------------------
const heroSection = document.querySelector('.hero');
const categoriaTipo = document.querySelector('.categoriaTipo');
const gameCards = document.querySelectorAll('.game-card');
const gameDetails = document.querySelector('.game-details');
const gameTitle = document.getElementById('game-title');
const gameDescription = document.getElementById('game-description');
const gamePrice = document.getElementById('game-price');
const gameQuantity = document.getElementById('game-quantity');
const buyBtn = document.getElementById('buy-btn');
const purchaseForm = document.getElementById('purchase-form');
const cancelBtn = document.getElementById('cancel-btn');

buyBtn.addEventListener('click', () => {
  
    gameDetails.style.display = 'none';
    purchaseForm.style.display = 'block';
    heroSection.style.display = 'none';
    categoriaTipo.style.display = 'none';
    gameCards.forEach(card => {
        card.style.display = 'none';
    });
});

cancelBtn.addEventListener('click', () => {
    gameDetails.style.display = 'block';
    purchaseForm.style.display = 'none';
    heroSection.style.display = 'block';
    categoriaTipo.style.display = 'flex';
    
    gameCards.forEach(card => {
      card.style.display = 'block';
      heroSection.style.display = 'block';
      categoriaTipo.style.display = 'block';
      categoriaTipo.style.display = 'flex';
      
      });
      
      gameDetails.style.display = 'none';
      });


gameCards.forEach(card => {
card.addEventListener('click', () => {
const title = card.querySelector('.game-info h3').textContent;
const description = card.querySelector('.game-info p').textContent;
const price = card.querySelector('.game-info h6').textContent; 

gameTitle.textContent = title;
gameDescription.textContent = description;
gamePrice.textContent = price;

gameCards.forEach(otherCard => {
    if (otherCard !== card) {
        otherCard.style.display = 'none';
        heroSection.style.display = 'none';
        categoriaTipo.style.display = 'none';
        
    }
});

gameDetails.style.display = 'block';

});
});


const backBtn = document.getElementById('back-btn');

backBtn.addEventListener('click', () => {
gameCards.forEach(card => {
card.style.display = 'block';
heroSection.style.display = 'block';
categoriaTipo.style.display = 'block';
categoriaTipo.style.display = 'flex';

});

gameDetails.style.display = 'none';
});

gameCards.forEach(card => {
  card.addEventListener('click', () => {
      const title = card.querySelector('.game-info h3').textContent;
      const description = card.querySelector('.game-info p').textContent;
      const price = card.querySelector('.game-info h6').textContent;
      const imageSrc = card.querySelector('img').src;

      gameTitle.textContent = title;
      gameDescription.textContent = description;
      gamePrice.textContent = price;

      // Mostrar la imagen y el nombre del producto en el formulario de compra
      document.getElementById('product-image').src = imageSrc;
      document.getElementById('product-name').textContent = title;

      gameCards.forEach(otherCard => {
          if (otherCard !== card) {
              otherCard.style.display = 'none';
              heroSection.style.display = 'none';
              categoriaTipo.style.display = 'none';
          }
      });

      gameDetails.style.display = 'block';
  });
});

//carroucel-----------------------------------------------------------------------------
document.addEventListener('DOMContentLoaded', () => {
    const gameCards = document.querySelectorAll('.game-card');
    const gameDetails = document.querySelector('.game-details');
    const gameTitle = document.getElementById('game-title');
    const gameDescription = document.getElementById('game-description');
    const gamePrice = document.getElementById('game-price');
    const purchaseForm = document.getElementById('purchase-form');
    const cancelBtn = document.getElementById('cancel-btn');
    const productImage = document.getElementById('product-image');
    const productName = document.getElementById('product-name');
    const hiddenProductName = document.getElementById('hidden-product-name');
    const hiddenProductPrice = document.getElementById('hidden-product-price');

    gameCards.forEach(card => {
        card.addEventListener('click', () => {
            const title = card.querySelector('.game-info h3').textContent;
            const description = card.querySelector('.game-info p').textContent;
            const price = card.querySelector('.product-price').textContent;
            const imageSrc = card.querySelector('img').src;

            gameTitle.textContent = title;
            gameDescription.textContent = description;
            gamePrice.textContent = price;

            productImage.src = imageSrc;
            productName.textContent = title;
            hiddenProductName.value = title;
            hiddenProductPrice.value = price;

            gameCards.forEach(otherCard => {
                if (otherCard !== card) {
                    otherCard.style.display = 'none';
                }
            });

            gameDetails.style.display = 'block';
            purchaseForm.style.display = 'none';
        });
    });

    cancelBtn.addEventListener('click', () => {
        gameDetails.style.display = 'none';
        purchaseForm.style.display = 'none';

        gameCards.forEach(card => {
            card.style.display = 'block';
        });
    });
});
