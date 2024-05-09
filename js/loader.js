//loader de productos---------------------------------------------------------------------------------
const productImages = document.querySelectorAll('.product img');

productImages.forEach(image => {
  const productLoader = image.parentNode.querySelector('.product-loader');

  image.addEventListener('load', () => {
    setTimeout(() => {
      productLoader.style.opacity = '0';
      setTimeout(() => {
        productLoader.parentNode.removeChild(productLoader);
      }, 500);
    }, 200);
  });
});
//-----------------------------------------------------------------------------------------------
