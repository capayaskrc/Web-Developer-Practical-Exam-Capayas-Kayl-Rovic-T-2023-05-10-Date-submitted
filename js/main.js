$(document).ready(function() {
    // add active class to clicked link
    $('.navbar-custom .nav-link').click(function() {
      $('.navbar-custom .nav-link').removeClass('active');
      $(this).addClass('active');
    });
  });



const currentCar = document.getElementById('current-car');
const targetCar = document.getElementById('target-car');
const currentColor = document.getElementById('current-color');
const targetColor = document.getElementById('target-color');

function updateCars() {
  const currentColorValue = currentColor.value;
  const targetColorValue = targetColor.value;
  const currentCarSrc = `img/${currentColorValue}-car.png`;
  const targetCarSrc = `img/${targetColorValue}-car.png`;

  currentCar.src = currentCarSrc;
  targetCar.src = targetCarSrc;
}

currentColor.addEventListener('change', updateCars);
targetColor.addEventListener('change', updateCars);



