let isOpen = false;
document.addEventListener('DOMContentLoaded', () => {
  let targets = document.getElementById('wrapper');
  let wrapperStyle = wrapper.style;
  let button = document.getElementById('button');
  button.addEventListener('click', () => {
    if (isOpen) {
      anime({
        targets,
        height: 0,
        opacity: [1, 0],
        duration: 400,
        easing: 'easeOutQuad',
        complete() {
          isOpen = false;
          wrapperStyle.display = '';
        }
      });
    } else {
      isOpen = true;
      wrapperStyle.display = 'block';
      wrapperStyle.height = '0px';
      anime({
        targets,
        height: el => el.scrollHeight,
        opacity: [0, 1],
        duration: 400,
        easing: 'easeOutCubic'
      });
    }
  }, false);
}, false);

let animation = anime({
    targets: '.letter',
    opacity: 1,
    translateY: 50, 
    rotate: {
      value: 360,
      duration: 2000,
      easing: 'easeInExpo'
    }, 
    delay: anime.stagger(100, {start: 1000}), 
    translateX: [-10, 30]
  });        
  
  anime({
      targets: '.delivery',
      translateX: [
        {value: 1000, duration: 5000, delay: 500},
        {value: 3000, duration: 5000, delay: 500},
      ],
      loop: true
  })

  // Initialize and add the map
function initMap() {
  // The location of Uluru
  const uluru = { lat: -25.344, lng: 131.036 };
  // The map, centered at Uluru
  const map = new google.maps.Map(document.getElementById("map"), {
    zoom: 4,
    center: uluru,
  });
  // The marker, positioned at Uluru
  const marker = new google.maps.Marker({
    position: uluru,
    map: map,
  });
}
/*
const zdjecia = document.querySelectorAll('.img');
for (const zdjecie of zdjecia) {
  zdjecie.addEventListener('click', () => {
    if(zdjecie.style.height=="80%")
    {
      zdjecie.style.height="";
      zdjecie.style.width="";
    }
    else
    {
      zdjecie.style.height="80%";
      zdjecie.style.width="80%";
    }
  });
}
*/

const zdjecia = document.querySelectorAll('.img');
for (const zdjecie of zdjecia) {
  zdjecie.addEventListener('click', () => {
    if(zdjecie.style.height=="90%"){
      zdjecie.style.opacity = "0";
    }
    else{
      zdjecie.style.opacity = "0";
    }
  });
}
