document.addEventListener("DOMContentLoaded", () => {
  const header = document.querySelector("#header");
  let logo = document.querySelector("#logo");

  if (header) {
    // IF HEADER EXISTS
    const headerOffset = header.offsetTop;

    window.addEventListener("scroll", () => {
      if (window.scrollY > headerOffset) {
        header.classList.add("sticky");
        logo.classList.add("slideRight");
      } else {
        header.classList.remove("sticky");
        logo.classList.remove("slideRight");
        logo.classList.add("sliderleft");
      }
    });
  } else {
    console.error("Header element not found!");
  }
});

document.addEventListener("DOMContentLoaded", () => {
  const boxes = document.querySelectorAll(".box");

  window.addEventListener("scroll", () => {
    boxes.forEach((box) => {
      if (box.getBoundingClientRect().top <= window.innerHeight) {
        box.classList.add("visible");
      }
    });
  });
});






document.addEventListener('DOMContentLoaded', () => {
  const images = [
    './assets/images/index/bannerauto.png',
    './assets/images/index/computer-bg.png',
    './assets/images/index/entertainment-bg.png'
  ];

  const heroSection = document.querySelector('.hero-bg');
  let currentIndex = 0;

  function changeBackground() {
    const img = new Image();
    img.src = images[currentIndex];
    img.onload = () => {
      heroSection.style.backgroundImage = `url(${images[currentIndex]})`;
      currentIndex = (currentIndex + 1) % images.length; // loop image
    };
    img.onerror = () => {
      let default_image = heroSection.style.backgroundImage = `url(${images[0]})`;
      console.error(`Image not found: ${images[currentIndex]}  default_image: ${default_image}`);  
    };
  }

  // call slideshow
  changeBackground();
  setInterval(changeBackground, 10000);
});


