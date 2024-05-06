const images = document.querySelectorAll('.image');

images.forEach((image) => {
  image.addEventListener('click', () => {
    image.classList.toggle('zoomed');

    setTimeout(() => {
      image.classList.remove('zoomed');
    }, 3000);
  });
});