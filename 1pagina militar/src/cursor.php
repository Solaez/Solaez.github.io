<div class="cursor-container">
<div class="cursor"></div>
<style>
    /* Estilos para el cursor personalizado */
.cursor-container {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: 9999;
  pointer-events: none;
}
.cursor {
  display: none;
  width: 20px;
  height: 20px;
  border: 1px solid white;
  border-radius: 50%;
  position: absolute;
  transition: transform 0.3s ease;
  transform-origin: center;
  pointer-events: none;
}
.cursor.expand {
  transform: scale(3);
  border-color: rgb(0, 68, 255);
  display: block;
}
.cursor {
  width: 20px;
  height: 20px;
  border: 1px solid white;
  border-radius: 50%;
  position: absolute;
  transition-duration: 200ms;
  transition-timing-function: ease-out;
  animation: cursorAnim 0.5s infinite alternate;
  pointer-events: none;
}
.cursor::after {
  content: "";
  width: 20px;
  height: 20px;
  position: absolute;
  border: 8px solid gray;
  border-radius: 50%;
  opacity: 0.5;
  top: -8px;
  left: -8px;
  animation: cursorAnim2 0.5s infinite alternate;
}
@keyframes cursorAnim {
  from {
    transform: scale(1);
  }

  to {
    transform: scale(0.7);
  }
}
@keyframes cursorAnim2 {
  from {
    transform: scale(1);
  }

  to {
    transform: scale(0.4);
  }
}
@keyframes cursorAnim3 {
  0% {
    transform: scale(1);
  }

  50% {
    transform: scale(3);
  }

  100% {
    transform: scale(1);
    opacity: 0;
  }
}
.expand {
  animation: cursorAnim3 0.5s forwards;
  border: 1px solid rgb(77, 9, 9);
}

/* Estilos para dispositivos móviles */
@media screen and (max-width: 868px) {
  .cursor {
    display: none;
  }
  .cursor.expand {
    transform: scale(3);
    border-color: rgb(0, 68, 255);
    display: block;
  }
}

</style>
<script>
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
</script>