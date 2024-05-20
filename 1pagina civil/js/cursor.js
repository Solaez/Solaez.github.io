const cursor = document.querySelector('.cursor');

  document.addEventListener('mousemove', (e) => {
    cursor.style.left = `${e.clientX - cursor.offsetWidth / 2}px`;
    cursor.style.top = `${e.clientY - cursor.offsetHeight / 2}px`;
  });

  document.addEventListener('click', () => {
    cursor.classList.add('expand');
    setTimeout(() => {
      cursor.classList.remove('expand');
    }, 500);
  });