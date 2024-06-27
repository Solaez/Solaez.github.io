window.addEventListener('DOMContentLoaded', () => {
  const urlFragment = window.location.hash.slice(1);
  if (urlFragment) {
      const selectButton = document.querySelector(`.product[id="${urlFragment}"] button`);
      if (selectButton) {
          selectButton.click();
      }
  }
});
