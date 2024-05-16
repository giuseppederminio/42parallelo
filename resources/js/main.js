const images = document.querySelectorAll('.image');

images.forEach((image) => {
  image.addEventListener('click', () => {
    image.classList.toggle('zoomed');

    setTimeout(() => {
      image.classList.remove('zoomed');
    }, 3000);
  });
});

// mappa footer

var map;

function initMap() {
    map = new google.maps.Map(document.getElementById('myMap'), {
        center: new google.maps.LatLng(42.00401669761786, 14.996896470170116),
        zoom: 12
    });
}
// 42.00401669761786, 14.996896470170116